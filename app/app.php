<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Scrabble.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('scrabble.html.twig');
    });

    $app->get('/scrabble_calculate', function() use($app) {
        $my_Scrabble = new Scrabble;
        $score = $my_Scrabble->wordValue($_GET['input_word']);
        return $app['twig']->render('calculate.html.twig', array('score' => $score));
    });

    return $app;

?>

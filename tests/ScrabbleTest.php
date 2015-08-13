<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_wordValue_singleLetter()
        {
            $test_Scrabble = new Scrabble;
            $word = "a";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(1, $result);
        }

        function test_wordValue_singleLetterTwo()
        {
            $test_Scrabble = new Scrabble;
            $word = "d";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(2, $result);
        }

        function test_wordValue_singleLetterThree()
        {
            $test_Scrabble = new Scrabble;
            $word = "b";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(3, $result);
        }

        function test_wordValue_singleLetterFour()
        {
            $test_Scrabble = new Scrabble;
            $word = "f";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(4, $result);
        }

        function test_wordValue_singleLetterFive()
        {
            $test_Scrabble = new Scrabble;
            $word = "k";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(5, $result);
        }

        function test_wordValue_singleLetterEight()
        {
            $test_Scrabble = new Scrabble;
            $word = "j";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(8, $result);
        }

        function test_wordValue_singleLetterTen()
        {
            $test_Scrabble = new Scrabble;
            $word = "q";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(10, $result);
        }

        function test_wordValue_word()
        {
            $test_Scrabble = new Scrabble;
            $word = "egchkxz";

            $result = $test_Scrabble->wordValue($word);

            $this->assertEquals(33, $result);
        }

    }
?>

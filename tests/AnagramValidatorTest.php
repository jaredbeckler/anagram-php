<?php

    require_once 'src/AnagramValidator.php';

    class AnagramValidatorTest extends PHPUnit_Framework_TestCase
    {
        function test_stringsToLowerCase()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "Nap";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input);

            // Assert
            $this->assertEquals("anp", $result);
        }

        function test_removeNonLetters()
        {
            //Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "9fooD!/";

            //Act
            $result= $new_AnagramValidator->checkAnagram($input);

            //Assert
            $this->assertEquals("dfoo", $result);
        }

        function test_separateStringLetters()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "hi";

            // Act
            $result =$new_AnagramValidator->checkAnagram($input);

            // Arrange
            $this->assertEquals("hi", $result);
        }

        function test_sortArrayAlphabetically()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "dog";

            // Act
            $result =$new_AnagramValidator->checkAnagram($input);

            // Arrange
            $this->assertEquals("dgo", $result);
        }

        function test_combineLetters()
        {
            // Arrange
            $new_AnagramValidator = new AnagramValidator;
            $input = "rat";

            // Act
            $result = $new_AnagramValidator->checkAnagram($input);

            // Assert
            $this->assertEquals("art", $result);
        }
    }

?>

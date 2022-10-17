<?php 
$title = "String Manipulation";
include 'Assets/header.php' ?>
<h1>String Manipulation</h1>
    <br>

    <?php
            $phrase1 = "I am a part-time student";
            $phrase2 = "who is working hard";
            $name ="rushelle forrest";
            echo $phrase1 . ", by the name of Rushelle, ". $phrase2;
            echo '<br/>';
            echo '<hr/>';

            //transforming a string
            echo 'Uppercase first letter: ' . ucfirst($name) . '<br/>';
            echo 'Uppercase first letter of each word: ' . ucwords($name). '<br/>';
            echo 'Uppercase: ' . strtoupper($name).'<br/>';
            echo 'Lower cas:' . strtolower("THIS WAS UPPER CASE"). '<br/>';
            echo '<hr/>';
            echo 'Repeat string: ' . str_repeat('R',15) . '<br/>';
            echo 'Repeat string - Nested Function: ' . strtolower(str_repeat('R',15)) . '<br/>';
            echo 'Get a substring: ' . substr($name, 3, 4). '<br/>';
            echo 'Get position of string: ' . strpos($name, 'f'). '<br/>';

            //Returning strings

            echo 'Find Character "s" : ' . strchr($name, 's'). '<br/>';
            echo 'Find Character "F" : ' . strchr($name, 'F'). '<br/>';
            echo 'Find Character "u" : ' . strchr($name, 'u'). '<br/>';
            echo 'Find Character "h" : ' . strchr($name, 'h'). '<br/>';

            echo 'Find Length of String: ' . strlen($name) . '<br/>';

            echo 'Without Trim: ' . "H" . " I J K " . "L" . '<br/>';

            echo 'Trim spaces on both sides:'. "A" . trim(" B C D") . "E" . '<br/>';
            echo 'Trim spaces to the left:'. "Q" . ltrim(" R S T") . "U" . '<br/>';
            echo 'Trim spaces to the right:'. "L" . rtrim(" O V E") . "Y" . '<br/>';

            echo 'Replace string with another:'. str_replace("working", "stressing", $phrase2) . '<br/>';


    ?>

<?php require 'Assets/footer.php' ?>
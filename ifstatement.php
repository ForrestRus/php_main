<?php 
$title = "If Statements";
include 'Assets/header.php' ?>
    <!-- Main Heading -->
    <h1>If-Else Statement</h1>
    <br>

    <?php
    // If statement base on value.

    echo "<h2> If Statement</h2>";
    echo '<br/>';

    $grade = 70;

    //Comparison Operators (==, >, <, <=, >=)

    if($grade >= 70){

        echo '<h3 style="color: blue"> YOU HAVE PASSED</h3>';
    }
    else {

        echo '<h3 style="color:red"> YOU HAVE FAILED</h3>';
    }
    
    $grade = 'A';

    if ($grade == 'A'){

        echo '<h2 style="color: yellow"> YOU ARE A GENIUS</h2';
    }
    else if ($grade == 'B'){

        echo '<h2 style="color: orange">YOU ARE DOING GOOD!</h2';
    }
    else {
        echo '<h2 style="color: black"> YOU HAVE FAILED!</h2';
    }

    


    ?>
    
    <?php require 'Assets/footer.php' ?>
<?php 
$title = "Switch Statement";
include 'Assets/header.php' ?>
    <h1>Switch Statement</h1>
    <br>

    <?php
        $grade = 'A';

        switch ($grade){
            case 'A':
                echo '<h2 style="color: blue"> YOU ARE A GENIUS! </h2>';
                break;
            case 'B':
                echo '<h2 style="color: green"> GREAT JOB! </h2>'; 
                break;  
            case 'C':
                echo '<h2 style="color: orange"> NICE TRY! </h2>'; 
                break; 
            default:
                echo '<h2 style="color: red"> YOU FAILED! </h2>'; 
                break;
        }
    
    ?>
<?php require 'Assets/footer.php' ?>
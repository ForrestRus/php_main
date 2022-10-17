<?php 
$title = "While-Do-While Loop";
include 'Assets/header.php' ?>
    <h1>While Loop</h1>
    <br>

    <?php
        $grade = 0;
        //Infinite Loop
       // while ($grade < 10){
        //    echo '<p> Grade IS LESS THAN 10!</p>';
       // }

       while ($grade < 10){
        echo '<p> GRADE IS LESS THAN 10!</p>';
        $grade++;

       }

       echo 'EXIT Loop!';
    ?>

    <h1>Do-While Loop</h1>

    <?php

       $grade =0;
        do{
            echo '<p> DO WHILE</p>';
            $grade++;
        }
        while($grade < 10);

        echo 'STOP Loop!';
        echo '<br/>';
    ?>

<?php

        //My do-while example
         $i = 0;
         $num = 0;
         
         do {
            $i++;
         }
         
         while( $i < 10 );
         echo ("Loop stopped at i = $i" );
      ?>

<?php require 'Assets/footer.php' ?>
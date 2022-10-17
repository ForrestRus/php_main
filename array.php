<?php
    $title = "Array";
   include 'Assets/header.php' ?>
<h1>Arrays</h1>
    <br>

    <?php 
          //variable
          $num = 5;
          
          // an array
          $numbers = array(1,2,3,4,5,6,7,8,9,10);
         // accessing a value
          echo $numbers [5];

          //printing the last value

          echo "<p> $numbers[9]</p>";
    
         // size of array
         $size = count($numbers);
         echo "<p>Array Number is size: $size</p>";

         //loop to 
         for($count = 0; $count < $size; $count++){

            echo "<p>$numbers[$count]</p>";
         }
        
    
    ?>
<?php require 'Assets/footer.php' ?>
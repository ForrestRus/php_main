<?php 
$title = "For Loop";
include 'Assets/header.php' ?>
    
    <h1>For-Loop Statement</h1>
    <br>

    <?php
        // For Loop

        for($count = 0; $count < 15; $count++){

            echo '<p>HELLO UNIVERSE</p>';
            
        }
        echo '<br/>';
        for($count = 0; $count < 15; $count++){

            echo "<p>The Count is: $count </p>";
        }
        
    ?>

<?php require 'Assets/footer.php' ?>
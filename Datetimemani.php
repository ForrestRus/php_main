<?php 
$title = "Date and Time";
include 'Assets/header.php' ?>
    <h1>Date and Time Manipulation</h1>
    <br>

    <?php
    $currentdate = getdate();
    echo "Today's date: <br/>";
    echo $currentdate['mday'] . "<br/>";
    echo $currentdate['mon'] . "<br/>";
    echo $currentdate['year'] . "<br/>";

    echo "Today's Date: " . $currentdate['mday'] . '/' . $currentdate['mon'] . '/' . $currentdate['year']. '<br/>';

    echo time() . '<br/>';

      // Another Example
   print date("m/d/y G.i:s<br>", time()). '<br/>';
   echo "<br/>";
   print "Today is: ";
   print date("j of F Y, \a\\t g.i a", time()) . '<br/>';
    
    ?>
    
    <?php require 'Assets/footer.php' ?>
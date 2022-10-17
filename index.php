    <?php 
    $title = "Index";
    include 'Assets/header.php' ?>

<body style="background-color:coral;"> 
            <!-- Basic HTML Code -->
        <h1>Hello HTML- PHP World</h1>
         <br>
        <?php
         //Using echo to print to HTML
         echo 'Hello PHP!';
         echo '<br/>';
         echo 'Second Line';
         echo '<br/>';
    
        ?>
    
        <?php
        //declaring variable
        $name = 'Rushelle Forrest';
        $school = 'VTDI';
        $age = 29; 
        $hobby = 'Watching Anime';

        // echo variable
        echo $name;
        echo '<h1>My Name is: '.$name.' </h1>';
        echo '<h1>My School is: '.$school.'</h1>';
        echo '<h1>My Age is: '.$age.'</h1>';
        echo '<h1>My Hobby is: '.$hobby.'</h1>';
        
        ?>
        <button type="button" class="btn btn-primary">CLICK HERE</button>
   <?php require 'Assets/footer.php' ?>
<?php 
$title = "Functions";
include 'Assets/header.php' ?>
    
<h1>Functions</h1>
    <br>

    <?php 
            // Defining a function

        function viewmessage(){
            echo "This programming language is very broad <br/>";
        }

        //calling a function
        viewmessage();

        echo "<hr/>";

        viewmessage();

        //Function with parameters

        function addfunction ($num1, $num2){
            $sum = $num1 + $num2;
            $num2 = $num2 + 1;
            echo "The sum of $num1 and $num2 is: $sum <br/>";
        }

        function changeNum(&$num){
            $num =$num +10;
        }

        function returnproduct($num1, $num2){
            $prod =$num1 * $num2;
            return $prod;
        }



        $num = 150;
        addfunction(20,100);
        addfunction(30, $num);
        echo $num;
        addfunction('15', "20");

        changeNUm($num);
        echo $num . '<br/>';

        $return_value = returnProduct(10, 15);
        echo $return_value . '<br/>';
    
    ?>
<?php require 'Assets/footer.php' ?>
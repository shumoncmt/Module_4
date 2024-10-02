<?php
$mark = 55;
switch (true) {
    case ($mark >=80 && $mark <=100):
         echo "A+";
        break;
    case ($mark >=70 && $mark <80):
        echo "A";
        break;

    case ($mark >= 60 && $mark <= 70):
        echo "A-";
        break;
    case ($mark >= 50 && $mark <= 60):
        echo "B";
        break;
    case ($mark >= 40 && $mark <= 50):
        echo "C";
        break;
    case ($mark >= 33 && $mark <= 40):
        echo "D";
        break;
       default:
       echo "F"; 
       break;
    
}


?>

<h3>Switch Case Color</h3>
<?php

$myColor = "red";
switch($myColor){
    case "Green":
        echo " My favorite Color is Green";
        break;
    case "Yellow":
        echo "My favorite Color is  Yellow";
        break;
    case "red":
        echo "My favorite Color is Red";
        break;
    case "Blue":
        echo "My Favorite color is Blue";
        break;
    default:
    echo "MY Color is Not Match";

        
}

?>
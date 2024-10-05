<?php
$number = 0;
if ($number > 0){
    echo "This $number is Positive";
}else if ($number < 0 ){
     echo " This $number is Negative";
}else if ($number == 0){
    echo " This $number is Zero";
}else{
    echo "Not Valid Number";
}

echo "\n";

// switch ($number) {
//     case ($number > 0):
//         echo "This $number is Positive";
//         break;
//     case ($number < 0):
//         echo " This $number is Negative";
//         break;
//     case ($number == 0):
//         echo " This $number is Zero";
//         break;
//     default:
//     echo "Not Valid Number";
// }
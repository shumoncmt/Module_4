<?php 
$num1= 3000000;
$num2 = 25000;
$num3 = 60000000;
if ($num1 > $num2 && $num1 > $num3){
    echo "This $num1 is Big Number ";
} else if ( $num2 > $num1 && $num2 >  $num3){
    echo " This $num2 is Big Number";
}else if ($num3 > $num1 && $num3 > $num2){
    echo " This $num3 is Big Number";
}
else {
 }
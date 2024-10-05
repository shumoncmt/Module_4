<?php 
$num1= 3;
$num2 = 25;
$num3 = 6;
if ($num1 > $num2 && $num1 > $num3){
    echo "This $num1 is Big Number ";
} else if ( $num2 > $num1 && $num2 >  $num3){
    echo " This $num2 is Big Number";
}else if ($num3 > $num1 && $num3 > $num2){
    echo " This $num3 is Big Number";
}
else {
 }
 echo "\n";

 if ($num1 < $num2 && $num1 < $num3){
    echo "This $num1 is Small Number ";
} else if ( $num2 < $num1 && $num2 <  $num3){
    echo " This $num2 is Small Number";
}else if ($num3 < $num1 && $num3 < $num2){
    echo " This $num3 is Small Number";
}
else {
 }
<?php
$num = 18;
if ($num % 5 == 0 && $num % 11 == 0){
    echo " This Number is 5 and 11 Division";
} else if ($num % 11 == 0){
    echo " This number  11 Division";
}else if ($num % 5 == 0 ){
    echo " This number 5 Division";
} else {
    echo " This Number is Not Division";
}
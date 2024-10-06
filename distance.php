<?php 
$distance =2540;
if ($distance >0 && $distance <=100){
    echo "ভাড় 120tk";
} else if ( $distance >101 && $distance <= 200){
    echo "ভাড় 200tk";
}else if ($distance > 201 && $distance <= 300){
    echo "ভাড় 300tk";
}else {
    echo " Not Interested";
}
<?php

$year = 2011;
if ($year % 400 ==0){
    echo "This Year $year Leap Year";
}
else if ($year % 100 == 0){
    echo "This Year $year Leap Year";
}
else if ($year % 4 == 0){
    echo "This Year $year Leap Year";
}
else{
    echo "This Year  $year  Not Leap Year";
}

<?php
$mark =8;

if($mark >= 80 && $mark <= 100 ){
    echo "Grade A+";
}
else if($mark >= 70 && $mark < 80){
    echo "Grade A";
}
else if($mark >= 60 && $mark < 70){
    echo "Grade A-";

}else if($mark >= 50 && $mark < 60){
    echo "Grade B";
}else if($mark >= 40 && $mark < 50){
    echo "Grade C";

}else if($mark >= 33 && $mark <40 ){
    echo "Grade D";
}
else{
    echo "Grade F";
}

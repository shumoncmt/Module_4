<?php
$mark =80;
if($mark >= 80 && $mark <= 100 ){
    echo "Grade A+";
}
else if($mark >= 70 && $mark < 80){
    echo "Grade A";
}
else if($mark >= 60 && $mark < 70){
    echo "Grade B";

}else if($mark >= 50 && $mark < 60){
    echo "Grade C";
}else if($mark >= 40 && $mark < 50){
    echo "Grade D";

}else if($mark >= 40 && $mark < 50){
    echo "Grade D";
}
else ($mark > 33){
    echo "Grade F";     
}

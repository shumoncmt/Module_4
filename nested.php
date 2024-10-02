<?php
$mark = 10;
if ($mark >=80){
    echo "A+";
}
else{
       if($mark<80 && $mark>=70){
        echo "A";
       }else{
        if($mark <70 && $mark >=60){
            echo "B";
        }
        else{
            if($mark <60 && $mark>=50){
                echo "C";
            }
            else{
                if ($mark <50 && $mark>=40){
                    echo "D";
                }
                else{
                    if ($mark <40 && $mark >= 33){
                        echo "D";
                    }
                    else{
                        echo "F";
                    }
                }
            }
        }
       }
       
       
    }
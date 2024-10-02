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

//$marks = 77;

// switch(true){

//     case ($marks <= 100 && $marks >= 80):
//         echo "A+";
//     break;    

//     case ($marks < 80 && $marks >= 70):
//         echo "A";
//     break;    

//     case ($marks < 70 && $marks >= 60):
//         echo "A-";
//     break;  

//     case ($marks < 60 && $marks >= 50):
//         echo "B";
//     break;

//     case ($marks < 50 && $marks >= 40):
//         echo "C";
//     break; 

//     case ($marks < 50 && $marks >= 33):
//         echo "D";
//     break;   

//     default:
//         echo "F";
//     break;    
        
// }

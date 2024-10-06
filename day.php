<?php
$day = 10;
if ($day == 1){
    echo "Saturday";
} else if( $day == 2){
    echo "Sunday";
} else if( $day == 3){
    echo "Monday";
} else if( $day == 4){
    echo "Tuesday ";
} else if( $day == 5){
    echo "Wednesday";
} else if( $day == 6){
    echo "Thursday";
} else if ( $day == 7){
    echo "Friday";
}else{
    echo " Not Mach";
}

//Switch case
echo "\n";

switch ($day) {
    case ($day == 1):
        echo "Saturday Switch case";
        break;
        case ($day == 2):
            echo "Sunday switch case";
            break;

        case ($day == 3):
        echo "Monday Switch Case";
        break;

        case ($day == 4):
            echo "Tuesday Switch Case";
            break;

        case ($day == 5):
            echo "Wednesday Switch Case";
             break;

        case ($day ==   6):
            echo "Thursday Switch Case";
            break;

        case ($day == 7):
            echo "Friday Switch Case";
            break;
        default:
        echo "Not Mach Switch Case";

    }

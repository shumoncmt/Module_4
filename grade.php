<?php
$grade = 49;
switch ($grade) {
    case ($grade >=80 && $grade<= 100):
        echo "Grade is A+";
        break;
    case ($grade >=70 && $grade < 80):
        echo " Grade is A";
        break;
    case ($grade >= 60 && $grade <70):
        echo "Grade is A-";
        break;
    case ($grade >= 50 && $grade < 60):
        echo "Grade is B";
        break;
    case ($grade >= 40 && $grade < 50):
        echo "Grade is C";
        break;
    case ($grade >= 33 && $grade < 40):
        echo "Grade is D";
        break;
    default:
    echo "We are Full";

}

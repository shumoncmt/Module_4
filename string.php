<?php 
$str = "Hello String";
$integer = 1000;
$float =450.22;




echo "String is: $str \n";
echo "Interger is: $integer \n";
echo "Float is: $float \n";

//Two Variable Sum 

$a =5220;
$b =780;
$c = $a + $b;
echo "Number $a and $b , Total Number : $c \n";

//PHP Case Sensitive 
$color = "red";
echo "My Car Color is $color \n";
echo "My House color is : $color \n";
echo "My Boat color is :  $color \n";
//PHP Variable start must be letter and underscore only

$a ="Hello";
$_b ="Hello";
echo "$a \n $_b";
//Local Variable 
function local_var(){
    $num =45;
    echo " This Number is $num\n";
}
local_var();
echo "\n";
//Global Variable
$name ="Shakil Mia";
function Global_var(){
    global $name;
    echo "Variable inside the function"." " .$name;
    echo "\n";
}
global_var();
echo "Variable Outsite the Function :"." " .$name;

echo "\n";

$i=5;
function mytext()
{
    $i =7;
    echo "value of x:" .$i;
}
mytext();
echo "\n";
//static Variable
function static_var()
{
    static $num5 = 3;
    $num6 =4;
    $num5++;
    $num6++;
    echo "static:" .$num5. "<br>";
    echo "Non-static:" . $num6. "<br>";
}

$as = "abc";
$$as = 200;
echo "$as \n";
echo $$as."\n";
echo $abc;
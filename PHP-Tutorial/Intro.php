<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <!-- This is Appu's first PHP file and this line may seen on website as it is frontend but in actual php it would work and give output as it is backend language code which we wouldn't want to show anyone. -->
    <?php 
    //Single line comment
    /* Multi line comment */
    echo "Hello World!";
    //when you try to run this php code please firstly open xampp app
    ?>
    <?php
    $var1=23;
    $var2=34;
    echo $var1;
    echo $var2;
    echo $var1 + $var2;
    ?>
   

<?php

    $variable1 = 5;
    $variable2 = 2;
    echo $variable1;
    echo $variable2;

    //OPERATORS
    // Arithmetic Operators 
    echo "<br>";
    echo "The value of varible1 + variable2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "The value of varible1 - variable2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "The value of varible1 * variable2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "The value of varible1 / variable2 is ";
    echo $variable1 / $variable2;
    echo "<br>";


    // Comparison Operators
    // echo "<h1> Comparison Operators </h1>";
    echo "The value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";

    echo "The value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";

    echo "The value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";

    echo "The value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";


    // Increment/Decrement Operators 
    // echo $variable1++;
    // echo $variable1--;
    // echo ++$variable1;
    echo --$variable1;
    echo "<br>";
    echo $variable1;


// PHP Assignment Operators
// These are used to assign a value from one variable to another
// and given by following sequence
// Operator
// Description
// Example
// Result

// =
// Assign
// $x = $y
// $x = $y

// +=
// Add and assign
// $x += $y
// $x = $x + $y

// -=
// Subtract and assign
// $x -= $y
// $x = $x - $y

// *=
// Multiply and assign
// $x *= $y
// $x = $x * $y

// /=
// Divide and assign quotient
// $x /= $y
// $x = $x / $y


// Logical Operator
// and (&&)
// or (||)
// xor 
 // !

// $myVar = (true and true);
// $myVar = (false and true);
// $myVar = (false and false);
// $myVar = (true and false);
// $myVar = (true or false);

// $myVar = (true xor true);
// $myVar = (false and true);
// $myVar = (false xor false);
$myVar = (true and false);
echo "<br>";
echo var_dump($myVar);


// Data types 
// Data type is the classification of data into a category.
// Alphanumeric characters are classified as strings.
// Whole numbers are classified as integers.
// Numbers with decimal points are classified as floating points.
// True or false values are classified as Boolean.
// Collection of similar types of elements are called Array.
// An object is a specific instance of a class that serves as templates for objects.
// As told earlier, PHP determines the data types by analyzing the values of the data supplied


// PHP Constant
// Just by the name, we can understand that constant is something whose value cannot be changed. It is basically an identifier. A good practice is always to define it in the starting..


$age = 6;
    if($age>18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else{
        echo "You can not go to the party";
    }


// Arrays in php
$languages = array("Python", "C++", "php", "NodeJs"); 
//it prints every single element in array separately but we can make whole array to print using:-->

$colors = array("black", "white", "grey");
print_r($colors); //this print_r function helps us to do that!

// echo count($languages);   
// echo $languages[0];  



// Loops in PHP
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    }

    // Iterating arrays in PHP using while loop
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language is: ";
        echo $languages[$a];
        $a++;
    }

    // Do while loop
    $a = 200;
    do {
        echo "<br>The value of a is: ";
        echo $a;
        $a++;
    } while ($a < 10);

    // For loop
    for ($a=60; $a < 10; $a++) { 
        echo "<br>The value of a from the for loop is: ";
        echo $a;
    }

    foreach ($languages as $value) {
        echo "<br>The value from foreach loop is ";
        echo $value;
    }


function print_number($number){
        echo "<br>Your number is ";
        echo $number;
    }

?>


<?php
//you can't define one php bracket within another like you can't define html tag within tag like --> <p<br>>
    $str = "This this this";
    echo $str. "<br>";
    $lenn = strlen($str);
    echo "The length of this string is ". $lenn . ". Thank you <br>";
    echo "The number of words in this string is ". str_word_count($str) . ". Thank you <br>";
    echo "The reversed string is ". strrev($str) . ". Thank you <br>";
    echo "The search for is in this string is ". strpos($str, "is") . ". Thank you <br>";
    echo "The replaced string is ". str_replace("is", "at", $str) . ". Thank you <br>";
    // '.' operator(dot) is concatenation operator to join to two strings
    // echo $lenn;
?>

</body>
</html>
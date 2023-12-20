<?php

// i. Electric bill calculation

function calculateElectricBill($units) {
    $totalBill = 0;

    if ($units <= 50) {
        $totalBill = $units * 3.50;
    } elseif ($units > 50 && $units <= 150) {
        $totalBill = (50 * 3.50) + (($units - 50) * 4.00);
    } elseif ($units > 150 && $units <= 250) {
        $totalBill = (50 * 3.50) + (100 * 4.00) + (($units - 150) * 5.20);
    } elseif ($units > 250) {
        $totalBill = (50 * 3.50) + (100 * 4.00) + (100 * 5.20) + (($units - 250) * 6.50);
    }

    return $totalBill;
}

// Usage example:
$unitsConsumed = 300; // Change this value to calculate for different units consumed
$billAmount = calculateElectricBill($unitsConsumed);
echo "Total bill for $unitsConsumed units: TK " . $billAmount;

echo '<br>';

// ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division)
$num1 = 10;
$num2 = 20;
$operator = '*';

switch ($operator) {
    case '+':
        echo $num1 + $num2;
        break;
    case '-':
        echo $num1 - $num2;
        break;
    case '*':
        echo $num1 * $num2;
        break;
    case '/':
        echo $num1 / $num2;
        break;
    default:
        echo "Invalid operator";
        break;
}

echo '<br>';

// iii. Check if a person is eligible to vote by age

$age = 20;
if ($age <= 12) {
    echo "you are a child";
} elseif ($age <= 19) {
    echo "you are a teenager";
} elseif ($age <= 30) {
    echo "you are a aduld";
} elseif ($age <= 50) {
    echo "you are a middeled aged person";
} elseif ($age > 50) {
    echo "you are an old man person";
} else {
    echo "you are not eligile for vote";
}

echo '<br>';

// iv. Check if a person is eligible for marriage in BD by gender.
$gender = "female";
$age = "18";

if ($gender == "female"){
   if ($age >= 18) {
   echo "you are eligible for marriage";
   } else{
    echo "you are not eligible for marriage";
   }
} elseif ($gender == "male"){
    if ($age >= 21) {
        echo "you are eligible for marriage";
    } else {
        echo "you are not eligible for marriage";
    }
}

echo "<br>";

// v. Check if number is positive or negetive
$num = 9;
if ($num > 0) {
    echo "positive";
} elseif ($num < 0) {
    echo "negative";
} else {
    echo "zero";
}

echo "<br>";

// vi. Check if number is odd or even

$num = 10;
if ($num % 2 == 0) {
    echo "even";
} elseif ($num % 2 == 1) {
    echo "odd";
} else {
    echo "not a number";
}

echo "<br>";

// vii. Check if data is integer or string

$num = 10;
if (is_int($num)) {
    echo "integer";
} elseif (is_string($num)) {
    echo "string";
} else {
    echo "not a number";
}

echo "<br>";
<?php

// regex strong password verificatons
$password = "12345678";
$pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
echo preg_match($pattern, $password);
echo "<br />";


// regex email validiation
$email = "shahriar@shakil.com";
$pattern = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/";
echo preg_match($pattern, $email);
echo "<br />";


$personOne = "abul mia";

function person () {
echo $GLOBALS ['personOne'];
}

person();
echo "<br />";


// $_SERVER supperglobal
echo $_SERVER['PHP_SELF'] . "<br />";
echo $_SERVER['HTTP_HOST'] . "<br />";
echo $_SERVER['SERVER_NAME'] . "<br />";
echo $_SERVER['REQUEST_URI']. "<br />";
echo $_SERVER['REQUEST_METHOD'] . "<br />";
echo $_SERVER['SERVER_PORT'] . "<br />";
echo $_SERVER['SCRIPT_NAME'] . "<br />";
echo $_SERVER['SCRIPT_FILENAME'] . "<br />";
// var_dump($_SERVER);
print_r($_SERVER);























































?>
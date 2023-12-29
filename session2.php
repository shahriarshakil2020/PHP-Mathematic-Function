<?php
session_start();
echo $_SESSION['name'] . "<br/>";
echo $_SESSION['city'] . "<br/>";
echo $_SESSION['state'] . "<br/>";
echo $_SESSION['kakku'] . "<br/>";

if (!isset($_SESSION['name'])){
    header("Location: session.php");
}

?>
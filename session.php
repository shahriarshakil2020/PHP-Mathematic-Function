<?php
session_start();

$_SESSION['name'] = "shahriar shakil";
$_SESSION['city'] = "dhaka";
$_SESSION['state'] = "bangladesh";
$_SESSION['kakku'] = "chacchu";

echo $_SESSION['state'] . "<br/>";






?>
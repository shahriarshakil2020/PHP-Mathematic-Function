<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["showName"])){
$realName = $_POST["showName"];
}
?>

<form action="https://google.com/search" method="get">
   <input type="text" name="q" placeholder="enter your name">
   <input type="submit" value="submit">
</form>
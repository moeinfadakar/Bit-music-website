<?php
session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if($username === "moein" && $password === "006600"){

    $_SESSION["login"] = true;
header("location: admin_dashbord.php");

}else{

    header("location: admin_login.php");

}
?>
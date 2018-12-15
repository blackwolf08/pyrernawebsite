<?php

session_start();
$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($con,"db1");
$username = $_SESSION["username"];
$text = $_POST["biotext"];


$result = mysqli_query($con,"INSERT INTO userBio(biotext,user) VALUES('$text','$username')");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
    
?>
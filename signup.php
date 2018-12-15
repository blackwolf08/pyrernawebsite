<?php


$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($con,"db1");

$username = $_POST["username"];
$pass = $_POST["password"];
$add = $_POST["address"];

$phno = $_POST["phonenumber"];
$email= $_POST["email"];

$result = mysqli_query($con,"INSERT INTO admin VALUES('$username','$pass','$add','$email','$phno')");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

header("location: PyrernaLP.php");
    
?>
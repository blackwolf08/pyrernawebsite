<?php


$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}

// Select the database to use
mysqli_select_db($con,"db1");

$username = $_POST["username"];
$pass = $_POST["password"];


$result = mysqli_query($con,"SELECT username, password FROM admin WHERE username = '$username'");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

$row = mysqli_fetch_array($result, MYSQLI_ASSOC);

if($row["username"]==$username && $row["password"]==$pass){
    header("location: welcome.php");
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['timeout'] = time();
    $_SESSION['username'] = $username;
}
else
    header("location: loginf.php");
?>



<?php 
$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($con,"db1");

    $username = $_GET["username"];
    

$result = mysqli_query($con,"INSERT INTO users(name) VALUES('$username')");


    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['loggedin'] = true;
    $_SESSION['timeout'] = time();
    header("location: welcome.php");

    ?>
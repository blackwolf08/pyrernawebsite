<?php


$con = mysqli_connect("localhost","root","");

if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($con,"db1");

$votes = $_POST["votes"];
$answers = $_POST["answers"];
$views = $_POST["views"];
$title = $_POST["title"];
$question = $_POST["question"];


$result = mysqli_query($con,"INSERT INTO questions(votes,answers,views,question,title) VALUES($votes,$answers,$views,'$question','$title')");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}


header("location: welcome.php");
    
?>
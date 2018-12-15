 <?php $con = mysqli_connect("localhost","root","");


if(! $con)
{
    die('Connection Failed'.mysql_error());
}


mysqli_select_db($con,"db1");

session_start();

$answer = $_POST["answer"];

$usern = $_SESSION["username"];

$quesid = $_POST["quesid"];

$result = mysqli_query($con,"INSERT INTO comments(text,byUser,ques_id) VALUES('$answer','$usern','$quesid')");
if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

header('Location: ' . $_SERVER['HTTP_REFERER']);


?>

<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'sms');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (($_SESSION["mobile"]))
 {

$mid = $_POST["member"];
$message = $_POST["message"];
$sql = "select * from members where mid = '".$mid."' ";
echo $sql;

$sql1 = "INSERT INTO message(mid,message)  VALUES ('$mid','$message')";
if (mysqli_query($conn, $sql1)) {
   echo "successfull: " . header('Location: user.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

 }
else
{

header('Location: error.html');   

}

?>
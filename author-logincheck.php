<?php
session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'cloud');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mobile = $_POST["mobile"];
$password = $_POST["password"];

$sql = "select * from author where amobile = '".$mobile."' and apassword = '".$password."' ";



$result = mysqli_query($conn,$sql) ;
$row = mysqli_fetch_assoc($result);


if($row)
{
$_SESSION["aname"] = $row["aname"];
$_SESSION["amobile"] = $row["amobile"];
$_SESSION["aemail"] = $row["aemail"];
$_SESSION["aid"] = $row["aid"];



/*
echo "" . $_SESSION["pname"]. " - Name: " . $_SESSION["pid"]. " " . $_SESSION["pid"]. "<br>";

*/

header('Location: author.php');   

}
else
{

header('Location: error.html');   

}

/*
if (($_SESSION["level"])==1)
 {
header('Location: admin.php');    


 }
 else if (($_SESSION["level"])==0) 
 {
header('Location: user.php');    


 }

mysqli_close($conn);

/*

if (mysqli_query($conn, $sql)) {

    echo "New record created successfully";

} else {

    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




$db = new mysqli ('localhost', 'root', 'root' , 'mytour') or die("unable to connect");

$mail = $_POST["email"];
$pwd = $_POST["password"];

  $sql = "select name from register where email = '".$mail."' and password = '".$pwd."' ";


  $result = mysqli_query($db,$sql) ;



   $row = $result->fetch_array(MYSQLI_ASSOC);

   if($row)
   {
	   echo "hello";
   }
   else
   {
	   echo "failure";
   }
mysqli_close($db);
*/


?>
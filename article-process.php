 <?php

session_start();
$conn = mysqli_connect('localhost', 'root', '' , 'cloud');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (($_SESSION["amobile"]))
 {
$mobile  = $_SESSION["amobile"];
$name  = $_SESSION["aname"];
$email  = $_SESSION["aemail"];
$uid  = $_SESSION["aid"];


$title = $_POST["title"];
$domain = $_POST["domain"];
$keywords = $_POST["keywords"];
$message = $_POST["message"];
/*
echo $batchno;
echo $password;
echo $project;
*/
$sql = "INSERT INTO article(aid,aname,artitle,ardomain,arkeywords,arcontent)  VALUES ('$uid','$name','$title','$domain','$keywords','$message')";



if (mysqli_query($conn, $sql)) {
   echo "successfull: " . header('Location: add-article.php');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);


 }
	else 
	{
		header('Location: error.html');    
	}
?>
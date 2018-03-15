 <?php

$conn = mysqli_connect('localhost', 'root', '' , 'cloud');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$mobile = $_POST["mobile"];
$password = $_POST["password"];
$name = $_POST["name"];
$email = $_POST["email"];
/*
echo $batchno;
echo $password;
echo $project;
*/
$sql = "INSERT INTO author(aname,apassword,amobile,aemail)  VALUES ('$name','$password','$mobile','$email')";


if (mysqli_query($conn, $sql)) {
   echo "successfull: " . header('Location: author-login.html');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
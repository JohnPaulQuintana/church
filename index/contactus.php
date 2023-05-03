<?php
require_once "config.php";
if(isset($_POST['save']))
{    

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$sql = "INSERT INTO contactus (name, email, message) 
VALUES ('$name', '$email', '$message')";
if (mysqli_query($conn, $sql)) {
header("location: index.php");
exit();
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
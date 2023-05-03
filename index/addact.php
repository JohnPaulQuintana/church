<?php
require_once "config.php";
if(isset($_POST['save']))
{    

$name     = $_POST['name'];
$position = $_POST['position'];
$usertype = $_POST['usertype'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO account(name, position, usertype, username, password) 
VALUES ('$name', '$position', '$usertype', '$username', '$password')";
if (mysqli_query($conn, $sql)) {
    echo    '<script type="text/javascript">;
    alert("Booking Sucessfully Saved!");
    location="index.php";
</script>';
exit();
} else {
echo "Error: " . $sql . "
" . mysqli_error($conn);
}
mysqli_close($conn);
}
?>
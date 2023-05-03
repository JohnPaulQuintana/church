<?php
require_once "config.php";
if(isset($_POST['save']))
{               

$title = $_POST['title'];
$sponsor = $_POST['sponsor'];
// $date = date('yyyy-mm-dd',strtotime($_POST['datetime'])); // change date format to yyyy-mm-dd for compatibility with MySQL DATE type
$date = date('Y-m-d',strtotime($_POST['datetime'])); // change date format to yyyy-mm-dd for compatibility with MySQL DATE type
// $time = date('hh:mm AM/PM',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM
$time = date('g:i a',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM

$result = mysqli_query($conn,"SELECT * FROM schedule WHERE start='$date' AND end='$time'");
if (mysqli_num_rows($result) > 0) {
    echo    '<script type="text/javascript">;
                alert("Booking Already Exists!");
                location="index.php";
            </script>';
    exit();
}

$sql = "INSERT INTO schedule (title, description, start, end) VALUES ('$title', '$sponsor', '$date' , '$time')";
if (mysqli_query($conn, $sql)) {
    echo    '<script type="text/javascript">;
                alert("Successfully Saved!");
                location="index.php";
            </script>';
}

mysqli_close($conn);
header('Location: http://localhost/church/html/schedule.php',true, $statusCode);
die();
}
?>




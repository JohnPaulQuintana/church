
<?php
require_once "config.php";
// require_once "../index/updatedBackend/libraries/Database.php";
require_once "./updatedBackend/Gmail/sendmail.php";
if(isset($_POST['save']))
{               

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$event = $_POST['event'];
$event2 = $_POST['event'];
// $date = date('d/m/y',strtotime($_POST['datetime']));
// $time = date('h:ia',strtotime($_POST['datetime']));
$date = date('Y-m-d',strtotime($_POST['datetime'])); // change date format to yyyy-mm-dd for compatibility with MySQL DATE type
                // $time = date('hh:mm AM/PM',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM
$time = date('g:i a',strtotime($_POST['datetime'])); // change time format to hh:mm AM/PM
$req = "Requested";
//try this at home.. kong mogana ba.. ug dili debugg nlang
$result = mysqli_query($conn,"SELECT * FROM booking where date='" . $date . "' and time='" . $time . "'");
        if (mysqli_num_rows($result) > 0) {
            echo    '<script type="text/javascript">;
                        alert("booking Already Exist!");
                        location="index.php";
                    </script>';
                    exit();
        }

        // $this->db->query("SELECT services FROM services WHERE id=:id");
        // $this->db->bind(':id', $data['event']);
        // $this->db->execute();
        // $select = $this->db->single();

$sql = "INSERT INTO booking (name, email, phonenumber, event, date, time,  status, created) 
VALUES ('$name', '$email', '$phonenumber', '$event', '$date' , '$time', '$req', 'now()')";
if (mysqli_query($conn, $sql)) {
    echo    '<script type="text/javascript">;
                alert("Booking Sucessfully Saved!");
                location="index.php";
            </script>';
            // reciever reciever name sender sender name
            $send = new SendMail('ourladyparish2023@gmail.com','Requested',$email,$name,$event2,$date,$time);
   
}
mysqli_close($conn);
}
?>
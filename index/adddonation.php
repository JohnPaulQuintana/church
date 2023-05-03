
<?php
require_once "config.php";
if(isset($_POST['save']));
{               

    $amount = $_POST['amount'];
    $email = $_POST['email'];
    $name = $_POST['name'];

//try this at home.. kong mogana ba.. ug dili debugg nlang

       
if (($_FILES["file"]['name']!="")){
    // Where the file is going to be stored
        $target_dir = "pictures/danation/";
        $file = $_FILES['file']['name'];
        $path = pathinfo($file);
        $filename = $path['filename'];
        $ext = $path['extension'];
        $temp_name = $_FILES['file']['tmp_name'];
        $path_filename_ext = $target_dir.$filename.".".$ext;
     
    // Check if file already exists
    if (file_exists($path_filename_ext)) {
        echo "Sorry, file already exists.";
        exit();
     }else{

      
     move_uploaded_file($temp_name,$path_filename_ext);

$sql = "INSERT INTO donation (name, email, amount, picontainer) 
VALUES ('$name', '$email', '$amount', '$filename.$ext')";
if (mysqli_query($conn, $sql)) {
    echo    '<script type="text/javascript">;
                alert("danation Sucessfully Saved!");
                location="index.php";
            </script>';
}
mysqli_close($conn);
}
        }
    }
?>
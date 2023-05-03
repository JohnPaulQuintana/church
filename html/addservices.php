 <?php
require_once "config.php"; 

    if(isset($_POST['save']));
    {               
    $services = $_POST['services'];
    $detail = $_POST['detail'];


    //try this at home.. kong mogana ba.. ug dili debugg nlang
    $result = mysqli_query($conn,"SELECT * FROM services where services like'" . $services . "'");
            if (mysqli_num_rows($result) > 0) {      
                echo    '<script type="text/javascript">;
                            alert("Staff Already Added!");
                            location="serve.php";
                        </script>';
            }

    

        if (($_FILES["file"]['name']!="")){
            // Where the file is going to be stored
                $target_dir = "pictures/services/";
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

                $sql = "INSERT INTO services (services, detail, picture) 
                VALUES ('$services', '$detail', '$filename.$ext')";
                if (mysqli_query($conn, $sql)) {

                echo    '<script type="text/javascript">;
                        alert("Staff Sucessfully Saved!");
                        location="serve.php";
                        </script>';
                        exit();
                        mysqli_close($conn);
                    }

             }
            }
        }
?>
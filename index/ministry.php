

    <?php
require_once "config.php"; 

    if(isset($_POST['save']))
    {               

        $name = $_POST['name'];
        $email = $_POST['email'];
        $chapil = $_POST['chapil'];
        $positio = $_POST['position'];

    //try this at home.. kong mogana ba.. ug dili debugg nlang
    $result = mysqli_query($conn,"SELECT * FROM ministry where name like'" . $name . "'");
            if (mysqli_num_rows($result) > 0) {      
                echo    '<script type="text/javascript">;
                            alert("Staff Already Added!");
                            location="index.php#";
                        </script>';
                        exit();
            }

    

        if (($_FILES["picture"]['name']!="")){
            // Where the file is going to be stored
                $target_dir = "pictures/ministry/";
                $file = $_FILES['picture']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['picture']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
             
            // Check if file already exists
            if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
                exit();
             }else{


             move_uploaded_file($temp_name,$path_filename_ext);

             $sql = "INSERT INTO ministry (name, email, chapil, position, picture, status) 
             VALUES ('$name', '$email', '$chapil', '$position', '$filename.$ext')";
                if (mysqli_query($conn, $sql)) {

                echo    '<script type="text/javascript">;
                        alert("Staff Sucessfully Saved!");
                        location="index.php";
                        </script>';
                        exit();
                        mysqli_close($conn);
                    }

             }
            }
        }
?>


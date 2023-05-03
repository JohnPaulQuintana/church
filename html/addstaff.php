 <?php
require_once "config.php"; 

    if(isset($_POST['save']))
    {               
    $staffname = $_POST['staffname'];
    $position = $_POST['position'];

    //try this at home.. kong mogana ba.. ug dili debugg nlang
    $result = mysqli_query($conn,"SELECT * FROM staff where staffname like'" . $staffname . "'");
            if (mysqli_num_rows($result) > 0) {      
                echo    '<script type="text/javascript">;
                            alert("Staff Already Added!");
                            location="addstuft.php";
                        </script>';
            }

    

        if (($_FILES["picontainer"]['name']!="")){
            // Where the file is going to be stored
                $target_dir = "pictures/staff/";
                $file = $_FILES['picontainer']['name'];
                $path = pathinfo($file);
                $filename = $path['filename'];
                $ext = $path['extension'];
                $temp_name = $_FILES['picontainer']['tmp_name'];
                $path_filename_ext = $target_dir.$filename.".".$ext;
             
            // Check if file already exists
            if (file_exists($path_filename_ext)) {
                echo "Sorry, file already exists.";
                exit();
             }else{

                $priest = isset($_POST['ifpriest']) ? "0" : "1";

             move_uploaded_file($temp_name,$path_filename_ext);

                $sql = "INSERT INTO staff (staffname, position, picontainer, type) 
                VALUES ('$staffname', '$position', '$filename.$ext', '$priest')";
                if (mysqli_query($conn, $sql)) {

                echo    '<script type="text/javascript">;
                        alert("Staff Sucessfully Saved!");
                        location="dastaff.php";
                        </script>';
                        exit();
                        mysqli_close($conn);
                    }

             }
            }
        }
?>

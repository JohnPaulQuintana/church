<?php
require_once "config.php"; 

    if(isset($_POST['save']))
    {               
    $title = $_POST['title'];
    $details = $_POST['details'];
    $sched = $_POST['sched'];
    

    //try this at home.. kong mogana ba.. ug dili debugg nlang
    $result = mysqli_query($conn,"SELECT * FROM updates where title like'" . $title . "'");
            if (mysqli_num_rows($result) > 0) {      
                echo    '<script type="text/javascript">;
                            alert("Uploaded Sucessfully!");
                            location="news.php";
                        </script>';
            } 
         
        if (($_FILES["picture"]['name']!="")){
            // Where the file is going to be stored
                $target_dir = "pictures/activities/";
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
            $my_date = date("Y-m-d H:i:s");
            $sql ="INSERT INTO updates (title, details, postingdate, sched, container) 
            VALUES ('$title', '$details','$my_date', '$sched', '$filename.$ext')";
            if (mysqli_query($conn, $sql)) {
        
                echo    '<script type="text/javascript">;
                        alert("Sucessfully Saved!");
                        location="news.php";
                        </script>';
                        exit();
                        mysqli_close($conn);
                }
            }
        }
    }
?>
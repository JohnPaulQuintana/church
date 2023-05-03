<?php

require_once "config.php";

          

        $sql = "DELETE from staff where id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo    '<script type="text/javascript">;
                        alert("Successfully Deleted!");
                        location="dastaff.php";
                     </script>';
        } else {
            echo    '<script type="text/javascript">;
                        alert("Delete Error!");
                        location="dastaff.php";
                     </script>';
        }
    

    ?>
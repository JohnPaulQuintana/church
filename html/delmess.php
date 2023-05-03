<?php

require_once "config.php";

          

        $sql = "DELETE from contactus where id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo    '<script type="text/javascript">;
                        alert("Successfully Deleted!");
                        location="messages.php";
                     </script>';
        } else {
            echo    '<script type="text/javascript">;
                        alert("Delete Error!");
                        location="messages.php";
                     </script>';
        }
    

    ?>
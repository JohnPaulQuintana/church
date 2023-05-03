<?php

require_once "config.php";

          

        $sql = "DELETE from donation where id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo    '<script type="text/javascript">;
                        alert("Successfully Deleted!");
                        location="donation.php";
                     </script>';
        } else {
            echo    '<script type="text/javascript">;
                        alert("Delete Error!");
                        location="donation.php";
                     </script>';
        }
    

    ?>
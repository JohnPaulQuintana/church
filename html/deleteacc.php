<?php

require_once "config.php";

          

        $sql = "DELETE from account where id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo    '<script type="text/javascript">;
                        alert("Successfully Deleted!");
                        location="accountlist.php";
                     </script>';
        } else {
            echo    '<script type="text/javascript">;
                        alert("Delete Error!");
                        location="accountlist.php";
                     </script>';
        }
    

    ?>
<?php

require_once "config.php";

          

        $sql = "DELETE from services where id='" . $_GET['id'] . "'";

        if ($conn->query($sql) === TRUE) {
            echo    '<script type="text/javascript">;
                        alert("Successfully Deleted!");
                        location="serve.php";
                     </script>';
        } else {
            echo    '<script type="text/javascript">;
                        alert("Delete Error!");
                        location="serve.php";
                     </script>';
        }
    

    ?>
<?php
    require_once "config.php";
    if($_GET['stat']==0) {
        $i=1;
    } else {
        $i=0;
    }
    mysqli_query($conn,"UPDATE account set  status='" . $i . "' WHERE id='" . $_GET['id'] . "'");

    echo    '<script type="text/javascript">;
                alert("Sucessfully updated!");
                location="accountlist.php";
            </script>';   
?>

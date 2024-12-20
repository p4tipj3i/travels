<?php
    include "db_connection.php";

    $mid = $_POST['mid'];

    $sql = "DELETE FROM `members` WHERE `mid` = '$mid'";

    filterTable($sql);

    echo "<script language='javascript'>";
    echo "location.href='../controller_delete.php'";
    echo "</script>";
?>
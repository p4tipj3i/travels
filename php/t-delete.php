<?php
    include "db_connection.php";

    $tid = $_POST['tid'];

    $sql = "DELETE FROM `all_travels` WHERE `tid` = '$tid'";

    filterTable($sql);

    echo "<script language='javascript'>";
    echo "location.href='../controller_delete.php'";
    echo "</script>";
?>
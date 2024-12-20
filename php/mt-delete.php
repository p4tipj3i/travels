<?php
    include "db_connection.php";


    $mid = $_POST['mid'];
    $tid = $_POST['tid'];

    $sql = "DELETE FROM `now_travels` WHERE `mid` = '$mid' AND `tid` = '$tid'";

    filterTable($sql);


    echo "<script language='javascript'>";
    echo "location.href='../controller_delete.php'";
    echo "</script>";
?>
<?php
    include "connection.php";

    $sql = "DELETE FROM `now_travels` WHERE `num` = '".$_GET['num']."'";

    filterTable($sql);

    echo "<script language='javascript'>";
    echo "location.href='../usertravel.php'";
    echo "</script>";
?>
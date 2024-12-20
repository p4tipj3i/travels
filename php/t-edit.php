<?php
    include "db_connection.php";
    //error_reporting(0);
    
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $allpnum = $_POST['allpnum'];
    $pnum = $_POST['pnum'];
    $locat = $_POST['locat'];
    $godate = $_POST['godate'];
    $backdate = $_POST['backdate'];
    $amone = $_POST['amone'];
    $info = $_POST['info'];
    $notes = $_POST['notes'];

    $sql2 = "SELECT CURRENT_DATE AS today";
    $result2 = filterTable($sql2);
    $row2 = mysqli_fetch_array($result2);
    $getdate = $row2['today'];

    $sql = "UPDATE `all_travels` SET `tid`='$tid',`tname`='$tname',`allpnum`='$allpnum',`pnum`='$pnum',`locat`='$locat',`godate`='$godate',`backdate`='$backdate',`amone`='$amone',`info`='$info',`notes`='$notes',`getdate`='$getdate' 
    WHERE `tid`='$tid'";

    filterTable($sql);
    

    echo "<script language='javascript'>";
    echo "location.href='../controller_edit.php'";
    echo "</script>";
?>
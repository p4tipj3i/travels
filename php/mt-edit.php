<?php
    include "db_connection.php";
    //error_reporting(0);
    
    $mmid = $_POST['mmid']; //主鍵 自動編號(auto_increment)
    $mid = $_POST['mid'];
    $tid = $_POST['tid'];
    $roomtype = $_POST['roomtype'];
    $num = $_POST['num'];
    $pnum = $_POST['pnum'];
    $paytype = $_POST['paytype'];

    $sql2 = "SELECT CURRENT_DATE AS today";
    $result2 = filterTable($sql2);
    $row2 = mysqli_fetch_array($result2);
    $getdate = $row2['today'];

    $sql3 = "SELECT * FROM `all_travels` WHERE `tid` = $tid";
    $result3 = filterTable($sql3);
    $row3 = mysqli_fetch_array($result3);
    $total = $row3['amone'] * $pnum;
    $godate = $row3['godate'];
    $backdate = $row3['backdate'];

    
    $sql = "UPDATE `now_travels` SET `mid`='$mid',`tid`='$tid',`roomtype`='$roomtype',`num`='$num',`godate`='$godate',`backdate`='$backdate',`pnum`='$pnum',`paytype`='$paytype',`total`='$total',`getdate`='$getdate' 
    WHERE `mmid`='$mmid'";
    
    filterTable($sql);
    
    echo "<script language='javascript'>";
    echo "location.href='../controller_edit.php'";
    echo "</script>";
?>
<?php
    include "db_connection.php";
    //error_reporting(0);
    
    $mid = $_POST['mid'];
    $tid = $_POST['tid'];
    $roomtype = $_POST['roomtype'];
    $num = $_POST['num'];
    $pnum = $_POST['pnum'];
    $paytype = $_POST['paytype'];
    
    $sql2 = "SELECT * FROM `all_travels` WHERE `tid` = $tid";
    $result2 = filterTable($sql2);
    $row2 = mysqli_fetch_array($result2); //返回當前行的內容
    $total = $row2['amone'] * $pnum;
    $godate = $row2['godate'];
    $backdate = $row2['backdate'];

    $sql = "INSERT INTO `now_travels`(`mid`,`tid`,`roomtype`,`num`,`godate`,`backdate`,`pnum`,`paytype`,`total`) 
    VALUES ('$mid','$tid','$roomtype','$num','$godate','$backdate','$pnum','$paytype','$total')";
    
    filterTable($sql);
    
    echo "<script language='javascript'>";
    echo "location.href='../controller_insert.php'";
    echo "</script>";
?>
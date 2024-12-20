<?php
    include "db_connection.php";
    //error_reporting(0);
    
    $tid = $_POST['tid'];
    $tname = $_POST['tname'];
    $allpnum = $_POST['allpnum'];
    $locat = $_POST['locat'];
    $godate = $_POST['godate'];
    $backdate = $_POST['backdate'];
    $amone = $_POST['amone'];
    $info = $_POST['info'];
    $notes = $_POST['notes'];

    /*$sql2 = "SELECT COUNT(`tid`) FROM `now_travels`";
    $result2 = filterTable($sql2);
    $row2 = mysqli_fetch_array($result2); //返回當前行的內容
    $pnum = $row2['COUNT(`tid`)'];
    $sql3 = "UPDATE `all_travels` SET `pnum` = '$pnum'"; */
    
    $sql = "INSERT INTO `all_travels`(`tid`,`tname`,`allpnum`,`locat`,`godate`,`backdate`,`amone`,`info`,`notes`) 
    VALUES ('$tid','$tname','$allpnum','$locat','$godate','$backdate','$amone','$info','$notes')";

    filterTable($sql);
    
    echo "<script language='javascript'>";
    echo "location.href='../controller_insert.php'";
    echo "</script>";
?>
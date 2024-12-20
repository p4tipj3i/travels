<?php
        include "connection.php";
        //error_reporting(0);
        header('Content-Type: text/html; charset=utf8');
        $mid = $_POST["mid"];
        $tid = $_POST["tid"];
        $roomtype = $_POST["roomtype"]; 
        $num = $_POST["num"];
        $godate = $_POST["godate"];
        $backdate = $_POST["backdate"];
        $pnum = $_POST["pnum"];
        $amone = $_POST["amone"];
        $paytype = $_POST["paytype"];
        $getdate = $_POST["getdate"];
        $total = $amone*$pnum;

        /*echo "123";*/
        
        //$sql = "INSERT INTO `members`(`name`) VALUES ('".$_POST['name']."')";
        $sql2="INSERT INTO now_travels(`mid`,`tid`,`roomtype`,`num`,`godate`,`backdate`,`pnum`,`paytype`,`total`,`getdate`) VALUES('$mid','$tid','$roomtype','$num','$godate','$backdate','$pnum','$paytype','$total','$getdate')";
        filterTable($sql2);

        echo "<script>alert('報名成功'); location.href = '../member.php';</script>";
?>
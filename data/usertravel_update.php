<?php
        include "connection.php";
        error_reporting(0);
        header('Content-Type: text/html; charset=utf8');
        $mid = $_POST["mid"];
        $tid = $_POST["tid"];
        $roomtype = $_POST["roomtype"];
        $num = $_POST["num"];
        $godate = $_POST['godate'];
        $backdate = $_POST['backdate'];
        $pnum = $_POST['pnum'];
        $paytype = $_POST['paytype'];
        $total = $_POST['total'];
        /*echo "123";*/
        
        $sql = "UPDATE `now_travels` SET `tid`='$tid',`roomtype`='$roomtype',`num`='$num',`godate`='$godate',`backdate`='$backdate',`pnum`='$pnum',`paytype`='$paytype',`total`='$total' WHERE `mid`='$mid'";
        echo $sql;
        filterTable($sql);

        echo "<script>alert('修改成功'); location.href = '../member_function.php';</script>";
        /*echo "<script language='javascript'>";
        echo "location.href='../sign_up.php'";
        echo "alert('註冊成功')'";
        echo "</script>";*/

?>
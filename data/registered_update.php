<?php
        include "connection.php";
        error_reporting(0);
        header('Content-Type: text/html; charset=utf8');
        $mid = $_POST["mid"];
        $mname = $_POST["mname"];
        $name = $_POST["name"];
        $sex = $_POST['sex'];
        $old = $_POST['old'];
        $tel = $_POST['tel'];
        $email = $_POST['email'];
        $pid = $_POST['pid'];
        $account = $_POST['account'];
        $passwd = $_POST['passwd'];
        /*echo "123";*/
        
        $sql = "UPDATE `members` SET `mname`='$mname',`name`='$name',`sex`='$sex',`old`='$old',`tel`='$tel',`email`='$email',`pid`='$pid',`passwd`='$passwd' WHERE `account`='$account'";
        echo $sql;
        filterTable($sql);

        echo "<script>alert('修改成功'); location.href = '../member_function.php';</script>";
        /*echo "<script language='javascript'>";
        echo "location.href='../sign_up.php'";
        echo "alert('註冊成功')'";
        echo "</script>";*/

?>
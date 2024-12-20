<?php
        include "connection.php";
        error_reporting(0);
        header('Content-Type: text/html; charset=utf8');
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
        
        if($mname==null||$name==null||$sex==null||$old==null||$tel==null||$email==null||$pid==null||$account==null||$passwd==null){
		echo "<script>alert('註冊資料不得輸入空白')</script>";
		echo "<script>location.href = '../sign_up.php';</script>";
	}
        else
        {
        $sql="INSERT INTO members(`mname`,`name`,`sex`,`old`,`tel`,`email`,`pid`,`account`,`passwd`) VALUES('$mname','$name','$sex','$old','$tel','$email','$pid','$account','$passwd')";
        //$sql = "INSERT INTO `members`(`name`) VALUES ('".$_POST['name']."')";
        
        filterTable($sql);

        echo "<script>alert('註冊成功'); location.href = '../login.php';</script>";
        }
        /*echo "<script language='javascript'>";
        echo "location.href='../sign_up.php'";
        echo "alert('註冊成功')'";
        echo "</script>";*/

?>
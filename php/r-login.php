<?php
    include "db_connection.php";
    //error_reporting(0);
    
    $account = $_POST['account'];
    $passwd = $_POST['passwd'];
    
    $sql = "SELECT `account`, `passwd` FROM `accountpwd` WHERE `account` = '$account' && `passwd` = '$passwd'";
    $result = filterTable($sql);
    $row = mysqli_fetch_array($result);
    

    if($account != null && $passwd != null && $row['account'] == $account && $row['passwd'] == $passwd){
        echo "<script language='javascript'>";
        echo "location.href='../controller_insert.php'";
        echo "</script>";
    }
    else{
        //echo "使用者名稱或密碼有誤";
        echo "<script>alert('使用者名程或密碼有誤')</script>";
        echo "<script>location.href = '../controller_login.html';</script>";
    }
?>
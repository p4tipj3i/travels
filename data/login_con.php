<?php
	include "connection.php";
	error_reporting(0);
	session_start(); 
	header('Content-Type: text/html; charset=utf-8');
	$mname = $_POST["mname"];
	$name = $_POST["name"];
	$sex = $_POST['sex'];
	$old = $_POST['old'];
	$tel = $_POST['tel'];
	$email = $_POST['email'];
	$pid = $_POST['pid'];
	$account = $_POST['account'];
	$passwd = $_POST['passwd'];

	$_SESSION['umid'] = $mid;
	$_SESSION['umnane'] = $mname;
	$_SESSION['unane'] = $name;
	$_SESSION['usex'] = $sex;
	$_SESSION['uold'] = $old;
	$_SESSION['utel'] = $tel;
	$_SESSION['u_mail'] = $email;
	$_SESSION['upid'] = $pid;
	$_SESSION['uaccount'] = $account;
	$_SESSION['upasswd'] = $passwd;

	
	
			//case "登入" :
	if($account==null||$passwd==null){
		echo "<script>alert('帳號密碼不得輸入空白')</script>";
		echo "<script>location.href = '../login.php';</script>";
	}
	else
	{				
		$sql="SELECT `account`, `passwd` FROM members WHERE `account` = '$account' && `passwd` = '$passwd'";
		$result = filterTable($sql);
		$row = mysqli_fetch_array($result);
		//$row = @mysql_fetch_row($result);
			
		if($account != null && $passwd != null && $row['account'] == $account && $row['passwd'] == $passwd){
			
			echo "<script>location.href = '../index.html';</script>";
		}
		else{
			echo "<script>alert('查無此帳密')</script>";
			echo "<script>location.href = '../login.php';</script>";
		}
	
	}
			
		
			

?>
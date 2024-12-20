<?php
     
    include "data/connection.php";
    error_reporting(0);
    session_start();
    $account=$_SESSION['uaccount'];
    $sql = "SELECT * FROM `members` where `account`='".$account."'";
    $result = filterTable($sql);
    $row = mysqli_fetch_array($result);

    //$tid=$_POST['tid'];
    $sql1 = "SELECT * FROM `all_travels` where `tid`='3'";
    $result1 = filterTable($sql1);
    $row1 = mysqli_fetch_array($result1);

    $gd= date("Y-m-d");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link href="css/style.css" rel="stylesheet" type="text/css" />
  <title>搶錢旅遊網 | 報名表單</title>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
          <a class="navbar-brand" href="index.html">搶錢旅遊網 Money</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="index.html">首頁 <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="member.php">會員中心</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="contact.html">聯絡我們</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <br>
    <br>
      <div id="wrapper_ilinerary">
        <header>
          <p>我要報名 Bali Nusa Penida</p>
        </header>

        <div="content">
          <form style="background-color:rgba(250, 250, 250,60);" method="post" action="data/usertravel_insert.php">
            <div class="form-group">
            <br /><input class="form-control" placeholder="會員編號" id="mid" type="text" value="會員編號：<?php echo $row['mid']; ?>" disabled="disabled">      
            </div>
            <div class="form-group">
            <input class="form-control" placeholder="行程編號" type="text" value="行程編號：3" disabled="disabled">                      
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="房間類型(請輸入單人房 or 雙人房)：" name="roomtype" type="text">               
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="間數：" name="num" type="int">                    
            </div>
            <div class="form-group">
            <input class="form-control" placeholder="去程日期"  type="text" value="去程日期：<?php echo $row1['godate']; ?>" disabled="disabled">                         
            </div>
            <div class="form-group">
              <!--<input id="date" type="date"> 日曆選擇器-->
              <input class="form-control" placeholder="回程日期"  type="text" value="去程日期：<?php echo $row1['backdate']; ?>" disabled="disabled">                  
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="報名人數：" name="pnum" type="text">                    
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="行程價格" type="text" value=" 行程價格：新台幣<?php echo $row1['amone']; ?>元" disabled="disabled">
            </div>
            <div class="form-group">
              <input class="form-control" placeholder="付款方式(請輸入信用卡 or ATM)：" name="paytype" type="text">                
            </div>
            <input class="form-control" placeholder="會員編號" name="mid" id="mid" type="hidden" value="<?php echo $row['mid']; ?>">
            <input class="form-control" placeholder="行程編號" name="tid" type="hidden" value="3">
            <input class="form-control" placeholder="去程日期" name="godate" type="hidden" value="<?php echo $row1['godate']; ?>">
            <input class="form-control" placeholder="回程日期" name="backdate" type="hidden" value="<?php echo $row1['backdate']; ?>">
            <input class="form-control" placeholder="行程價格" name ="amone" type="hidden" value="<?php echo $row1['amone']; ?>">
            <input class="form-control" placeholder="時間" name ="getdate" type="hidden" value="<?php echo $gd; ?>">
            <center><button type="submit" class="btn">確認送出</button></center>
          </form>        
        </div>
      </div>    
    <br>
</body>
</html>
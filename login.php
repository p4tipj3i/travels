<?php

    include "data/connection.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>搶錢旅遊網 會員登入</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <style>
      .bg {
          position: fixed;
          top: 0;
          left: 0;
          bottom: 0;
          right: 0;
          z-index: -999;
      }
      .bg img {
          min-height: 100%;
          min-width: 1000px;
          width: 100%;
      }

      @media screen and (max-width: 1000px) {
          img.bg {
              left: 50%;
              margin-left: -500px;
          }
      }
    </style>
</head>
<body>
    <div id="wrapper_login">
      <header>
        <p>搶錢旅遊公司 會員登入</p>
      </header>
      <div="content">
        </br>
        <form action="data/login_con.php" method="post">
          <div class="form-group">
            <input class="form-control" placeholder="Login's Account" name="account" type="text">                
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Your Password" name="passwd" type="password">                 
          </div>
          <center><button type="submit" class="btn">會員登錄</button></center> 
          </form>
          <form action="sign_up.php" method="post">
          <center><button type="submit" class="btn" onclick="location.href='sign_up.html'">會員註冊</button></center>
          </form>
          <!--管理者有獨立登入頁面-->
          <form action="controller_login.html" method="post">
          <center><button type="submit" class="btn" onclick="location.href='controller_login.html'">管理者登錄</button></center>
          </form>
      </div>
    </div>    
  </body>
</html>
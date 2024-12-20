<?php
    include "data/connection.php";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Refresh" content="time">
    <title>搶錢旅遊網 會員註冊</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  </head>
  <body>
    <div id="wrapper">
      <header>
        <p>搶錢旅遊公司 會員註冊</p>
      </header>
      <div="content">
        <form style="background-color:rgba(250, 250, 250,60);" method="post" action="data/registered_insert.php"><!--  <form action="???.php" method="post">  自行填入php檔名於？內 -->
          <div class="form-group">
            <br/><input class="form-control" placeholder="User name" name="mname" type="text">          <!--mname-->          
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Real name" name="name" type="text">        <!--name-->                      
          </div>
          <div class="form-group">
            <input type="radio" name="sex" value="Man"> 男
            <input type="radio" name="sex" value="Female"> 女<br>                     
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="old" name="old" type="int">                    
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="tel" name="tel" type="int">                            
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="E-mail" name="email" type="email">                    
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="personal ID" name="pid" type="text">                    
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Account" name="account" type="text">                
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Passwd" name="passwd" type="password">                 
          </div>
          <div class="form-group">
            <input class="form-control" placeholder="Password check" name="password_check" type="password">     <!--check_passwd 不用存入資料庫中，只是一個功能-->
          </div>
            <div class="form-group">
          <input class="form-control" placeholder="Address" name="addr" type="text"> </div>                        <!--address 不用存入資料庫中，只是一個功能-->
        
    
          <center><button type="submit" class="btn">確認送出</button></center>
        </form>
                
      </div>
    </div>    
  </body>
</html>
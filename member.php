<?php

    include "data/connection.php";
    error_reporting(0);
    /*error_reporting(0);*/
    session_start();
    /*if(isset($_SESSION['userid'])){
   
  
    }*/
    /*echo $_SESSION['umid'];
    echo $_SESSION['umnane'];
    echo $_SESSION['unane'];
    echo $_SESSION['usex'];
    echo $_SESSION['uold'];
    echo $_SESSION['utel'];
    echo $_SESSION['uemail'];
    echo $_SESSION['upid'];
    echo $_SESSION['uaccount'];
    echo $_SESSION['upasswd'];*/
    $account=$_SESSION['uaccount'];
    /*$dsn = "mysql:host=localhost;dbname=members;charset=utf8";
    $conn = new PDO($dsn,'person','password');
    
    $sql = "SELECT * FROM members";
    $rs = $conn->query($sql);
    echo '<table>';
      foreach($rs as $row){
		  echo '<tr>';
		  echo '<td>'.$row[0].'</td>';
		  echo '<td>'.$row[1].'</td>';
		  echo '<td>'.$row[2].'</td>';
		  echo '</tr>';		  
	  }
      echo '</table>';*/
    /*$result = mysql_query($sql) or die($query."<br/><br/>".mysql_error());
    $a =  mysql_result($result, 0);
    echo $a;*/

    $sql = "SELECT * FROM `members` where `account`='".$account."'";
    $result = filterTable($sql);
    $row = mysqli_fetch_array($result);

    $sql1 = "SELECT * FROM `now_travels` where `mid`='".$row['mid']."'";
    $result1 = filterTable($sql1);
    //$row1 = mysqli_fetch_array($result1);

    $sql2 = "SELECT * FROM `old_travels` where `mid`='".$row['mid']."'";
    $result2 = filterTable($sql2);
    //$row2 = mysqli_fetch_array($result2);

    $sql3 = "SELECT `mid`, SUM(`total`) FROM  `now_travels` GROUP BY `mid`='".$row['mid']."'";
    $result3 = filterTable($sql3);
    $row3 = mysqli_fetch_array($result3);

    $sql4 = "SELECT  `mid`,ROUND(AVG(DISTINCT `total`),2) FROM  `now_travels` GROUP BY `mid`='".$row['mid']."'";
    $result4 = filterTable($sql4);
    $row4 = mysqli_fetch_array($result4);

    $sql5 = "SELECT `mid`, SUM(`total`) FROM  `old_travels` where `mid`='".$row['mid']."'";
    $result5 = filterTable($sql5);
    $row5 = mysqli_fetch_array($result5);

    $sql6 = "SELECT `mid`, COUNT(`tid`) FROM  `now_travels` GROUP BY `mid`='".$row['mid']."'";
    $result6 = filterTable($sql6);
    $row6 = mysqli_fetch_array($result6);

    
    $sql7 = "SELECT `mid`, COUNT(`tid`) FROM  `old_travels` where `mid`='".$row['mid']."'";
    $result7 = filterTable($sql7);
    $row7 = mysqli_fetch_array($result7);
    
    $sql8 = "SELECT  `mid`,ROUND(AVG(DISTINCT `total`),2) FROM  `old_travels` where `mid`='".$row['mid']."'";
    $result8 = filterTable($sql8);
    $row8 = mysqli_fetch_array($result8);

   /* $sql = mysql_query("SELECT * FROM members where account='$account'");
    echo "<td>$sql</td>";*/
   /* $result=mysqli_query($sql);
    $row=mysqli_fetch_result($result);
    $sth = $conn->prepare($sql);
    $sth->execute(array(':sn' => 1));
    $result = $sth->fetch(PDO::FETCH_ASSOC);
    echo $result['sn']." , ".$result['name']." , ".$result['mail']." , ".$result['home']." , ".$result['message'];
    */

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <title>搶錢旅遊網 | 會員總資料中心</title>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  </head>
<body>
<div class="nav navbar-nav navbar-right">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">

      <a class="navbar-brand" href="index.html">搶錢旅遊網 Money</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">首頁 <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="itinerary.html">所有行程</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="member.php">會員中心</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.html">聯絡我們</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <br>
  <br>

  <!--會員可進行的功能：1.修改個人資料 2.刪除自己的帳號 3.新增部分資料（ex.地址、電話etc.）-->
  <!--在此表同時列出使用者之訂單，且帶有查詢訂單之功能-->
  <!--form_top顯示會員資料-->
  <div id class="form_top">
    <br>
    <div style="text-align: center;">
      <h2>會員資料</h2>
    </div>
    <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">會員編號</th>
          <th scope="col">使用者姓名</th>
          <th scope="col">姓名</th>
          <th scope="col">性別</th>
          <th scope="col">年齡</th>
          <th scope="col">手機號碼</th>
          <th scope="col">電子信箱</th>
          <th scope="col">身分證</th>
          <th scope="col">帳號</th>
          <th scope="col">密碼</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <!--<th scope="row">1</th>-->
          <th scope="row"><?php echo $row['mid']; ?></th>
          <td><?php echo $row['mname']; ?></td>
          <td><?php echo $row['name']; ?></td>
          <td><?php echo $row['sex']; ?></td>
          <td><?php echo $row['old']; ?></td>
          <td><?php echo $row['tel']; ?></td>
          <td><?php echo $row['email']; ?></td>
          <td><?php echo $row['pid']; ?></td>
          <td><?php echo $_SESSION['uaccount']; ?></td>
          <td><?php echo $_SESSION['upasswd']; ?></td>
        </tr>
      </tbody>
    </table>
  </div>
  <br>
  <br>
  <br>
  <!--form_down顯示會員訂單（當前＆過去）-->
 <div id class="form_down">
    <br>
    <div style="text-align: center;">
      <h2>當前訂單</h2>
    </div>
    <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">會員編號</th>
          <th scope="col">行程編號</th>
          <th scope="col">房間類型</th>
          <th scope="col">間數</th>
          <th scope="col">去程日期</th>
          <th scope="col">回程日期</th>
          <th scope="col">報名人數</th>
          <th scope="col">付款方式</th>
          <th scope="col">總金額</th>
        </tr>
      </thead>
      <tbody>
          <?php while($row1 = mysqli_fetch_array($result1)):
                echo "<tr>";
                echo "<td>".$row['mid']."</td>";
                echo "<td>".$row1['tid']."</td>";
                echo "<td>".$row1['roomtype']."</td>";
                echo "<td>".$row1['num']."</td>";
                echo "<td>".$row1['godate']."</td>";
                echo "<td>".$row1['backdate']."</td>";
                echo "<td>".$row1['pnum']."</td>";
                echo "<td>".$row1['paytype']."</td>";
                echo "<td>".$row1['total']."</td>";
                echo "</tr>";
          endwhile;
          ?>
           <!--
        </tr>-->
      </tbody>
      <tr>
      <th scope="col">當前行程數量</th>
      <?php 

           while($row6 = mysqli_fetch_array($result6)):
              
              echo "<td>".$row6['COUNT(`tid`)']."</td>";
      
            endwhile;
            
      ?>
      </tr>
      <tr>
      <th scope="col">當前所有行程總花費</th>
      <?php 

           while($row3 = mysqli_fetch_array($result3)):
      
              echo "<td>".$row3['SUM(`total`)']."</td>";
 
            endwhile;
            
      ?>
      </tr>
      <tr>
      <th scope="col">每一行程平均花費</th>
      <?php 

           while($row4 = mysqli_fetch_array($result4)):
   
              echo "<td>".$row4['ROUND(AVG(DISTINCT `total`),2)']."</td>";

            endwhile;
            
      ?>
      </tr>
      

    </table>
    <br>
    <div style="text-align: center;">
      <h2>過去訂單</h2>
    </div>
    <br>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">會員編號</th>
          <th scope="col">行程編號</th>
          <th scope="col">房間類型</th>
          <th scope="col">間數</th>
          <th scope="col">去程日期</th>
          <th scope="col">回程日期</th>
          <th scope="col">報名人數</th>
          <th scope="col">付款方式</th>
          <th scope="col">總金額</th>
        </tr>
      </thead>
      <tbody>
      <?php while($row2 = mysqli_fetch_array($result2)):
                echo "<tr>";
                echo "<td>".$row['mid']."</td>";
                echo "<td>".$row2['tid']."</td>";
                echo "<td>".$row2['roomtype']."</td>";
                echo "<td>".$row2['num']."</td>";
                echo "<td>".$row2['godate']."</td>";
                echo "<td>".$row2['backdate']."</td>";
                echo "<td>".$row2['pnum']."</td>";
                echo "<td>".$row2['paytype']."</td>";
                echo "<td>".$row2['total']."</td>";
                echo "</tr>";
          endwhile;
          ?>
      </tbody>
      <tr>
      <th scope="col">歷史行程數量</th>
      <?php 
       
          echo "<td>".$row7['COUNT(`tid`)']."</td>";
     
      ?>
      </tr>

      <tr>
      <th scope="col">過去所有行程總花費</th>
      <?php 
          echo "<td>".$row5['SUM(`total`)']."</td>";
           
            
      ?>
      <tr>
      <th scope="col">過去每一行程平均花費</th>
      <?php 

          echo "<td>".$row8['ROUND(AVG(DISTINCT `total`),2)']."</td>"; 
            
      ?>
      </tr>

      </tr>
    </table>
  </div>
  <br>
  <input style="float:right" type="button" value="會員修改查詢頁面" onclick="location.href='member_function.php'">
</body>

</html>
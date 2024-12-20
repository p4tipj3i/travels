<?php
    include "data/connection.php";
    error_reporting(0);
    session_start();
    $account=$_SESSION['uaccount'];
    $sql = "SELECT * FROM `members` where `account`='".$account."'";
    $result = filterTable($sql);
    $row = mysqli_fetch_array($result);

    $stid=$_POST['tid'];
    #$sroomtype=$_POST['roomtype'];
    $sql1 = "SELECT * FROM `now_travels` where `tid`='".$stid."' && `mid`='".$row['mid']."'";
    #$sql1 = "SELECT * FROM `now_travels` where `mid`='".$sroomtype."'";

    #$sql1 = "SELECT * FROM `now_travels` where `mid`='".$row['mid']."'";
    $result1 = filterTable($sql1);
    //$row1 = mysqli_fetch_array($result1);


    $stid_old=$_POST['tid_old'];
    $sql2 = "SELECT * FROM `old_travels` where `tid`='".$stid_old."'  && `mid`='".$row['mid']."' ";
    $result2 = filterTable($sql2);
    //$row2 = mysqli_fetch_array($result2);

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <title>搶錢旅遊網 | 會員操作功能中心</title>
  <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/member.css">

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
      <h2>會員資料修改</h2>
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
    <form method="post" action="data/registered_update.php">
      <div style="text-align:center;">
        <h3>請選擇要修改的項目</h3>
      </div>
      <div class="Data-Content">
        <div class="Data-Title">
          <div class="AlignRight">
            <label for="mname">mname： </label><br />
            <label for="name">name： </label><br />
            <label for="sex">sex： </label><br />
            <label for="old">old： </label><br />
            <label for="tel">tel： </label><br />
            <label for="email">email： </label><br />
            <label for="password">password： </label><br />
          </div>
        </div>
        <div class="Data-Items">
          <input type="text" id="mname" name="mname" value="<?php echo $row['mname']; ?>"/><br />
          <input type="text" id="name" name="name" value="<?php echo $row['name']; ?>"/><br />
          <input type="text" id="sex" name="sex" value="<?php echo $row['sex']; ?>"/><br />
          <input type="text" id="old" name="old" value="<?php echo $row['old']; ?>"/><br />
          <input type="text" id="tel" name="tel" value="<?php echo $row['tel']; ?>"/><br />
          <input type="text" id="email" name="email" value="<?php echo $row['email']; ?>"/><br />
          <input type="text" id="passwd" name="passwd" value="<?php echo $row['passwd']; ?>"/><br />
          <input type="hidden" id="account" name="account" value="<?php echo $row['account']; ?>"/><br />
          <input type="hidden" id="pid" name="pid" value="<?php echo $row['pid']; ?>"/><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認修改</button></center>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!--form_down顯示會員訂單（當前＆過去）-->
  <div id class="form_down">
    <br>
    <div style="text-align: center;">
      <h2>當前訂單查詢</h2>
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
        <tr>
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
        
        </tr>
      </tbody>
    </table>
    <form method="post" action="member_function.php">
      <div style="text-align:center;">
        <h3>請選擇要查詢的項目</h3>
      </div>
      <div class="Data-Content">
        <div class="Data-Title">
          <div class="AlignRight">
            <label for="tid">行程編號： </label><br />
          </div>
        </div>
        <div class="Data-Items">
          <input type="text" id="tid"  name="tid" value="<?php echo $row1['tid']; ?>"/><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認查詢</button></center>
    </form>
    <br>
    <br>
    <br>
    <div style="text-align: center;">
      <h2>過去訂單查詢</h2>
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
      <tr>
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
        
        </tr>
      </tbody>
    </table>
    <form method="post" action="member_function.php">
      <div style="text-align:center;">
        <h3>請選擇要查詢的項目</h3>
      </div>
      <div class="Data-Content">
        <div class="Data-Title">
          <div class="AlignRight">
            <label for="tid">行程編號： </label><br />
          </div>
        </div>
        <div class="Data-Items">
          <input type="text" id="tid" name="tid_old" value="<?php echo $row2['tid']; ?>" /><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認查詢</button></center>
    </form>
  </div>
  </div>
  <br>
  <br>
  <br>
  <input style="float:right" type="button" value="會員頁面" onclick="location.href='member.php'">
</form>
</body>

</html>
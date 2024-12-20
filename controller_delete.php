<?php
    include "php/db_connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <title>搶錢旅遊網 | 管理者頁面＿資料刪除</title>
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <style>
    .body {
      font-family:'Times New Roman', Times, serif;
      
    }
    .Data-Content {
        width: 100%; 
        line-height: 40px;
    }

    .Data-Title {
        float: left;
        width: 25%; 
        margin-right: 20px;
    }

    .Data-Items {
        float: left;
        width: 25%;
    }

    .AlignRight {
        text-align: right;
    }

    input[type="date"]::-webkit-datetime-edit{
            padding-left: 53px;
    }
  </style>
</head>
<body class="body">
    <header>
        <!--上方選單-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
          <div class="container">
          <a class="navbar-brand" href="index.html">搶錢旅遊網 Money</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="controller_insert.php">管理者新增頁面</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="controller_delete.php">管理者刪除頁面</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="controller_edit.php">管理者修改頁面</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="controller_search.php">管理者查詢頁面</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    </header>
    <br>
    <br>
    <br>
    <h2>會員資料</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">會員編號</th>
          <th scope="col">使用者名稱</th>
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
            <?php
                $sql = "SELECT * FROM `members`";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<td>".$row['mid']."</td>";
                    echo "<td>".$row['mname']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['sex']."</td>";
                    echo "<td>".$row['old']."</td>";
                    echo "<td>".$row['tel']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td>".$row['pid']."</td>";
                    echo "<td>".$row['account']."</td>";
                    echo "<td>".$row['passwd']."</td>";
                    echo "</tr>";
                endwhile;
            ?>
      </tbody>
    </table>
    <form method="post" action="php/m-delete.php">
      <div style="text-align:center;"><h3>請輸入要刪除的項目</h3></div>
      <div class="Data-Content">
        <div class="Data-Title">
            <div class="AlignRight">
                <label for="mid">會員編號： </label><br />
            </div>
        </div>
        <div class="Data-Items">
            <input type="text" name="mid" /><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認刪除</button></center>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>所有行程</h2>
    <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">行程編號</th>
          <th scope="col">行程名稱</th>
          <th scope="col">成團人數</th>
          <th scope="col">地點</th>
          <th scope="col">去程日期</th>
          <th scope="col">回程日期</th>
          <th scope="col">金額/人</th>
          <th scope="col">行程資訊</th>
          <th scope="col">備註</th>
        </tr>
      </thead>
      <tbody>
            <?php
                $sql = "SELECT * FROM `all_travels`";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<td>".$row['tid']."</td>";
                    echo "<td>".$row['tname']."</td>";
                    echo "<td>".$row['allpnum']."</td>";
                    echo "<td>".$row['locat']."</td>";
                    echo "<td>".$row['godate']."</td>";
                    echo "<td>".$row['backdate']."</td>";
                    echo "<td>".$row['amone']."</td>";
                    echo "<td>".$row['info']."</td>";
                    echo "<td>".$row['notes']."</td>";
                    echo "</tr>";
                endwhile;
            ?>
      </tbody>
    </table>
    <form method="post" action="php/t-delete.php">
      <div style="text-align:center;"><h3>請輸入要刪除的項目</h3></div>
      <div class="Data-Content">
        <div class="Data-Title">
            <div class="AlignRight">
                <label for="tid">行程編號： </label><br />
            </div>
        </div>
        <div class="Data-Items">
            <input type="text" name="tid" /><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認刪除</button></center>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>當前訂單</h2>
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
            <?php
                $sql = "SELECT * FROM `now_travels`";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<td>".$row['mid']."</td>";
                    echo "<td>".$row['tid']."</td>";
                    echo "<td>".$row['roomtype']."</td>";
                    echo "<td>".$row['num']."</td>";
                    echo "<td>".$row['godate']."</td>";
                    echo "<td>".$row['backdate']."</td>";
                    echo "<td>".$row['pnum']."</td>";
                    echo "<td>".$row['paytype']."</td>";
                    echo "<td>".$row['total']."</td>";
                    echo "</tr>";
                endwhile;
            ?>
      </tbody>
    </table>
    <form method="post" action="php/mt-delete.php">
      <div style="text-align:center;"><h3>請輸入要刪除的項目</h3></div>
      <div class="Data-Content">
        <div class="Data-Title">
            <div class="AlignRight">
                <label for="mid">會員編號： </label><br />
                <label for="tid">行程編號： </label><br />
            </div>
        </div>
        <div class="Data-Items">
            <input type="text" name="mid" /><br />
            <input type="text" name="tid" /><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認刪除</button></center>
    </form>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <input style="float:right" type="button" value="管理者查詢頁面" onclick="location.href='controller_search.php'">
    <input style="float:right" type="button" value="管理者修改頁面" onclick="location.href='controller_edit.php'">
    <input style="float:right" type="button" value="管理者新增頁面" onclick="location.href='controller_insert.php'">
</body>
</html>
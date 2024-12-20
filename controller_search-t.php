<?php
    include "php/t-search.php";
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
    <title>搶錢旅遊網 | 管理者頁面＿資料搜尋</title>
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
        width: 50%;
    }

    .AlignRight {
        text-align: right;
    }

    ul.drop-down-menu ul { /*隱藏次選單*/
        left: 99999px;
        opacity: 0;
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
    }

    ul.drop-down-menu li:hover > ul { /* 滑鼠滑入展開次選單*/
        opacity: 1;
        -webkit-transition: opacity 0.3s;
        transition: opacity 0.3s;
        left: -1px;
        border-right: 5px;
    }

    ul.drop-down-menu li:hover > ul ul { /* 滑鼠滑入之後、次選單之後的選單依舊隱藏*/
        left: 99999px;
    }

    ul.drop-down-menu ul li:hover > ul { /* 第二層之後的選單展開位置*/
        left: 90%;
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
                <li class="nav-item">
                  <a class="nav-link" href="controller_delete.php">管理者刪除頁面</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="controller_edit.php">管理者修改頁面</a>
                </li>
                <li class="nav-item active">
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
                t_search();
            ?>
      </tbody>
    </table>
    <form method="post" action="controller_search-t.php">
      <div style="text-align:center;"><h3>請選擇要查詢的項目</h3></div>
      <div class="Data-Content">
        <div class="Data-Title">
            <div class="AlignRight">
                <label for="tid">行程編號： </label><br />
                <label for="tname">成團人數(以上)： </label><br />
                <label for="tname">地點： </label><br />
                <label for="tname">日期： </label><br />
                <label for="tname">金額(以上)： </label><br />
            </div>
        </div>
        <div class="Data-Items">
            <input type="text" name="tid" /><br />
            <input type="text" name="allpnum" /><br />
            <input type="text" name="locat" /><br />
            <input type="date" name="godate" /> ～ <input type="date" name="backdate" /><br />
            <input type="text" name="amone" /><br />
        </div>
      </div>
      <center><button type="submit" class="btn">確認查詢</button></center>
    </form>
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
    <input style="float:right" type="button" value="管理者修改頁面" onclick="location.href='controller_edit.php'">
    <input style="float:right" type="button" value="管理者刪除頁面" onclick="location.href='controller_delete.php'">
    <input style="float:right" type="button" value="管理者新增頁面" onclick="location.href='controller_insert.php'">
</body>
</html>
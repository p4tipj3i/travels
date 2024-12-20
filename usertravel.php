<?php
    include "data/connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travels(內容填寫)</title>
</head>

<body>
    <div style="text-align: left;">
        <h1>旅遊單</h1>
    </div>
    <form method="post" action="data/usertravel_insert.php">
        &nbsp;&nbsp;&nbsp;房間數:<input type=text name="num">
        <p>
        報名人數:<input type=text name="pnum">
        <p>
            <button type="submit">送出</button>
    </form>

    <table>
        <thead>
            <th>編號</th>
            <th>內容</th>
        </thead>
        <tbody>
            <?php
                $sql = "SELECT * FROM `now_travels`";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "<td>".$row['num']."</td>";
                    echo "<td>".$row['pnum']."</td>";
                    /*echo "<td><a href='edit.php?id=".$row['id']."'>編輯</a></td>";*/
                    echo "<td><a href='data/usertravel_delete.php?num=".$row['num']."'>刪除</a></td>";
                    echo "</tr>";
                endwhile;
            ?>
        </tbody>
    </table>

</body>

</html>
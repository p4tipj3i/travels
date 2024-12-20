<?php
    include "db_connection.php";

    function mt_search(){

        $mid = $_POST['mid'];
        $tid = $_POST['tid'];
        $godate = $_POST['godate'];
        $backdate = $_POST['backdate'];
        
        if($tid == NULL && $godate == NULL && $backdate == NULL){
            $sql = "SELECT * FROM `now_travels` WHERE `mid` = '$mid'";
            $result = filterTable($sql);
            while($row = mysqli_fetch_array($result)):
                echo "<tr>";
                echo "<td>".$row['mid']."</td>";
                echo "<td>".$row['tid']."</td>";
                echo "<td>".$row['roomtype']."</td>";
                echo "<td>".$row['num']."</td>";
                echo "<td>".$row['godate']."</td>";
                echo "<td>".$row['backdate']."</td>";
                echo "<td>".$row['paytype']."</td>";
                echo "<td>".$row['total']."</td>";
                echo "</tr>";
            endwhile;

            function mt_ctravels(){
                $mid = $_POST['mid'];
                $sql = "SELECT `mid`, COUNT(`mid`) FROM `now_travels` WHERE `mid` = '$mid'";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "會員編號：<td>".$row['mid']."</td>";
                    echo '<br>'; 
                    echo "下單次數：<td>".$row['COUNT(`mid`)']."</td>";
                    echo "</tr>";
                endwhile;
            }
        }
        elseif($mid == NULL && $godate == NULL && $backdate == NULL){
            $sql2 = "SELECT * FROM `now_travels` WHERE `tid` = '$tid'";
            $result2 = filterTable($sql2);
            while($row2 = mysqli_fetch_array($result2)):
                echo "<tr>";
                echo "<td>".$row2['mid']."</td>";
                echo "<td>".$row2['tid']."</td>";
                echo "<td>".$row2['roomtype']."</td>";
                echo "<td>".$row2['num']."</td>";
                echo "<td>".$row2['godate']."</td>";
                echo "<td>".$row2['backdate']."</td>";
                echo "<td>".$row2['paytype']."</td>";
                echo "<td>".$row2['total']."</td>";
                echo "</tr>";
            endwhile;

            function mt_ctravels(){
                $tid = $_POST['tid'];
                $sql = "SELECT `tid`, COUNT(`tid`) FROM `now_travels` WHERE `tid` = '$tid'";
                $result = filterTable($sql);
                while($row = mysqli_fetch_array($result)):
                    echo "<tr>";
                    echo "行程編號<td>".$row['tid']."</td>";
                    echo '<br>'; 
                    echo "下單次數<td>".$row['COUNT(`tid`)']."</td>";
                    echo "</tr>";
                endwhile;
            }
        }
        elseif($mid == NULL && $tid == NULL){
            $sql3 = "SELECT * FROM `now_travels` WHERE `godate` BETWEEN '$godate' AND '$backdate'";
            $result3 = filterTable($sql3);
            while($row3 = mysqli_fetch_array($result3)):
                echo "<tr>";
                echo "<td>".$row3['mid']."</td>";
                echo "<td>".$row3['tid']."</td>";
                echo "<td>".$row3['roomtype']."</td>";
                echo "<td>".$row3['num']."</td>";
                echo "<td>".$row3['godate']."</td>";
                echo "<td>".$row3['backdate']."</td>";
                echo "<td>".$row3['paytype']."</td>";
                echo "<td>".$row3['total']."</td>";
                echo "</tr>";
            endwhile;
        }
    }
    
?>
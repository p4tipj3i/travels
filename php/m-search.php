<?php
    include "db_connection.php";
    
    function m_search(){
        
        $mid = $_POST['mid'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $old = $_POST['old'];
        $pid = $_POST['pid'];

        if($name == NULL && $sex == NULL && $old == NULL && $pid == NULL){
            $sql = "SELECT * FROM `members` WHERE `mid` = '$mid'";
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
        }
        elseif($mid == NULL && $sex == NULL && $old == NULL && $pid == NULL){
            $sql2 = "SELECT * FROM `members` WHERE `name` like '%$name%'";
            $result2 = filterTable($sql2);
            while($row2 = mysqli_fetch_array($result2)):
                echo "<tr>";
                echo "<td>".$row2['mid']."</td>";
                echo "<td>".$row2['mname']."</td>";
                echo "<td>".$row2['name']."</td>";
                echo "<td>".$row2['sex']."</td>";
                echo "<td>".$row2['old']."</td>";
                echo "<td>".$row2['tel']."</td>";
                echo "<td>".$row2['email']."</td>";
                echo "<td>".$row2['pid']."</td>";
                echo "<td>".$row2['account']."</td>";
                echo "<td>".$row2['passwd']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($mid == NULL && $name == NULL && $old == NULL && $pid == NULL){
            $sql3 = "SELECT * FROM `members` WHERE `sex` like '%$sex%'";
            $result3 = filterTable($sql3);
            while($row3 = mysqli_fetch_array($result3)):
                echo "<tr>";
                echo "<td>".$row3['mid']."</td>";
                echo "<td>".$row3['mname']."</td>";
                echo "<td>".$row3['name']."</td>";
                echo "<td>".$row3['sex']."</td>";
                echo "<td>".$row3['old']."</td>";
                echo "<td>".$row3['tel']."</td>";
                echo "<td>".$row3['email']."</td>";
                echo "<td>".$row3['pid']."</td>";
                echo "<td>".$row3['account']."</td>";
                echo "<td>".$row3['passwd']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($mid == NULL && $name == NULL && $sex == NULL && $pid == NULL){
            $sql4 = "SELECT * FROM `members` WHERE `old` >= '$old'";
            $result4 = filterTable($sql4);
            while($row4 = mysqli_fetch_array($result4)):
                echo "<tr>";
                echo "<td>".$row4['mid']."</td>";
                echo "<td>".$row4['mname']."</td>";
                echo "<td>".$row4['name']."</td>";
                echo "<td>".$row4['sex']."</td>";
                echo "<td>".$row4['old']."</td>";
                echo "<td>".$row4['tel']."</td>";
                echo "<td>".$row4['email']."</td>";
                echo "<td>".$row4['pid']."</td>";
                echo "<td>".$row4['account']."</td>";
                echo "<td>".$row4['passwd']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($mid == NULL && $name == NULL && $sex == NULL && $old == NULL){
            $sql5 = "SELECT * FROM `members` WHERE `pid` like '%$pid%'";
            $result5 = filterTable($sql5);
            while($row5 = mysqli_fetch_array($result5)):
                echo "<tr>";
                echo "<td>".$row5['mid']."</td>";
                echo "<td>".$row5['mname']."</td>";
                echo "<td>".$row5['name']."</td>";
                echo "<td>".$row5['sex']."</td>";
                echo "<td>".$row5['old']."</td>";
                echo "<td>".$row5['tel']."</td>";
                echo "<td>".$row5['email']."</td>";
                echo "<td>".$row5['pid']."</td>";
                echo "<td>".$row5['account']."</td>";
                echo "<td>".$row5['passwd']."</td>";
                echo "</tr>";
            endwhile;
        }
    }
?>
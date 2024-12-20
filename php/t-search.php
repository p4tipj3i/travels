<?php
    include "db_connection.php";
    
    function t_search(){

        $tid = $_POST['tid'];
        $allpnum = $_POST['allpnum'];
        $locat = $_POST['locat'];
        $godate = $_POST['godate'];
        $backdate = $_POST['backdate'];
        $amone = $_POST['amone'];
        
        if($allpnum == NULL && $locat == NULL && $godate == NULL && $backdate == NULL && $amone == NULL){
            $sql = "SELECT * FROM `all_travels` WHERE `tid` = '$tid'";
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
        }
        elseif($tid == NULL && $locat == NULL && $godate == NULL && $backdate == NULL && $amone == NULL){
            $sql2 = "SELECT * FROM `all_travels` WHERE `allpnum` >= '$allpnum'";
            $result2 = filterTable($sql2);
            while($row2 = mysqli_fetch_array($result2)):
                echo "<tr>";
                echo "<td>".$row2['tid']."</td>";
                echo "<td>".$row2['tname']."</td>";
                echo "<td>".$row2['allpnum']."</td>";
                echo "<td>".$row2['locat']."</td>";
                echo "<td>".$row2['godate']."</td>";
                echo "<td>".$row2['backdate']."</td>";
                echo "<td>".$row2['amone']."</td>";
                echo "<td>".$row2['info']."</td>";
                echo "<td>".$row2['notes']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($tid == NULL && $allpnum == NULL && $godate == NULL && $backdate == NULL && $amone == NULL){
            $sql3 = "SELECT * FROM `all_travels` WHERE `locat` like '%$locat%'";
            $result3 = filterTable($sql3);
            while($row3 = mysqli_fetch_array($result3)):
                echo "<tr>";
                echo "<td>".$row3['tid']."</td>";
                echo "<td>".$row3['tname']."</td>";
                echo "<td>".$row3['allpnum']."</td>";
                echo "<td>".$row3['locat']."</td>";
                echo "<td>".$row3['godate']."</td>";
                echo "<td>".$row3['backdate']."</td>";
                echo "<td>".$row3['amone']."</td>";
                echo "<td>".$row3['info']."</td>";
                echo "<td>".$row3['notes']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($tid == NULL && $allpnum == NULL && $locat == NULL && $amone == NULL){
            $sql4 = "SELECT * FROM `all_travels` WHERE `godate` BETWEEN '$godate' AND '$backdate'";
            $result4 = filterTable($sql4);
            while($row4 = mysqli_fetch_array($result4)):
                echo "<tr>";
                echo "<td>".$row4['tid']."</td>";
                echo "<td>".$row4['tname']."</td>";
                echo "<td>".$row4['allpnum']."</td>";
                echo "<td>".$row4['locat']."</td>";
                echo "<td>".$row4['godate']."</td>";
                echo "<td>".$row4['backdate']."</td>";
                echo "<td>".$row4['amone']."</td>";
                echo "<td>".$row4['info']."</td>";
                echo "<td>".$row4['notes']."</td>";
                echo "</tr>";
            endwhile;
        }
        elseif($tid == NULL && $allpnum == NULL && $locat == NULL && $godate == NULL && $backdate == NULL){
            $sql5 = "SELECT * FROM `all_travels` WHERE `amone` >= '$amone'";
            $result5 = filterTable($sql5);
            while($row5 = mysqli_fetch_array($result5)):
                echo "<tr>";
                echo "<td>".$row5['tid']."</td>";
                echo "<td>".$row5['tname']."</td>";
                echo "<td>".$row5['allpnum']."</td>";
                echo "<td>".$row5['locat']."</td>";
                echo "<td>".$row5['godate']."</td>";
                echo "<td>".$row5['backdate']."</td>";
                echo "<td>".$row5['amone']."</td>";
                echo "<td>".$row5['info']."</td>";
                echo "<td>".$row5['notes']."</td>";
                echo "</tr>";
            endwhile;
        }
    }       
?>
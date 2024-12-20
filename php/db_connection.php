<?php

    function filterTable($query){
        $dbType = "MySOL";
        $host = "localhost";
        $dbName = "travels";
        $userName = "person";
        $pwd = "password";
 
        $dbh = mysqli_connect($host,$userName,$pwd,$dbName) or die("你遇到的錯誤:". mysqli_error($dbh)); //連接資料庫

        mysqli_query($dbh,"SET NAMES 'utf8'"); //讀取所有資料表
        $filter_result = mysqli_query($dbh, $query);
        return $filter_result;
    }
?>
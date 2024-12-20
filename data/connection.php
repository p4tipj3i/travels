<?php

    function filterTable($query){
        $dbType = "MySOL";
        $host = "localhost";
        $dbName = "travels";
        $userName = "person";
        $pwd = "password";
 
        
        $dbh = mysqli_connect($host,$userName,$pwd,$dbName) or die("你遇到的錯誤:". mysqli_error($dbh));

        mysqli_query($dbh,"SET NAMES 'utf8'");
        $filter_result = mysqli_query($dbh, $query);
        return $filter_result;
    }
?>
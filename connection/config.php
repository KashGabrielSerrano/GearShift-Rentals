<?php

function connection(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "gearshift_db";

    $conn = new mysqli($host,$user,$pass,$dbname);
    if ($conn->connect_error) {
        echo $conn->connect_error;
    }else{
        return $conn;
    }
}

?>
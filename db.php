<?php
$uname = "aoki";
$passwd = "";
$db = "wisata";
$host = "localhost";


$conn = new mysqli($host,$uname,$passwd,$db);

if($conn->connect_error){
    die("[ERROR] Failed connecting to database : " .$conn->connect_error);
}

?>
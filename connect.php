<?php

$conn = new mysqli('localhost','root','','wisata');

if($conn->connect_error){
    die("Error -> " .$conn->connect_error);
}
?>
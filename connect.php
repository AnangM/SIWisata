<?php

$conn = new mysqli('localhost','aoki','anangaja','wisata');

if($conn->connect_error){
    die("Error -> " .$conn->connect_error);
}
?>
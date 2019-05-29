<?php

$conn = new mysqli('localhost','u5864817_pti18_wisata','pti18_wisata','u5864817_pti18_wisata');

if($conn->connect_error){
    die("Error -> " .$conn->connect_error);
}
?>
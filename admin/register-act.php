<?php
require $_SERVER['DOCUMENT_ROOT'].'/connect.php';

$uname = $_POST['uname'];
$name = $_POST['name'];
$email = $_POST['email'];
$passwd = $_POST['passwd'];
$passwd_send = crypt($passwd,'$6$rounds=5000$S1w154t432$');

$sql = "INSERT INTO `wisatai_admin` (`id`, `username`, `passwd`, `nama`, `email`) VALUES (NULL, '$uname', '$passwd_send', '$name    ', '$email')";

if($conn->query($sql)===TRUE){
    header('Location:index.php');
}else{
    $conn->error;
}

$conn->close();

?>
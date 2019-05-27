<?php
require $_SERVER['DOCUMENT_ROOT'].'/connect.php';

$uname = $_POST['uname'];
$passwd = $_POST['passwd'];
$passwd_check = crypt($passwd,'$6$rounds=5000$S1w154t432$');
$sql = "SELECT * FROM `wisatai_admin` WHERE username = '$uname'";

$result = $conn->query($sql);
$conn->close();

$datas =[];
while($row = $result->fetch_assoc()){
    $datas[] = $row;
}

if(isset($datas[0]['username'])){
    if(password_verify($passwd,$datas[0]['passwd'])){
        session_start();
        $_SESSION['admin'] = $uname;
        header('Location:index.php');
    }
}else{
    echo "GET THE FUCK OUT!!!";
    echo $datas[0]['passwd'];
}

?>
<?php
session_start();
if(isset($_SESSION['admin'])){

    require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $full = $_POST['full'];


$sql = "INSERT INTO `wisata_pertunjukan` (`id`, `nama`, `detail`,`full`, `timestamp`) VALUES (NULL, '$name', '$desc', '$full',CURRENT_TIMESTAMP)";

if($conn->query($sql)===TRUE){
    header('Location:pertunjukan.php');
    exit();
}else{
    echo "ERROR : " . $conn->error();
}
}else{
    header('Location:index.php');
}

?>
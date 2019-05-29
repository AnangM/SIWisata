<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:index.php');
}else{
    require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
    $id = $_POST['id'];
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $full = $_POST['full'];


    $sql = "UPDATE `wisata_pertunjukan` SET `nama` = '$name', `detail` = '$desc',`full`='$full' WHERE `wisata_pertunjukan`.`id` = $id";

    if($conn->query($sql) === TRUE){
        header('Location:/admin/pertunjukan.php');
        exit();
    }else{
        echo "Error : ".$conn->error;
    }
    $conn->close();
}
?>
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:index.php');
}else{
    require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
    $id = $_POST['id'];
    $url = $_POST['url'];
    $lokasi = $_POST['idLokasi'];

    $sql = "UPDATE `wisata_foto` SET `url` = '$url' WHERE `wisata_foto`.`id` = $id ";

    if($conn->query($sql)===TRUE){
        header("Location:foto-destinasi.php?q=$lokasi");
    }else{
        echo 'ERROR: '.$conn->error;
    }
}

?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    $id = $_POST['idLokasi'];
    $url = $_POST['url'];

    $sql = "INSERT INTO `wisata_foto_pertunjukan` (`id`, `url`, `id_pertunjukan`, `timestamp`) VALUES (NULL, '$url', '$id', CURRENT_TIMESTAMP)";

    if($conn->query($sql)===TRUE){
        header("Location:foto-pertunjukan.php?q=$id");
    }else{
        echo 'ERROR: '.$conn->error;
    }

    $conn->close();

}
?>
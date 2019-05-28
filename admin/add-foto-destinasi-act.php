<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    $id = $_POST['idLokasi'];
    $url = $_POST['url'];

    $sql = "INSERT INTO `wisata_foto` (`id`, `id_lokasi`, `url`, `timestamp`) VALUES (NULL, $id, '$url', CURRENT_TIMESTAMP)";

    if($conn->query($sql)===TRUE){
        header("Location:foto-destinasi.php?q=$id");
    }else{
        echo 'ERROR: '.$conn->error;
    }

    $conn->close();

}
?>
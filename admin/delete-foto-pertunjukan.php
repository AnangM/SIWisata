<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    $id = $_POST['id'];
    $lokasi = $_POST['idPertunjukan'];

    $sql = "delete from wisata_foto_pertunjukan where id = $id";
    if($conn->query($sql) === TRUE){
        header("Location:/admin/foto-pertunjukan.php?q=$lokasi");
        exit();
    }else{
        echo "Error : ".$conn->error;
    }
    $conn->close();
}
?>
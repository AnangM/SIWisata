<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    $id = $_POST['id'];
    $lokasi = $_POST['idLokasi'];

    $sql = "delete from wisata_foto where id = $id";
    if($conn->query($sql) === TRUE){
        header("Location:/admin/foto-destinasi.php?q=$lokasi");
        exit();
    }else{
        echo "Error : ".$conn->error;
    }
    $conn->close();
}
?>
<?php
session_start();
if(!isset($_SESSION['admin'])){
    header('Location:index.php');
}else{
    require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
    $id = $_POST['id'];
    $dest = $_POST['name'];
    $desc = $_POST['desc'];
    $full = $_POST['full'];
    $lat = $_POST['lat'];
    $lon = $_POST['lon'];
    $htm = $_POST['htm'];

    $sql = "UPDATE `wisata_lokasi` SET `nama` = '$dest', `deskripsi` = '$desc', `full`='$full',`lat` = '$lat', `lon` = '$lon', `htm` = '$htm' WHERE `wisata_lokasi`.`id` = $id ";

    if($conn->query($sql) === TRUE){
        header('Location:/admin/destinasi.php');
        exit();
    }else{
        echo "Error : ".$conn->error;
    }
    $conn->close();
}
?>
<?php
require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
$name = $_POST['name'];
$desc = $_POST['desc'];
$lat = $_POST['lat'];
$lon = $_POST['lon'];
$htm = $_POST['htm'];

$sql = "INSERT INTO `wisata_lokasi` (`id`, `nama`, `deskripsi`, `lat`, `lon`, `htm`) VALUES (NULL, '$name', '$desc', '$lat', '$lon', '$htm')";

if($conn->query($sql)===TRUE){
    header('Location:destinasi.php');
    exit();
}else{
    echo "ERROR : " . $conn->error();
}

?>
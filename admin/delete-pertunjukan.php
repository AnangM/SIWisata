<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'].'/connect.php';
    $id = $_POST['id'];
    $sql = "delete from wisata_pertunjukan where id='" . $id . "'";

    if ($conn->query($sql) === TRUE) {
        header("Location: /admin/pertunjukan.php");
        exit();
    } else {
        echo "Error menghapus data : " . $conn->error;
    }
}

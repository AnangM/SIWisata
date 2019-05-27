<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    require('admin_header.php');
    $id = $_GET['id'];
    $sql = "select * from wisata_lokasi where id=$id";

    $result = $conn->query($sql);
    $datas = [];

    while ($row = $result->fetch_assoc()) {
        $datas[] = $row;
    }
}
?>
<div class="container">
    <form class="form" action="edit-destinasi-act.php" method="post">
        <input type="hidden" id="id" name="id" value="<?php echo $datas[0][id] ?>">
        <label for="name">Nama Destinasi</label>
        <input type="text" value="<?php echo $datas[0]['nama'] ;?>" class="form-control" name="name" id="name">
        <label for="desc">Deskripsi</label>
        <textarea name="desc" class="form-control" id="desc"><?php echo $datas[0]['deskripsi'] ;?></textarea>
        <label for="lat">Latitude</label>
        <input type="text" value="<?php echo $datas[0]['lat'] ;?>" class="form-control" name="lat" id="lat">
        <label for="lon">Longitude</label>
        <input type="text" value="<?php echo $datas[0]['lon'] ;?>" class="form-control" name="lon" id="lon">
        <label for="htm">Harga Tiket Masuk</label>
        <input type="text" value="<?php echo $datas[0]['htm'] ;?>" class="form-control" name="htm" id="htm">

        <div class="text-right">
            <button type="submit" class="btn main-bg text-white" style="margin-top:1em;">Update!</button>
        </div>
    </form>
</div>
<?php
require('admin_ footer.php');
?>
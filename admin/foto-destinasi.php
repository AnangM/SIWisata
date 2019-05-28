<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    require('admin_header.php');
    $id = $_GET['q'];
    $result = $conn->query("select * from wisata_lokasi where id=$id;");
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $sql = "select * from wisata_foto where id_lokasi = $id;";
    $result = $conn->query($sql);
    ?>
    <div class="container">
        <div class="row" style="margin-bottom:1em;">
            <div class="col-md-10">
                <h5 style="margin-bottom:1em;">Daftar gambar untuk destinasi <?php echo $data[0]['nama']; ?></h5>
            </div>
            <div class="col-md-2">
                <form action="add-foto-destinasi.php" method="post">
                <input type="hidden" name="id" value="<?php echo $data[0]['id'] ;?>">
                <button type="submit" class="btn text-white main-bg">Tambahkan Foto</button>
            </form>
            </div>
        </div>
        <div class="card-group">
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $row['url']; ?>">
                        <div class="card-body">
                            <p class="small"><?php echo $row['timestamp']; ?></p>
                            <div class="text-right">
                                <a  href="/admin/edit-foto.php?q=<?php echo $row['id'] ;?>">edit</a>&nbsp;&nbsp;&nbsp;
                                <a class="text-danger" href="#">delete</a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        </div>
    </div>
    <?php
    require('admin_footer.php');
}
?>
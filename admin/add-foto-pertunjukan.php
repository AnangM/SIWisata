<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location:index.php');
} else {
    require('admin_header.php');
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    $id = $_POST['id'];
    $result = $conn->query("select * from wisata_pertunjukan where id = $id");
    $data = [];
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    ?>
    <div class="container">
        <div class="row">
        <h5>Masukkan url gambar untuk destinasi <?php echo $data[0]['nama'] ;?></h5>
    </div>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form"action="add-foto-pertunjukan-act.php" method="post">
                    <input type="hidden" name="idLokasi" value="<?php echo $id;?>">
                    <label for="url">Url gambar</label>
                    <textarea name="url" id="url" class="form-control" rows="7"></textarea>
                    <div class="text-right" style="margin-top:1em;">
                        <button class="btn text-white main-bg" type="submit">Tambahkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php
    require('admin_footer.php');
}
?>
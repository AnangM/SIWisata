<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    require('admin_header.php');
    $id = $_GET['q'];

    $sql = "select * from wisata_foto_pertunjukan where id = $id;";
    $result = $conn->query($sql);
    $conn->close();
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <form class="form" action="edit-foto-pertunjukan-act.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
                    <input type="hidden" name="idPertunjukan" value="<?php echo $data[0]['id_pertunjukan']; ?>">
                    <label  for="url">Url Gambar</label>
                    <textarea class="form-control" name="url" rows="7"><?php echo $data[0]['url'] ;?></textarea>
                    <div class="text-right" style="margin-top:1em;">
                        <button type="submit" class="btn text-white main-bg">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php
}
require('admin_footer.php');
?>
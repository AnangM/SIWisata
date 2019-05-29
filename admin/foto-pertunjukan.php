<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('Location:index.php');
} else {
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';
    require('admin_header.php');
    $id = $_GET['q'];
    $result = $conn->query("select * from wisata_pertunjukan where id=$id;");
    $data = [];

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    $sql = "select * from wisata_foto_pertunjukan where id_pertunjukan = $id;";
    $result = $conn->query($sql);
    ?>
    <div class="container">
        <div class="row" style="margin-bottom:1em;">
            <div class="col-md-10">
                <h5 style="margin-bottom:1em;">Daftar gambar untuk destinasi <?php echo $data[0]['nama']; ?></h5>
            </div>
            <div class="col-md-2">
                <form action="add-foto-pertunjukan.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $data[0]['id']; ?>">
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
                                <a href="/admin/edit-foto-pertunjukan.php?q=<?php echo $row['id']; ?>">edit</a>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger"  onclick="delete_photo(<?php echo $row['id']; ?>,<?php echo $id; ?>,'<?php echo $row['timestamp']; ?>')">delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
        }
        ?>
        </div>
    </div>

    <!-- MODAL -->
    <div id="modalDelete" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Hapus Data</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    <p id="displayKeterangan"></p>
                </div>

                <!-- Modal footer -->
                <div id="deleteOption" class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">Batal</button>
                </div>

            </div>
        </div>
    </div>


    <script>
        function delete_photo(id,idPertunjukan, name) {
            $('#displayKeterangan').text("Apakah anda yakin menghapus " + name + "?");
            $btn = `<form id='deleteForm' action='delete-foto-pertunjukan.php' method='POST'>
            <input type="hidden" id="id" name="id" value="`+ id +`">
            <input type="hidden" id="idPertunjukan" name="idPertunjukan" value="`+ idPertunjukan +`">
            <button type='submit'class='btn btn-danger'>Hapus</button></form>`;
            if ($('#deleteForm').length) {
                $('#deleteForm').remove();
                $('#deleteOption').append($btn);
            } else {
                $('#deleteOption').append($btn);
            }
            $('#modalDelete').modal('show');
        }
    </script>

    <?php
    require('admin_footer.php');
}
?>
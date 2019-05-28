<?php

session_start();
if (isset($_SESSION['admin'])) {

    require('admin_header.php');
    require $_SERVER['DOCUMENT_ROOT'] . '/connect.php';

    $sql = "SELECT * FROM `wisata_pertunjukan`;";
    $result = $conn->query($sql);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <h4>Daftar Objek Pertunjukan</h4>
            </div>
            <div class="col-md-3">
                <a href="add-pertunjukan.php">
                    <button class="btn btn-primary">Tambah Objek</button>
                </a>
            </div>
        </div>
        <table class="table" style="margin-top:2em;">
            <thead class="thead-light text-center">
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Aksi</th>
            </thead>
            <tbody>
                <?php
                while ($row = $result->fetch_assoc()) {
                    ?>
                    <tr class="text-center">
                        <td><?php echo $row['nama']; ?></td>
                        <td><?php echo $row['detail']; ?></td>
                        <td>
                            <a href="edit-pertunjukan.php?id=<?php echo $row['id']; ?>">
                                <button class="btn btn-primary">Edit</button>
                            </a>
                            <button class="btn btn-danger" onclick="delete_pertunjukan(<?php echo $row['id']; ?>,'<?php echo $row['nama']; ?>')">Hapus</button>
                            <a href="foto-destinasi.php?q=<?php echo $row['id']; ?>">
                                <button class="btn btn-primary"><i class="fas fa-images"></i></button>
                            </a>
                        </td>
                    </tr>
                <?php
            } ?>
            </tbody>
        </table>
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
        function delete_pertunjukan(id, name) {
            $('#displayKeterangan').text("Apakah anda yakin menghapus " + name + "?");
            $btn = "<form id='deleteForm' action='delete-pertunjukan.php' method='POST'><button type='submit' name='id' value='" + id + "' class='btn btn-danger'>Hapus</button></form>";
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
} else {
    header('Location:index.php');
}
?>
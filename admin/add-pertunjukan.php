<?php
session_start();
if (isset($_SESSION['admin'])) {

    require('admin_header.php'); ?>

    <div class="container">
        <form class="form" action="add-pertunjukan-act.php" method="post">
            <label for="name">Nama</label>
            <input type="text" name="name" id="name" class="form-control">
            <label for="desc">Deskripsi</label>
            <textarea name="desc" id="desc" class="form-control"></textarea>
            <label for="full">Detail Pertunjukan</label>
            <textarea name="full" rows="20" id="full" class="form-control"></textarea>
            <div class="text-right" style="margin-top:1em;">
                <button class="btn main-bg text-white" type="submit">Tambah</button>
            </div>
        </form>
    </div>

    <?php
    require('admin_footer.php');
} else {
    header('Location:index.php');
}
?>
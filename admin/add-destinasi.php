<?php
require('admin_header.php'); ?>

<div class="container">
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <form class="form" action="add-destinasi-act.php" method="post">
                <label for="name">Nama</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="desc">Deskripsi</label>
                <textarea name="desc" id="desc" class="form-control"></textarea>
                <label for="lat">Latitude</label>
                <input type="text" name="lat" id="lat" class="form-control">
                <label for="lon">Longitude</label>
                <input type="text" class="form-control" name="lon" id="lon">
                <label for="htm">Harga Tiket</label>
                <input type="text" class="form-control" name="htm" id="htm">
                <div class="text-right" style="margin-top:1em;">
                    <button class="btn main-bg text-white" type="submit">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>


<?php
require('admin_footer.php');
?>
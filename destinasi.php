<?php require('header.php') ?>
<div class="main-full-height destination-bg-image">
<?php require('navbar.php') ?>
    <div class="container">
        <?php require('connect.php');
    $sql = "SELECT wisata_lokasi.id,wisata_lokasi.nama,wisata_foto.url FROM wisata_lokasi INNER JOIN wisata_foto ON wisata_lokasi.id= wisata_foto.id_lokasi ";
    $result = $conn->query($sql);
    $conn->close();
    ?>
    <div class="card-group">
        <?php
        $temp = 0;
        while ($row = $result->fetch_assoc()) {
            if ($row['id'] != $temp) {
                $temp = $row['id'];
                ?>
                <div class="col-md-3" style="margin-bottom:1em;">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $row['url']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><a href="/detail.php?q=<?php echo $row['id'] ;?>"><?php echo $row['nama']; ?></a></h5>
                        </div>
                    </div>
                </div>
                <?php
        }
    }
    ?>
<<<<<<< HEAD

</div>
=======
    </div>
>>>>>>> ccb70c0f4f3066bd7a59aac0c1b40fcbe8e49215

</div>
</div>
<?php require('footer.php') ?>
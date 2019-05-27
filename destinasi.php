<?php require('header.php') ?>
<?php require('navbar.php') ?>
<div class="container">
    <?php require('connect.php');
    $sql = "SELECT lokasi.id,lokasi.nama,foto.url FROM (SELECT * FROM wisata_lokasi LIMIT 3) lokasi LEFT JOIN (SELECT * FROM wisata_foto) foto ON lokasi.id= foto.id_lokasi ";
    $result = $conn->query($sql);
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
                            <h5 class="card-title"><?php echo $row['nama']; ?></h5>
                        </div>
                    </div>
                </div>
            <?php
        }
    }
    ?>

    </div>

</div>
<?php require('footer.php') ?>
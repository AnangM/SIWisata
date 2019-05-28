<?php require('header.php') ?>
<?php require('navbar.php') ?>
<div class="container">
    <?php require('connect.php');
    $sql = "SELECT wisata_lokasi.id,wisata_lokasi.nama,wisata_foto.url FROM wisata_lokasi INNER JOIN wisata_foto ON wisata_lokasi.id= wisata_foto.id_lokasi ";
    $result = $conn->query($sql);
    $conn->close();
    ?>
    <div class="card-group">
        <?php
        $temp = [];
        
        function linearSearch($arr,$key){
            $found = FALSE;
            for($i = 0; $i<sizeof($arr);$i++){
                if($arr[$i]==$key){
                    $found = TRUE;
                    break;
                }
            }
            return $found;
        }
        while ($row = $result->fetch_assoc()) {
            $found = linearSearch($temp,$row['id']);
            if (!$found) {
                $temp[] = $row['id'];
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
    </div>

</div>
<?php require('footer.php') ?>
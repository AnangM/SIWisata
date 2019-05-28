<?php
require('header.php');
require('navbar.php');
require('connect.php');
$sql = "SELECT wisata_pertunjukan.id, wisata_pertunjukan.nama,wisata_pertunjukan.detail ,wisata_foto_pertunjukan.url FROM wisata_pertunjukan inner JOIN wisata_foto_pertunjukan on wisata_pertunjukan.id=wisata_foto_pertunjukan.id_pertunjukan;";
$result = $conn->query($sql);
$conn->close();
?>
<div class="container">
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
                $temp = $row['id'];
                ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="<?php echo $row['url']; ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $row['nama'] ;?></h5>
                        <p><?php echo $row['detail'] ;?></p>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
    </div>
</div>
<?php
require('footer.php');
?>
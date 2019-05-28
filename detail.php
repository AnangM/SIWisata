<?php
require('header.php');
require('navbar.php');
require('connect.php');
$id = $_GET['q'];

$result = $conn->query("select nama,deskripsi,lat,lon,htm,url from wisata_lokasi inner join wisata_foto on wisata_lokasi.id = wisata_foto.id_lokasi where wisata_lokasi.id=$id limit 1;");
$lokasi = [];

while ($row = $result->fetch_assoc()) {
    $lokasi[] = $row;
}
$comment = $conn->query("select * from wisata_review where id_lokasi=$id limit 15");
$result = $conn->query("select * from wisata_foto where id_lokasi=$id");
$conn->close();

?>
<div class="container">
    <div class="text-center">
        <h3><?php echo $lokasi[0]['nama']; ?></h3>
        <img class="main-detail-img" src="<?php echo $lokasi[0]['url']; ?>">
    </div>

    <div class="row">
        <p><?php echo $lokasi[0]['deskripsi']; ?></p>
    </div>
    <div class="row">
        <div class="col-md">
            <div class="text-center">
                <iframe width='700' height='400px' src="https://maps.google.com/maps?q=<?php echo $lokasi[0]['lat']; ?>,<?php echo $lokasi[0]['lon']; ?>&hl=es;z=14&amp;output=embed"></iframe>
            </div>
        </div>
    </div>
    <div class="row">
        <h5>Gallery</h5>
    </div>
    <div class="row">
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-3">
                <img class="main-detail-img" src="<?php echo $row['url']; ?>">
            </div>
        <?php
    }
    ?>
    </div>
    <div class="row">

    </div>
</div>
<?php
require('footer.php');
?>
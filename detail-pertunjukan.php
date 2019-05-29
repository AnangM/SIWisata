<?php
require('header.php');
require('navbar.php');
require('connect.php');
$id = $_GET['q'];

$result = $conn->query("SELECT wisata_pertunjukan.id,wisata_pertunjukan.nama,wisata_pertunjukan.full,wisata_foto_pertunjukan.url from wisata_pertunjukan inner JOIN wisata_foto_pertunjukan on wisata_foto_pertunjukan.id_pertunjukan = wisata_pertunjukan.id where wisata_pertunjukan.id = $id limit 1;");
$lokasi = [];

while ($row = $result->fetch_assoc()) {
    $lokasi[] = $row;
}
$result = $conn->query("select * from wisata_foto_pertunjukan where id_pertunjukan=$id");
$conn->close();

?>
<div class="container">
    <div class="row">
        <div class="col-md">
            <div class="text-center">
                <h3><?php echo $lokasi[0]['nama']; ?></h3>
                <img class="main-detail-img" src="<?php echo $lokasi[0]['url']; ?>">
            </div>
        </div>
    </div>
    <div class="row" style="padding-left:2em;">
        <p><?php echo $lokasi[0]['full']; ?></p>
    </div>
    <h5> Gallery</h5>
    <div class="row">
        <?php
        while ($row = $result->fetch_assoc()) {
            ?>
            <div class="col-md-3" style="margin-right:1em;">
                <img class="main-detail-img" src="<?php echo $row['url']; ?>">
            </div>
        <?php
    }
    ?>
    </div>


    <div id="disqus_thread"></div>
    <script>
        // /**
        //  *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
        //  *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
        // **/
        var disqus_developer = 1;
        var disqus_config = function() {
            this.page.url = 'http://wisata.informatika18.id/detail-pertunjukan.php?q=<?php echo $id; ?>'; // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = '?q=<?php echo $id; ?>'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
        };

        (function() { // DON'T EDIT BELOW THIS LINE
            var d = document,
                s = d.createElement('script');
            s.src = 'https://wisata-3.disqus.com/embed.js';
            s.setAttribute('data-timestamp', +new Date());
            (d.head || d.body).appendChild(s);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</div>

</div>
<?php
require('footer.php');


?>
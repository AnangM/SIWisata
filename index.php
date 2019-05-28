<?php require('header.php'); ?>
<div class="full-height main-bg-image">
    <?php require('navbar.php'); ?>

  <!-- Side Nav -->
  <div class="main-right-nav text-white">
    <!-- Customer Service -->
    <div class="row main-bg main-right-content">
      <div class="col-sm-8">
        Kontak Kami
      </div>
      <div class="col-sm-3">
        <img src="./images/icon/cs.svg">
      </div>
    </div>
    <!-- Cara booking -->
    <div class="row main-secondary-bg main-right-content">
      <div class="col-sm-8">
        Booking Trip
      </div>
      <div class="col-sm-3">
        <img src="./images/icon/question.svg">
      </div>
    </div>
    <!-- paket trip -->
    <div class="row main-tritary-bg main-right-content">
      <div class="col-sm-8">
        Paket Trip
      </div>
      <div class="col-sm-3">
        <img src="./images/icon/gift.svg">
      </div>
      <!-- row -->
    </div>
    <!-- main right nav -->
  </div>

  <div class="container">

    <div class="text-center text-white">
      <h2><i><b>Paling Sering Dikunjungi</b></i></h2>
      <!-- text center -->
    </div>
    <div class="row text-white" style="padding-right:2em;padding-left:2em;">
      <div class="col-md">
        <div class="text-center ">

          <p>Pulau Bunaken</p>
          <img class="main-display-img" src="/images/bunaken.jpeg">
        </div>
      </div>
      <div class="col-md">
        <div class="text-center">

          <p>Raja Ampat</p>
          <img class="main-display-img" src="/images/rajaampat.JPG">
        </div>

      </div>
      <div class="col-md">
        <div class="text-center">
          <p>Gunung Bromo</p>
          <img class="main-display-img" src="/images/bromo.jpg">
        </div>

      </div>
      <!-- row -->
    </div>
    <div class="row" style="margin-top:5.8em;">
      <div class="col-md-4"></div>
      <div class="col-md-4">
        <form action="search.php" method="get">
          <div class="input-group mb3">
            <input type="text" class="form-control " name="q" id="q" placeholder="Cari Destinasi Wisata...">
            <div class="input-group-append">
              <button class="btn btn-outline-primary  main-bg" type="submit">Cari!</button>
            </div>
        </form>
      </div>
    <div class="text-center text-white" style="margin-top:1.5em;">
      <h3><i><b>Kenapa Memilih Kami?</b></i></h3>
      <!-- text center -->
    </div>
    </div>
    <!-- row -->
  </div>
    <div class="text-center text-white" style="margin-top:1em;">
      <h6>Kami menyediakan berbagai macam trip dan kami juga telah bekerja sama</h6>
      <h6>dengan pengelola destinasi wisata. Kami juga mempunyai travel agent</h6>
      <h6>di setiap destinasi wisata, sehingga anda tidak perlu repot repot mencari travel agent lagi.</h6>
      <!-- text center -->
    </div>

  <!-- container-fluid -->
</div>
<!-- full height -->
</div>
<?php require('footer.php'); ?>
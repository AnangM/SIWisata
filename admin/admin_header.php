<!-- This line (until the next comment) -->
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#f2629d">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="icon" href="/images/icon/map.svg">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <title>TravelKuy</title>
</head>
<!-- Until This Line  IS A MUST -->

<body>
      <!-- Navbar     -->
  <nav class="navbar sticky-top navbar-expand-md navbar-dark  main-bg" style="margin-bottom:1em;">

<a class="navbar-brand" href="/">
  <img height="30px" class="d-inline-block align-top" src="/images/icon/map.svg" alt="">
  TravelKuy
</a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav ml-auto">
    <li class="nav-item ">
      <a class="nav-link" href="/admin/destinasi.php">DESTINASI</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/pertunjukan.php">PERTUNJUKAN</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">PAKET</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">EVENT</a>
    </li>
    <?php 
    session_start();
    if(isset($_SESSION['admin'])){?>
    <li class="nav-item">
        <a class="nav-link" href="logout.php">LOGOUT!</a>
    </li>
<?php }?>
  </ul>
</div>
</nav>
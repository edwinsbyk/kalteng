<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="keywords" content="">

  <title>TheSaaS — Responsive Bootstrap SaaS, Startup & WebApp Template</title>

  <!-- Styles -->
  <link href="assets/css/page.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- Favicons -->
  <link rel="apple-touch-icon" href="assets/img/apple-touch-icon.png">
  <link rel="icon" href="assets/img/favicon.png">

  <!--  Open Graph Tags -->
  <meta property="og:title" content="TheSaaS">
  <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
  <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
  <meta property="og:url" content="http://thetheme.io/thesaas/">
  <meta name="twitter:card" content="summary_large_image">
</head>


<body>


  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light navbar-stick-dark" data-navbar="sticky">
    <div class="container">

      <div class="navbar-left mr-auto">
        <button class="navbar-toggler" type="button">&#9776;</button>
        <a class="navbar-brand" href="<?= base_url('home'); ?>">
          <img class="logo-dark" src="<?= base_url('assets/'); ?>img/logo.png" alt="logo">
          <img class="logo-light" src="<?= base_url('assets/'); ?>img/logo.png" alt="logo">
        </a>
      </div>

      <section class="navbar-mobile">
        <nav class="nav nav-navbar mr-auto">
          <a class="nav-link" href="<?= base_url('home/'); ?>">Home</a>
          <a class="nav-link" href="<?= base_url('home/bidang'); ?>">Bidang</a>
          <li class="nav-item">
            <a class="nav-link" href="#">Warta <span class="arrow"></span></a>
            <nav class="nav">
              <a class="nav-link" href="<?= base_url('home/berita') ?>">Berita</a>
              <a class="nav-link" href="<?= base_url('home/artikel') ?>">Artikel</a>
              <a class="nav-link" href="<?= base_url('home/agenda') ?>">Agenda</a>
              <a class="nav-link" href="<?= base_url('home/testimoni') ?>">Testimoni</a>
            </nav>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pengumuman <span class="arrow"></span></a>
            <nav class="nav">
              <a class="nav-link" href="<?= base_url('home/pengumumanrup') ?>">RUP</a>
              <a class="nav-link" href="<?= base_url('home/pengumumanlelang') ?>">pengumuman Lelang</a>
              <a class="nav-link" href="<?= base_url('home/pengumumanpemenanglelang') ?>">Pemenang Lelang</a>
            </nav>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Data Pu <span class="arrow"></span></a>
            <nav class="nav">
              <a class="nav-link" href="<?= base_url('home/datapuJalan') ?>">Jalan</a>
              <a class="nav-link" href="<?= base_url('home/datapuJembatan') ?>">Jembatan</a>
              <a class="nav-link" href="<?= base_url('home/datapuEmbung') ?>">Embung</a>
              <a class="nav-link" href="<?= base_url('home/datapuSumurBor') ?>">Sumur Bor</a>
              <a class="nav-link" href="<?= base_url('home/datapuBlackSpot') ?>">Black Spot</a>
              <a class="nav-link" href="<?= base_url('home/datapuSpam') ?>">Spam</a>

              <a class="nav-link" href="<?= base_url('home/datapuPotensiDanau') ?>">Potensi Danau</a>
              <a class="nav-link" href="<?= base_url('home/datapuPotensiRawa') ?>">Potensi Rawa</a>
              <a class="nav-link" href="<?= base_url('home/datapuPotensiSumurBor') ?>">Potensi Sumur Bor</a>
            </nav>
          </li>
          <a class="nav-link" href="<?= base_url('home/download'); ?>">Download</a>
        </nav>
      </section>
      <a class="btn btn-xs btn-round btn-success" href="<?= base_url('auth') ?>">Login</a>
    </div>
  </nav><!-- /.navbar -->
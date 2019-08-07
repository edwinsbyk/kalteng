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
              <a class="nav-link" href="<?= base_url('home/pengumumanlelang') ?>">Pengumuman Lelang</a>
              <a class="nav-link" href="<?= base_url('home/pengumumanpemenanglelang') ?>">Pemenang Lelang</a>
            </nav>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('home/datapu') ?>">Data Pu <span class="arrow"></span></a>
            <nav class="nav">
              <a class="nav-link" href="<?= base_url('home/datapujalan') ?>">Jalan</a>
              <a class="nav-link" href="<?= base_url('home/datapujembatan') ?>">Jembatan</a>
              <a class="nav-link" href="<?= base_url('home/datapuembung') ?>">Embung</a>
              <a class="nav-link" href="<?= base_url('home/datapusumurbor') ?>">Sumur Bor</a>
              <a class="nav-link" href="<?= base_url('home/datapublackspot') ?>">Black Spot</a>
              <a class="nav-link" href="<?= base_url('home/datapuspam') ?>">Spam</a>
              <a class="nav-link" href="<?= base_url('home/datapupotensidanau') ?>">Potensi Danau</a>
              <a class="nav-link" href="<?= base_url('home/datapupotensirawa') ?>">Potensi Rawa</a>
              <a class="nav-link" href="<?= base_url('home/datapupotensisumurbor') ?>">Potensi Sumur Bor</a>
            </nav>
          </li>
          <a class="nav-link" href="<?= base_url('home/download'); ?>">Download</a>
        </nav>
      </section>





      <?php
      $login = (base_url('auth'));
      $logout = (base_url('auth/logout'));
      $dashboard = (base_url('auth'));


      if ($this->session->userdata('email') == null) {
        $stat = ('<a class="btn btn-xs btn-round btn-success" href="' . $login . '">Login</a>');
      } else {
        $stat = ('<a class="btn btn-xs btn-round btn-outline-success d-none d-lg-inline-block mr-2" href="' . $logout . '">Logout</a>
          <a class="btn btn-xs btn-round btn-success" href="' . $dashboard . '">Dashboard</a>');
      }
      echo $stat;
      ?>
      <!--  -->
    </div>
  </nav><!-- /.navbar -->
<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: url(../assets/img/bg/1.jpg)" data-overlay="7">
  <div class="container">
    <div class="row align-items-center h-100">

      <div class="col-lg-6">
        <h1>Bidang</h1>
        <p class="lead mt-5 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <p class="gap-xy">
          <a class="btn btn-round btn-outline-light mw-150" href="#">At imperdiet</a>
          <a class="btn btn-round btn-light mw-150" href="#">At imperdiet</a>
        </p>
      </div>
</header>
<!--


<header class="header text-white" style="background-image: url(../assets/img/bg/1.jpg)" data-overlay="7">
  <div class="container text-center">

    <div class="row">
      <div class="col-lg-8 mx-auto">

        <h1>Bidang</span></h1>
        <p class="lead-2"></p>

        <br>
        <hr class="w-60px">
        <br>

        <a class="btn btn-lg btn-round btn-light" href="#section-open-positions">Non arcu risus</a>

      </div>
    </div>

  </div>
</header>/.header -->


<!-- Main Content -->
<main class="main-content">



  <!-- <section class="section">
    <div class="container">
      <header class="section-header">
        <h2>Kualifikasi</h2>
        <hr>
        <p class="lead">Kami memiliki banyak cara untuk mencari tenaga yang berkualifikasi baik untuk bekerja keras dan cermat di Global Intermedia</p>
      </header>


      <div class="row text-center">
        <div class="col-md-10 mx-auto">
          <div class="row gap-y">


            <div class="col-md-6">
              <p><i class="icon-compass text-lighter lead-6 mb-5"></i></p>
              <h5>Memiliki motivasi diri</h5>
            </div>


            <div class="col-md-6">
              <p><i class="icon-trophy text-lighter lead-6 mb-5"></i></p>
              <h5>Berloyalitas tinggi</h5>
            </div>


            <div class="col-md-6">
              <p><i class="icon-lightbulb text-lighter lead-6 mb-5"></i></p>
              <h5>Selalu berfikir kedepan</h5>
            </div>


            <div class="col-md-6">
              <p><i class="icon-hourglass text-lighter lead-6 mb-5"></i></p>
              <h5>Tertantang untuk bekerja dibawah tekanan dan jadwal yang ketat</h5>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section> -->
  <section class="section" id="section-open-positions">
    <div class="container">
      <header class="section-header">
        <h2>Struktur bidang</h2>
      </header>


      <div class="accordion accordion-connected shadow-5" id="accordion-job">

        <?php foreach ($data as $row) : ?>

        <div class="card">
          <h6 class="card-title">
            <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-binaa-<?= $row['id']  ?>">
              <strong class="mr-auto"><td><?= $row['bidang']  ?></td></strong>
              <!-- <span class="small text-lighter">Yogyakarta <i class="fa fa-map-marker ml-2"></i></span> -->
            </a>
          </h6>
          <div id="collapse-binaa-<?= $row['id']  ?>" class="collapse" data-parent="#accordion-job">
            <div class="card-body">
              <strong>KEPALA <?= $row['bidang']  ?></strong><br>
               Nama : <?= $row['name']  ?> <br>
              Nip : <?= $row['username']  ?> <br>
              Alamat : <?= $row['alamat_kantor']  ?> <br>
              <!-- <hr class="w-100px"> -->
            </div>
          </div>
        </div>


         <?php endforeach; ?>


    </div>
    <hr>
    <!-- <div class="container">

      <h2 class="text-center">Manemukan pekerjaan yang sesuai dengan anda? Hubungi kami</h2>

      <form class="form-row" action="../assets/php/sendmail.php" method="POST" data-form="mailer">
        <div class="col-12">
          <div class="alert alert-success d-on-success">Kami sudah menerima pesan anda dan akan segera menghubungi anda.</div>
        </div>
        <hr>

        <div class="form-group col-sm-6 col-lg-4">
          <input class="form-control" type="text" name="name" placeholder="Nama Anda">
        </div>

        <div class="form-group col-sm-6 col-lg-4">
          <input class="form-control" type="email" name="email" placeholder="Alamat Email">
        </div>

        <div class="form-group col-sm-6 col-lg-4">
          <button class="btn btn-block btn-primary" type="submit">Kirim Pesan</button>
        </div>
      </form>

    </div> -->
  </section>


</main><!-- /.main-content -->
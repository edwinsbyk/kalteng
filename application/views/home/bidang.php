  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
  <section id="demos" class="overflow-hidden">
    <div class="row overflow-hidden">

      <div class="item text-white h-fullscreen text-center text-lg-left w-100 position-relative">
        <div class="content-slider" style="background-image: url('https://media.beritagar.id/2016-08/995c7dde74c89bc6e20b16364264e9a8.jpg')">
          <div class="inner-content row align-items-center h-100">
            <div class="col-lg-12">
              <h1>BIDANG </h1>
              <p class="lead mt-5 mb-8">Pekerjaan Umum </p>
              <p class="gap-xy">

              </p>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>
  </div>
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
                <a class="d-flex align-items-center collapsed" data-toggle="collapse" href="#collapse-binaa-<?= $row['id_pegawai']  ?>">
                  <strong class="mr-auto">
                    <td><?= $row['bidang']  ?></td>
                  </strong>
                  <!-- <span class="small text-lighter">Yogyakarta <i class="fa fa-map-marker ml-2"></i></span> -->
                </a>
              </h6>
              <div id="collapse-binaa-<?= $row['id_pegawai']  ?>" class="collapse" data-parent="#accordion-job">
                <div class="card-body">
                  <strong>KEPALA <?= $row['bidang']  ?></strong><br>
                  Nama : <?= $row['nama']  ?> <br>
                  Nip : <?= $row['nip']  ?> <br>
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
  <script>
    $(document).ready(function() {
      var owl = $('.owl-carousel');
      owl.owlCarousel({
        loop: true,
        // touchDrag: false,
        dotClass: 'owl-dot',
        dotsClass: 'owl-dots',
        dots: true,
        // mouseDrag: false,
        autoplay: true,
        autoplaySpeed: 1000,
        autoplayTimeout: 7000,
        animateOut: 'fadeOut',
        animateIn: 'fadeOut',
        items: 1
      })
    })
  </script>
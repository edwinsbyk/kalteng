<!-- <div id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle 547px at 6.8% 40.8%,  rgba(85,141,175,1) 0%, rgba(29,77,113,1) 98.6% );">
  <div class="container">
    <div class="row align-items-center h-100"> !-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<section id="demos" class="overflow-hidden">
<div class="row overflow-hidden">
  <div class="large-12 columns overflow-hidden w-100">
    <div class="owl-carousel owl-theme">
      <div class="item text-white h-fullscreen text-center text-lg-left w-100 position-relative">
        <div class="content-slider" style="background-image: url('https://fakta.news/wp-content/uploads/2018/02/Rel-kereta-api-Kalteng.jpg')">
          <div class="inner-content row align-items-center h-100">
            <div class="col-lg-6">
              <h1>SELAMAT DATANG </h1>
              <p class="lead mt-5 mb-8">DI PORTAL WEB
                DINAS PEKERJAAN UMUM DAN PENATAAN RUANG
                PEMERINTAH PROVINSI KALIMANTAN TENGAH</p>
              <p class="gap-xy">
                
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="item text-white h-fullscreen text-center text-lg-left w-100 position-relative">
        <div class="content-slider" style="background-image: url('https://cdns.klimg.com/merdeka.com/i/w/news/2019/01/19/1041478/670x335/kementerian-perhubungan-mulai-pembangunan-bandara-di-kalimantan-tengah.jpg')">
          <div class="inner-content row align-items-center h-100">
            <div class="col-lg-6">
              <h1>SELAMAT DATANG </h1>
              <p class="lead mt-5 mb-8">DI PORTAL WEB
                DINAS PEKERJAAN UMUM DAN PENATAAN RUANG
                PEMERINTAH PROVINSI KALIMANTAN TENGAH</p>
              <p class="gap-xy">
                
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="item text-white h-fullscreen text-center text-lg-left w-100 position-relative">
        <div class="content-slider" style="background-image: url('https://sgcdn.antaranews.com/cache/800x533/2019/06/25/IMG-20190625-WA0024_1.jpg')">
          <div class="inner-content row align-items-center h-100">
            <div class="col-lg-6">
              <h1>SELAMAT DATANG </h1>
              <p class="lead mt-5 mb-8">DI PORTAL WEB
                DINAS PEKERJAAN UMUM DAN PENATAAN RUANG
                PEMERINTAH PROVINSI KALIMANTAN TENGAH</p>
              <p class="gap-xy">
                
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>
</div>
<main>
  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Products
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <h2>Website Dinas Pekerjaan Umum Kalimantan Tengah</h2>
        <p>Media penyebaran informasi dan komunikasi Dinas Pekerjaan Umum dan Penataan Ruang pemerintah Provinsi Kalimantan Tengah dengan mayarakat.</p>
        <hr>

        <div class="row">
              <div class="col-lg-4">
                <section class="card">
                 <img src="<?php echo base_url(); ?>assets/img/bangunjalan.jpg">
                </section>
              </div>
              <div class="col-lg-4">
                <section class="card">
                   <img src="<?php echo base_url(); ?>assets/img/bangunjalan2.jpg">
                </section>
              </div>
              <div class="col-lg-4">
                <section class="card">
                   <img src="<?php echo base_url(); ?>assets/img/bangunkereta.jpg">
                </section>
              </div>
            </div>
       

      </header>
      <br><br>
   <div class="row" >
              <div class="col-md-8 offset-md-8 col-sm-8 ml-auto">
                <section class="card">
                  <div class="card-body text-secondary">
                    <h1 class="fas  fa-arrow-circle-right" style="color: black;">
                    BIDANG
                    <span class="fas  fa-arrow-circle-left" style="color: black;" >  </span></h1></div>
                </section>
              </div>
            </div>

            
           <div class="row" >
            <?php foreach ($data as $row) : ?>
              <div class="col-lg-4">
                <section class="card">
                  <div class="card-body text-secondary"><h6><?= $row['bidang'] ?></h6></div>
                </section>
              </div>
            <?php endforeach ?>
              
            </div>

        <br><br>
      <div class="row gap-y">

        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
            <p style="color: #78a300"><i class="icon-profile-male lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
            <p style="color: #eb4a62"><i class="icon-lightbulb lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
            <p style="color: #f69a3e"><i class="icon-documents lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#"">
            <p style=" color: #f0c93e"><i class="icon-briefcase lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
            <p style="color: #37b8af"><i class="icon-envelope lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>


        <div class="col-6 col-md-4 col-xl-2">
          <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
            <p style="color: #2faabc"><i class="icon-picture lead-7"></i></p>
            <h6 class="mb-0"><strong>Lorem ipsum</strong></h6>
          </a>
        </div>

      </div>
    </div>
  </section>
</main>

<script>
  $(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
      loop:true,
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
      items:1
    })
  })
</script>
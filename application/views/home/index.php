<!-- <div id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle 547px at 6.8% 40.8%,  rgba(85,141,175,1) 0%, rgba(29,77,113,1) 98.6% );">
  <div class="container">
    <div class="row align-items-center h-100"> -->

<section id="demos" class="overflow-hidden">
<div class="row overflow-hidden">
  <div class="large-12 columns overflow-hidden">
    <div class="owl-carousel owl-theme">
      <div class="item text-white h-fullscreen text-center text-lg-left">
        <img src="https://images3.alphacoders.com/823/82317.jpg" >
      </div>
      <div class="item text-white h-fullscreen text-center text-lg-left">
        <img src="https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_960_720.jpg" >
      </div>
      <div class="item text-white h-fullscreen text-center text-lg-left">
        <img src="https://cdn.pixabay.com/photo/2019/04/04/17/49/eye-4103308_960_720.jpg" >
      </div>
    </div>
  </div>
</div>
</section>
<!-- </div> -->
<main>
  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Products
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
  <section class="section">
    <div class="container">
      <header class="section-header">
        <h2>Non arcu risus quis varius quam quisque id diam.</h2>
        <hr>
        <p class="lead">At imperdiet dui accumsan</p>
      </header>


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
      autoplay: true,
      autoplaySpeed: 500,
      autoplayTimeout: 3000,
      animateOut: 'fadeOut',
      items:1
    })
  })
</script>
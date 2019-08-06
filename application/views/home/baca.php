<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= $detail["image"] ?>);" detail-overlay="9">
  <div class="container text-center">

    <div class="row h-100">
      <div class="col-lg-8 mx-auto align-self-center">

        <p class="opacity-70 text-uppercase small ls-1"></p>
        <h1 class="display-4 mt-7 mb-8"><?= $detail["judul"] ?>
          <p><span class="opacity-70 mr-1">By</span> <a class="text-white" href="#">Admin</a></p>
          <p><img class="avatar avatar-sm" src="<?= base_url('assets/') ?>img/avatar/2.jpg" alt="..."></p>

      </div>

      <div class="col-12 align-self-end text-center">
        <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
      </div>

    </div>

  </div>
</header>
<main class="main-content">


  <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Blog content
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
  <div class="section" id="section-content">
    <div class="container">

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <?= $detail['isi'] ?>
        </div>
      </div>



      <div class="text-center my-6">
        <img class="rounded-md" src="<?= base_url('assets/') ?>img/bg/11.jpg" alt="...">
      </div>



      <div class="row">
        <div class="col-lg-8 mx-auto">


        </div>
      </div>


    </div>
  </div>



</main>
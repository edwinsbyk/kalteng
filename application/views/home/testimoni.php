
<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= base_url('assets/') ?>img/thumb/5.jpg);" data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p class="opacity-70 text-uppercase small ls-1"></p>
                <h1 class="display-4 mt-7 mb-8">Testimoni Seputar Pekerjaan Umum Kalimantan Tengah</h1>
            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>
        </div>
    </div>
</header>
<style>
    .image-d {
        height: 220px;
        object-fit: cover;
        overflow: hidden;
    }
</style>
<section class="section bg-gray">
    <div class="container">
        <div class="row gap-y">
        <?php foreach ($data as $row) : ?>
                    <?php
$kata="primary
info
success
warning
dark
danger";

$kata = explode("\n", $kata);

$terpilih = $kata[mt_rand(0, count($kata)-1)];



?>
            <div class="col-md-6 col-lg-4">
                <div class="card text-white bg-<?php echo $terpilih ?> mb-3" style="max-width: 18rem;">
  <div class="card-header"><?= $row->nama ?></div>
  <div class="card-body">
    <p class="card-title"<?= $row->isi ?></p>
   
        <div class="card-footer bg-transparent border-success"><?= $row->email ?></div>
  </div>

                </div>
            </div>
        <?php endforeach ; ?>
        </div>
        <nav class="flexbox mt-6">
            <a class="btn btn-white disabled"><i class="ti-arrow-left fs-9 mr-2"></i> Newer</a>
            <a class="btn btn-white" href="#">Older <i class="ti-arrow-right fs-9 ml-2"></i></a>
        </nav>
    </div>
</section>

</div>
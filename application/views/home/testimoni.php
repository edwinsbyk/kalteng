
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

    .shadow {
        margin: 10px;
    }

    .rounded-card{
        border-radius: .5rem;
    }

    /* .container{
        display: flex;
    } */
</style>
<section class="section bg-gray">
    <div class="container">
        <div class="row gap-y justify-content-center text-center">
<?php foreach ($data as $row) : ?>
            <div class="col-lg-5 shadow bg-white rounded-card">
              <blockquote class="blockquote">
                <div><small>From : <?= $row->email ?> </small></div>
                <br>
                <h2 class="small"><?= $row->isi ?></h2>
                <footer><?= $row->nama ?></footer>
              </blockquote>
            </div>
            <?php endforeach ; ?>

          </div>
    </div>
</section>


</div>
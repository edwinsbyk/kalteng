<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= base_url('assets/') ?>img/thumb/5.jpg);" data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p class="opacity-70 text-uppercase small ls-1"></p>
                <h1 class="display-4 mt-7 mb-8">Berita Seputar Pekerjaan Umum Kalimantan Tengah</h1>
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

  <div > 
        <form class="form-inline active-cyan-4" action="searchberita?" >
  <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search"
    aria-label="Search" name="id">
  <i class="fas fa-search" aria-hidden="true"></i>
</div><br><br>

        <div class="row gap-y">
            <?php foreach ($data as $row) : ?>
                <div class="col-md-6 col-lg-4">
                    <div class="card d-block border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top image-d" src="<?= $row->image ?>" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Berita</a></p>
<<<<<<< HEAD
                            <h5 class="mb-0"><a href="<?= base_url("home/berita/") ?><?= $row->slug ?>"><?= $row->judul ?></a></h5>
=======

                            <h5 class="mb-0"><a href="<?= base_url("home/berita/") ?><?= $row->slug ?>"><?= $row->judul ?></a></h5>

                            

>>>>>>> 47c274d254dd2ef56252b2b0fd04d7a0a5630e69
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <nav class="flexbox mt-6">
            <?= create_pagination($limit, $data[0]->jml_row, $this->input->get("page")) ?>
        </nav>
    </div>
</section>

</div>
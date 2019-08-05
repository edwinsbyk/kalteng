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
<section class="section bg-gray">
    <div class="container">
        <div class="row gap-y">
        <?php foreach ($data as $row) : ?>
            
            <div class="col-md-6 col-lg-4">
                <div class="card d-block border hover-shadow-6 mb-6">
                    <a href="#"><img class="card-img-top" src="<?= $row->image ?>" alt="Card image cap"></a>
                    <div class="p-6 text-center">
                        <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Berita</a></p>
                        <h5 class="mb-0"><a href="<?= base_url("home/newsdemo") ?>?id=<?= $row->idberita ?>"><?= $row->judul ?></a></h5>
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
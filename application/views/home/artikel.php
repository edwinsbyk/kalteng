<main class="main-content">
<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= base_url('assets/') ?>img/thumb/5.jpg);" data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p class="opacity-70 text-uppercase small ls-1"></p>
                <h1 class="display-4 mt-7 mb-8">Artikel</h1>
            <div class="col-12 align-self-end text-center">
                <a class="scroll-down-1 scroll-down-white" href="#section-content"><span></span></a>
            </div>
        </div>
    </div>
</header>
    <section class="section p-0" id="section-content">
        <div class="container">
            <form class="form-inline active-cyan-4 pt-7 w-100 d-flex justify-content-center" action="searchartikel?">
                <input class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Search" aria-label="Search" name="id">
                <i class="fas fa-search" aria-hidden="true"></i>
            </form>
                <div class="col-md-12 col-xl-12 mr-4 ml-4 row">
                <?php foreach ($data as $row) : ?>
                    <article class="mb-8 mt-7 col-md-6">
                        <header class="text-center mb-7">
                            <p>
                                <a class="small-4 text-lighter text-uppercase ls-2 fw-600" href="#">Artikel</a>
                            </p>
                            <h3>
                                <a href="post-2.html"><?= $row->judul ?></a>
                            </h3>
                        </header>
                        <a href="post-2.html"><img class="rounded-md" src="<?= $row->image ?>" alt="..."></a>
                        <div class="card-body">
                            <div class="row mb-5 small-2 text-lighter">
                                <div class="col-auto">
                                    <a class="text-inherit" href="#">by Hossein</a>
                                    <span class="align-middle px-1">&bull;</span>
                                    <time datetime="2018-05-15T19:00">3 days ago</time>
                                </div>
                            </div>
                            <p class="text-justify"><?= substr($row->isi, 0, 390) ?></p>
                            <p class="text-center mt-7">
                                <a class="btn btn-primary btn-round" href="<?= base_url("home/artikel/".$row->slug) ?>">Read more</a>
                            </p>
                        </div>
                </article>
                <?php endforeach ; ?>
                </div>
            <div class="row w-100 justify-content-between">
                <?= 
                    create_pagination($limit, $data[0]->jml_row, $this->input->get("page"));
                ?>
            </div>
    </div>
</section>
</main>
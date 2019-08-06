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
                <div class="col-md-10 col-xl-8 mx-auto">
                <?php foreach ($data as $row) : ?>
                        <article class="my-8">
                            <header class="text-center mb-7">
                            <p><a class="small-4 text-lighter text-uppercase ls-2 fw-600" href="#">Artikel</a></p>
                            <h3><a href="post-2.html"><?= $row->judul ?></a></h3>
                            </header>

                            <a href="post-2.html"><img class="rounded-md" src="<?= $row->image ?>" alt="..."></a>

                            <div class="card-body">
                            <div class="row mb-5 small-2 text-lighter">
                                <div class="col-auto">
                                <a class="text-inherit" href="#">by Hossein</a>
                                <span class="align-middle px-1">&bull;</span>
                                <time datetime="2018-05-15T19:00">3 days ago</time>
                                </div>

                                <div class="col-auto ml-auto">
                                <span><i class="fa fa-eye pr-1 opacity-60"></i> 28</span>
                                <a class="text-inherit ml-5" href="#"><i class="fa fa-comments pr-1 opacity-60"></i> 6</a>
                                </div>
                            </div>

                            <p class="text-justify"><?= substr($row->isi, 0, 390) ?><a href="<?= base_url("home/artikel/".$row->slug) ?>"><br>selengkapnya...</a></p>

                            <p class="text-center mt-7">
                                <a class="btn btn-primary btn-round" href="<?= base_url("home/artikel/".$row->slug) ?>">Read more</a>
                            </p>
                            </div>
                        </article>
                    <?php endforeach ; ?>
        </div>
    </div>
</section>

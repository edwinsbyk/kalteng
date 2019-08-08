<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= base_url('assets/') ?>img/thumb/5.jpg);" data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p class="opacity-70 text-uppercase small ls-1"></p>
                <h1 class="display-4 mt-7 mb-8">Artikel Seputar Pekerjaan Umum Kalimantan Tengah</h1>
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
<section class="section bg-gray p-0">
    <div class="container">
        <div >
        <form class="form-inline active-cyan-4 mb-7 mt-7 justify-content-center" method="get">
            <input class="form-control form-control-sm mr-3 w-75" type="text" name="cari" placeholder="Search" aria-label="Search" name="id">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
    </div>
        <div class="row gap-y">
        
            <?php if (count($data)) { foreach ($data as $row) : ?>
            <div class="card hover-shadow-7 my-5 col-md-12 p-0">
                <div class="row ">
                    <div class="col-md-4">
                        <a href="blog-single.html"><img class="fit-cover w-100 position-absolute h-100" src="<?= $row->image ?>" alt="<?= $row->judul ?>"></a>
                    </div>
                    <div class="col-md-8">
                        <div class="p-7">
                        <h4><?= $row->judul ?></h4>
                        <p><?= cut_string($row->isi) ?></p>
                        <a class="small ls-1" href="<?= base_url("home/berita/") ?><?= $row->slug ?>">Read More <span class="pl-1">&xrarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <nav class="flexbox mt-6">
            <?= create_pagination($limit, $data[0]->jml_row, $this->input->get("page")) ?>
        </nav>
        <?php } else { ?>
            <div class="jumbotron jumbotron-fluid p-8 w-100">
            <div class="container">
                <h1 class="display-4">404 not found</h1>
                <p class="lead">Tidak ditemukan data dengan kata kunci <?= $this->input->get('cari'); ?></p>
            </div>
            </div>
        <?php } ?>
    </div>
</section>

</div>
</form>
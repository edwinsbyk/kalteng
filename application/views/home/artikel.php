<header class="header text-white h-fullscreen pb-80" style="background-image: url(<?= base_url('assets/') ?>img/thumb/5.jpg);" data-overlay="9">
    <div class="container text-center">
        <div class="row h-100">
            <div class="col-lg-8 mx-auto align-self-center">
                <p class="opacity-70 text-uppercase small ls-1"></p>
                <h1 class="display-4 mt-7 mb-8">Agenda Kegiatan Seputar Pekerjaan Umum Kalimantan Tengah</h1>
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
        <form class="form-inline active-cyan-4 justify-content-center" method="get">
            <input class="form-control form-control-sm mr-3 w-75" type="text" name="cari" placeholder="Search" aria-label="Search" name="id">
            <i class="fas fa-search" aria-hidden="true"></i>
        </form>
</div><br>
        <div class="row gap-y">
        
        <?php 
        if (count($data)) {
        foreach ($data as $row) : 
        ?>
            
            <div class="col-md-6 col-lg-4 my-7">
                    <div class="card d-block border hover-shadow-6 mb-6">
                        <a href="#"><img class="card-img-top image-d" src="<?= $row->image ?>" alt="Card image cap"></a>
                        <div class="p-6 text-center">
                            <p><a class="small-5 text-lighter text-uppercase ls-2 fw-400" href="#">Berita</a></p>
                            <h5 class="mb-0"><a href="<?= base_url("home/artikel/") ?><?= $row->slug ?>"><?= $row->judul ?></a></h5>
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
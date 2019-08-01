<header class="header text-white h-fullscreen bg-fixed">
    <div class="overlay opacity-95" style="background-image: linear-gradient(135deg, #667eea 0%, #764ba2 100%);"></div>
    <div class="container text-center">
        <div class="row align-items-center h-100 pt-8 pt-md-7 pb-md-8">
            <div class="col-md-8 mx-auto">
                <h1>Data Dinas Pekerjaan Umum Provinsi Kalimantan Tengah</h1>
                <p class="lead mt-5 mb-8"></p>
            </div>
        </div>
    </div>
</header>
</div>
<main>
    <section class="section">
        <div class="container">
            <header class="section-header">
                <h2>Non arcu risus quis varius quam quisque id diam.</h2>
                <hr>
                <p class="lead">At imperdiet dui accumsan</p>
            </header>
            <div class="row gap-y">
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapujalan') ?>">
                        <p style="color: #78a300"><i class="fas fa-road lead-7"></i></p>
                        <h6 class="mb-0"><strong>Jalan</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapujembatan') ?>">
                        <p style="color: #eb4a62"><i class="fas fa-archway lead-7"></i></p>
                        <h6 class="mb-0"><strong>Jembatan</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapuembung') ?>">
                        <p style="color: #f69a3e"><i class="fas fa-water lead-7"></i></p>
                        <h6 class="mb-0"><strong>Embung</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapusumurbor') ?>">
                        <p style=" color: #c05c7e"><i class="fas fa-igloo lead-7"></i></p>
                        <h6 class="mb-0"><strong>Sumur Bor</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapublackspot') ?>">
                        <p style=" color: #f0c93e"><i class="fas fa-house-damage lead-7"></i></p>
                        <h6 class="mb-0"><strong>Black Spot</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapuspam') ?>">
                        <p style="color: #5edfff"><i class="fas fa-tint lead-7"></i></p>
                        <h6 class="mb-0"><strong>Spam</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapupotensidanau') ?>">
                        <p style="color: #e2c275"><i class="icon-picture lead-7"></i></p>
                        <h6 class="mb-0"><strong>Potensi Danau</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapupotensirawa') ?>">
                        <p style="color: #00bdaa"><i class="icon-picture lead-7"></i></p>
                        <h6 class="mb-0"><strong>Potensi Rawa</strong></h6>
                    </a>
                </div>
                <div class="col-6 col-md-4 col-xl-4">
                    <a class="card card-body border hover-shadow-6 text-center py-6" href="<?= base_url('home/datapupotensisumurbor') ?>">
                        <p style="color: #ff9c91"><i class="icon-picture lead-7"></i></p>
                        <h6 class="mb-0"><strong>Potensi Sumur Bor</strong></h6>
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
            loop: true,
            touchDrag: false,
            mouseDrag: false,
            autoplay: true,
            autoplaySpeed: 1000,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeOut',
            items: 1
        })
    })
</script>
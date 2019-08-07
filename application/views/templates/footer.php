<!-- Footer -->
<div class="footer-v1 bg-dark">
    <div class="footer bg-dark">
        <div class="container">
            <div class="row">
                <!-- About -->
                <div class="col-md-6 md-margin-bottom-40">
                    <div class="headline">
                        <h2 class="text-light bg-dark">Tentang Kalteng</h2>
                    </div>
                    <img src="//4.bp.blogspot.com/-a0rStfWG9nM/UNmcMwUsGwI/AAAAAAAAIwc/AcCmv02dmiI/s1600/LOGO+PROVINSI+KALIMANTAN+TENGAH.png" alt="Logo" style="height: 75px; float: left; margin-right: 5px; margin-bottom: 5px;">
                    <p class="text-light bg-dark"><b class="text-light bg-dark">Kalimantan Tengah</b> adalah salah satu provinsi di Indonesia yang terletak di Pulau Kalimantan. Ibukotanya adalah Kota Palangka Raya. Kalimantan Tengah memiliki luas 157.983 km².</p>
                </div>
                <!--/col-md-3-->
                <!-- End About -->

                <!-- Latest -->
                <div class="col-md-6 md-margin-bottom-40">
                    <div class="posts">
                        <div class="headline ">
                            <h2 class="text-light bg-dark">Kontak Info</h2>
                        </div>
                        <ul class="list-unstyled latest-list">
                            <li>
                                <a href="#" class="text-light bg-dark">Alamat</a>
                                <small class="text-light bg-dark">Jl. S. Parman No.3, Palangka, Kec. Jekan Raya, Kota Palangka Raya, Kalimantan Tengah 73111
                                    | Dinas Pekerjaan Umum dan Penataan Ruang Provinsi Kalteng |</small>
                            </li>
                            <li>
                                <a href="#" class="text-light bg-dark">Telp.</a>
                                <small class="text-light bg-dark">(0536) 3235336</small>
                            </li>
                            <li>
                                <a href="#" class="text-light bg-dark"> Email</a>
                                <small class="text-light bg-dark">diskominfo@kalteng.go.id</small>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/col-md-3-->
                <!-- End Latest -->

                <!-- Link List -->

            </div>
            <!--/footer-->

            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <p class="p-3 mb-2 bg-dark text-white">
                                <?= (int) date('Y') ?> © PEMERINTAH PROVINSI KALIMANTAN TENGAH
                            </p>
                        </div>


                    </div>
                </div>
            </div>
            <!--/copyright-->
        </div>


        <?php foreach ($js_list as $js) { ?>
            <script src="<?= base_url($js) ?>"></script>
        <?php } ?>
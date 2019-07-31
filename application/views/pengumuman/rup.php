<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 114.9deg,  rgba(34,34,34,1) 8.3%, rgba(0,40,60,1) 41.6%, rgba(0,143,213,1) 93.4% );">
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-6">
                <h1>RUP (Rencana Umum Pengadaan)</h1>
                <p class="lead mt-5 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <p class="gap-xy">
                    <a class="btn btn-round btn-outline-light mw-150" href="#">At imperdiet</a>
                    <a class="btn btn-round btn-light mw-150" href="#">At imperdiet</a>
                </p>
            </div>
</header>


<main class="main-content">

    
        <div class="col-lg-12">
    <!-- DATA TABLE-->
   
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mx-auto ">
                    <table class="table table-hover data_table table-danger" >
                        <thead class="table-dark">
                            <tr>
                    <th>No</th>
                    <th>Kegiatan / Paket</th>
                    <th>Lokasi</th>
                    <th>Pagu</th>
                    <th>Metode Lelang</th>
                    

                            </tr>
                        </thead>
                        <tbody>
                          
                            

                           <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $nomor; ?></td>
                                        <td><?= $row['kegiatan']; ?></td>
                                        <td><?= $row['lokasi']; ?></td>
                                        <td>Rp. <?php echo number_format($row['pagu']) ?></td>
                                        <td><?= $row['metode']; ?></td>
                                        <td>
                                        
                                </tr>
                                <?php $nomor++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>
    



</main>
<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 114.9deg,  rgba(34,34,34,1) 8.3%, rgba(0,40,60,1) 41.6%, rgba(0,143,213,1) 93.4% );">
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-6">
                <h1>Pengumuman Lelang</h1>
                <p class="lead mt-5 mb-8">Pekerjaan Umum Kalimantan Tengah</p>
            </div>
</header>


<main class="main-content">

    
        <div class="col-lg-12">
    <!-- DATA TABLE-->
   
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <table class="table table-hover data_table">
                        <thead class="thead-dark">
                            <tr>
                               <th>No</th> 
                                                <th>Tanggal</th>
                                                <th>Batas Waktu</th>
                                                <th>No. SK</th>
                                                <th>Nama Paket</th>
                                                <th>Pagu (Rp)</th>
                                                <th>Action</th>
                                

                            </tr>
                        </thead>
                        <tbody>
                             <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $nomor; ?></td>
                                        <td><?= $row['tanggal']; ?></td>
                                        <td><?= $row['batas']; ?></td>
                                        <td><?= $row['no_sk']; ?></td>
                                        <td><?= $row['nama_paket']; ?></td>
                                        <td>Rp.<?php echo number_format($row['pagu']) ?></td>
                                    </tr>
                                <?php $nomor++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>

</div>
</main>

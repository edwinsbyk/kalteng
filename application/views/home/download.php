<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(78,235,324,190) 0%, rgba(152,70,190,1) 100.2% );">
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-6">
                <h1>Download</h1>
                
            </div>
</header>


<main class="main-content">

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <table class="table table-hover data_table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nama File</th>
                                <th scope="col">Keterangan</th>
                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data as $d) : if (!$d["publik"]) continue; ?>
                                <tr>
                                    <td><?= $i; ?></td>
                                    <td><?= $d['nama_file']; ?></td>
                                    <td><?= $d['keterangan']; ?></td>
                                    <td>
                                        <div>
                                            <a href="<?php echo base_url('files/download/') ?><?= $d['id_file'] ?>" target="_self" class="item"><i style="color: #203e5f" class="fas fw fa-download"></i></a>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach; ?>

                        </tbody>
                    </table>

                </div>
            </div>

        </div>
    </section>




</main>
<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(3,235,255,1) 0%, rgba(152,70,242,1) 100.2% );">
    <div class="container">
        <div class="row align-items-center h-100">

            <div class="col-lg-6">
                <h1>Download</h1>
                <p class="lead mt-5 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua.</p>
                <p class="gap-xy">
                    <a class="btn btn-round btn-outline-light mw-150" href="#">At imperdiet</a>
                    <a class="btn btn-round btn-light mw-150" href="#">At imperdiet</a>
                </p>
            </div>
</header>


<main class="main-content">

    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mx-auto">
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
                            <?php foreach ($data as $d) : ?>
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



<!-- HEADER DESKTOP-->
<br><br><br><br>
<!-- MAIN CONTENT-->
<div class="col-md-2">
    <div>
        <div class="table-data-feature">
            <a href="<?= base_url('admin/tambahrup'); ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-plus-circle"></i></a>Tambah Data


        </div>
    </div>
</div><br>
<div class="col-lg-12">
    <!-- DATA TABLE-->
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kegiatan / Paket</th>
                    <th>Lokasi</th>
                    <th>Pagu</th>
                    <th>Metode Lelang</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
               <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $nomor; ?></td>
                                        <td><?= $row['kegiatan']; ?></td>
                                        <td><?= $row['lokasi']; ?></td>
                                        <td><?= $row['pagu']; ?></td>
                                        <td><?= $row['metode']; ?></td>
                                        
                                        <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                 <?php $nomor++; ?>
                                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
    <br><br>
    <!-- Jquery JS-->
  

<!-- end document-->
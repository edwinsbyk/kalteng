
<div class="col-lg-12">
    <!-- DATA TABLE-->
    <?= $this->session->flashdata('message'); ?>
    <div class="table-responsive m-b-40">
        <table class="table table-borderless table-data3 data_table" id="artikelTable" style="width:100%">
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
                                        <td>Rp. <?php echo number_format($row['pagu']) ?></td>
                                        <td><?= $row['metode']; ?></td>
                                        <td>
                                        
                                       

                       <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id_rup']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id_rup']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                 <?php $nomor++; ?>
                                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
</div>
    

<?php $this->load->view('admin/pengumuman/editdataRUP-modal'); ?>
<?php $this->load->view('admin/pengumuman/deletedataRUP-modal'); ?>
    <!-- Jquery JS-->
  

<!-- end document-->
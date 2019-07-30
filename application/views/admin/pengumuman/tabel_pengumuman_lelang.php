
            <?= $this->session->flashdata('message'); ?>
                        <div class="col-md-2">
                           
                        </div><br>
                            <div class="col-lg-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="artikelTable" class="table table-borderless table-data3" style="width:100%">
                                        <thead>
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
                                        
                                        <td>
                              <div class="table-data-feature">
                                 <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id_pengumuman_lelang']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id_pengumuman_lelang']; ?>"><i class="zmdi zmdi-delete"></i></a>

                                        </div>
                                                </td>
                                            </tr>
                                             <?php $nomor++; ?>

                                <?php endforeach; ?>

                                        </tbody>
                                    </table>
                                </div>
</div>

<?php $this->load->view('admin/pengumuman/editdataPengumuman-modal'); ?>
<?php $this->load->view('admin/pengumuman/deletedataPengumuman-modal'); ?>

    <!-- Jquery JS-->
   
<!-- end document-->
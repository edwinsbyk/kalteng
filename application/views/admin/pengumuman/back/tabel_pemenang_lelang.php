

                
            <!-- HEADER DESKTOP-->
            <br><br><br><br>
            <!-- MAIN CONTENT-->
                        <div class="col-md-2">
                            <div align="right">
                                     <div class="table-data-feature">
                                                   <a href="<?= base_url('admin/tambahpemenanglelang'); ?>"  class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-plus-circle"></i></a>Tambah Data

                                                   
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
                                                <th>No. SK</th>
                                                <th>Nama Paket</th>
                                                <th>Pemenang</th>
                                                <th>HPS (Rp)</th>
                                                <th>Action</th>

                                                
                                            </tr>
                                        </thead>
                                        <tbody>

                                                <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                    <tr>
                                        <td><?= $nomor; ?></td>
                                        <td><?= $row['no_sk'] ?></td>
                                        <td><?= $row['nama_paket'] ?></td>
                                        <td><?= $row['pemenang']; ?></td>
                                        <td><?= $row['hps']; ?></td>
                                        
                                                    <td>    
                                                     <div class="table-data-feature">
                                                   <a href="#"  class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                                   <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                               </div>
                                                </td>
                                            </tr>
                                                   <?php $nomor++; ?>

                                <?php endforeach; ?>
                                        </tbody>
                                    </table>
  
                              </div>
 <?php foreach ($data as $row) : ?>                             
<br><br>
<?php endforeach; ?>
    <!-- Jquery JS-->
   
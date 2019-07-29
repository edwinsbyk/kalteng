<div class="table-data__tool">
   
    
    <div class="table-data__tool-left">
        <div class="rs-select2--light rs-select2--md">
            <select class="js-select2" name="property">
                <option selected="selected">All Properties</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <div class="rs-select2--light rs-select2--sm">
            <select class="js-select2" name="time">
                <option selected="selected">Today</option>
                <option value="">3 Days</option>
                <option value="">1 Week</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <button class="au-btn-filter">
            <i class="zmdi zmdi-filter-list"></i>filters</button>
    </div>
    <div class="table-data__tool-right">
        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>add item</button>
        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
            <select class="js-select2" name="type">
                <option selected="selected">Export</option>
                <option value="">Option 1</option>
                <option value="">Option 2</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
</div>

                
          <?= $this->session->flashdata('message'); ?>
            <!-- MAIN CONTENT-->
                        <div class="col-md-2">
                            
                            
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
                                        <td>Rp. <?php echo number_format($row['hps']) ?></td>
                                        
                                                    <td>    
                                                  <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id_pemenang_lelang']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id_pemenang_lelang']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                                                </td>
                                            </tr>
                                                   <?php $nomor++; ?>

                                <?php endforeach; ?>
                                        </tbody>
                                    </table>
  
                              </div>

</div>

<?php $this->load->view('admin/pengumuman/editdataPemenang-modal'); ?>
<?php $this->load->view('admin/pengumuman/deletedataPemenang-modal'); ?>
   
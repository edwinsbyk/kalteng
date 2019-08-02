                 <?= $this->session->flashdata('message'); ?>
                  <div class="col-lg-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="artikelTable" class="table table-borderless table-data3 data_table" style="width:100%">
                                        <thead>
                                            <th>No</th>
                                            <th>Nip</th>
                                          <th>Nama</th>
                                          <th>Alamat</th>
                                          <th>Bidang</th>
                                         
                                          <th>Action</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                                      <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                 
                                        <tr>
                                          <td><?= $nomor ?></td>
                                          <td><?= $row['nip'] ?></td>
                                          <td><?= $row['nama']  ?></td>
                                          <td><?= $row['alamat_kantor']  ?></td>
                                           <td><?= $row['bidang']  ?></td>
                                         
                                          
                                           
                                          
                                         <td>  

                                                  <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_detail<?= $row['id_pegawai']; ?>"><i class="zmdi zmdi-eye"></i></a>
                                                  <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id_pegawai']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id_pegawai']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                                                </td>
                                            </tr>

                                                 
                                               

 <?php $nomor++; ?>
                                              <?php endforeach; ?>

                              
                                          <?php $this->load->view('admin/pegawai/detailPegawai-modal'); ?>
<?php $this->load->view('admin/pegawai/editPegawai-modal'); ?>
<?php $this->load->view('admin/pegawai/deletePegawai-modal'); ?>
                                        </tbody>
                                    </table>
  
                              </div>

</div>

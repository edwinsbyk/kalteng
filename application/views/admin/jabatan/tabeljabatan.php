                 <?= $this->session->flashdata('message'); ?>
                  <div class="col-lg-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="artikelTable" class="table table-borderless table-data3" style="width:100%">
                                        <thead>
                                            <th>No</th>
                                          <th>Jabatan</th>
                                          
                                          <th>Action</th>

                                        </tr>
                                      </thead>
                                      <tbody>
                                                      <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                        <tr>
                                          <td><?= $nomor ?></td>
                                          <td><?= $row['jabatan'] ?></td>
                                      

                                         <td>  

                                                 
                                                  <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id_jabatan']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id_jabatan']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                                                </td>
                                            </tr>

                                               <?php $nomor++; ?>

                                <?php endforeach; ?>
                                          <?php $this->load->view('admin/jabatan/editdataJabatan-modal'); ?>
                                        </tbody>


 <?php $this->load->view('admin/jabatan/deletedataJabatan-modal'); ?>

                                    </table>

 
                              </div>

</div>

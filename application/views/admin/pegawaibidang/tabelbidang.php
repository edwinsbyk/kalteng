                  <?= $this->session->flashdata('message'); ?>
                  <div class="col-lg-12">
                                <!-- DATA TABLE-->
                                <div class="table-responsive m-b-40">
                                    <table id="artikelTable" class="table table-borderless table-data3" style="width:100%">
                                        <thead>
                                            <th>No</th>
                                          <th>Nama</th>
                                          <th>Jabatan</th>
                                          <th>Bidang</th>
                                          <th>Alamat</th>
                                         

                                        </tr>
                                      </thead>
                                      <tbody>
                                                      <?php $nomor = 1; ?>
                                <?php foreach ($data as $row) : ?>
                                        <tr>
                                          <td><?= $nomor ?></td>
                                           <td><?= $row['name'] ?></td>
                                            <td value="<?= $row['id_jabatan'] ?>">Kepala</td>
                                          <td><?= $row['bidang'] ?></td>
                                          <td><?= $row['alamat_kantor']  ?></td>
                                          </tr>

                                               <?php $nomor++; ?>

                                <?php endforeach; ?>
                                          
                                        </tbody>
                                    </table>
  
                              </div>

</div>


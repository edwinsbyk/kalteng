<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Lihat Data Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editPegawai') ?>">
                    <div class="modal-body">
                      
                        <div class="form-group">
                            <label class="col-form-label">NIP :</label>
                             <input type="hidden" class="form-control" id="id" name="id"
                              value="<?= $row['id'] ?>">
                              <input type="hidden" id="hf-password" name="password"  class="form-control" value="<?= $row['password'] ?>">
                            <input type="text" class="form-control" id="username" name="username" placeholder="kegiatan" value="<?= $row['username'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?= $row['name'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email :</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?= $row['email']  ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jabatan :</label>
                                                                                <select type="text" id="hf-hps" name="jabatan" placeholder="Masukkan jabatan" class="form-control">
                                                        <?php foreach ($data_jabatan as $row) : ?>
                                                        <option value="<?= $row['id_jabatan'] ?>"><?= $row['jabatan'] ?></option>
                                                        <?php endforeach ?>
                                                    
                                                        
                                                        
                                                       </select>
                        </div><div class="form-group">
                            <label class="col-form-label">Bidang :</label>
                            <select type="text" id="hf-hps" name="id_bidang" placeholder="Masukkan HPS" class="form-control">
                                                        <?php foreach ($data_pegawai as $row) : ?>
                                                        <option value="<?= $row['id_bidang'] ?>"><?= $row['bidang'] ?></option>
                                                        <?php endforeach ?>
                                                    
                                                        
                                                        
                                                       </select>
                        </div><div class="form-group">
                            <label class="col-form-label">Alamat Kantor:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat_kantor'] ?>" required>
                            <input type="hidden" id="hf-image" name="image" placeholder="Masukkan image" class="form-control" value="default.jpg">
                                                    <input type="hidden" id="hf-is_active" name="is_active"  class="form-control" value="1">

                        </div>

                    </div>

                    <div class="modal-footer">
                       <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_pegawai']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
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
                             <input type="hidden" class="form-control" id="id_pegawai" name="id_pegawai"
                              value="<?= $row['id_pegawai'] ?>">
                              
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="nip" value="<?= $row['nip'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?= $row['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat']  ?>" required>
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
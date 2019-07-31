
    
                
            <!-- HEADER DESKTOP-->
            
            <!-- MAIN CONTENT-->
   <form action="tambah_pegawai" method="post" class="form-horizontal">
              <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                       Tambah <strong>Pegawai</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-nama_paket" class=" form-control-label">NIP</label>

                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-no_sk" name="username" placeholder="Masukkan NIP" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-no_sk" class=" form-control-label">Nama</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-no_sk" name="nama" placeholder="Masukkan Nama" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-nama_paket" class=" form-control-label">Email</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="email" id="hf-nama_paket" name="email" placeholder="Masukkan Email" class="form-control">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-pemenang" class=" form-control-label">Password</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="password" id="hf-passowrd" name="password" placeholder="Masukkan Passowrd" class="form-control">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-hps" class=" form-control-label">Level</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="hf-hps" name="role_id" placeholder="Masukkan Level" class="form-control">
                                                        <option value="2">Pegawai</option>
                                                        <option value="1">Admin</option>
                                                        
                                                       </select>
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-hps" class=" form-control-label">Bidang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="hf-hps" name="id_bidang" placeholder="Masukkan HPS" class="form-control">
                                                        <?php foreach ($data_pegawai as $row) : ?>
                                                        <option value="<?= $row['id_bidang'] ?>"><?= $row['bidang'] ?></option>
                                                        <?php endforeach ?>
                                                    
                                                        
                                                        
                                                       </select>
                                                       
                                                </div>
                                            </div>
                                              <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-hps" class=" form-control-label">Jabatan</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <select type="text" id="hf-hps" name="jabatan" placeholder="Masukkan jabatan" class="form-control">
                                                        <?php foreach ($data_jabatan as $row) : ?>
                                                        <option value="<?= $row['id_jabatan'] ?>"><?= $row['jabatan'] ?></option>
                                                        <?php endforeach ?>
                                                    
                                                        
                                                        
                                                       </select>
                                                       
                                                </div>
                                            </div>
                                                <input type="hidden" id="hf-image" name="image" placeholder="Masukkan image" class="form-control" value="default.jpg">
                                                    <input type="hidden" id="hf-is_active" name="is_active"  class="form-control" value="1">
                                                
                                            
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            <i class="fa fa-plus-circle"></i> Tambah
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                           </div></form>
                
                         

                            
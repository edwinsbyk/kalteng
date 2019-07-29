            
            <form action="tambah_pemenang_lelang" method="post" class="form-horizontal">
              <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                       Tambah <strong>Pemenang Lelang</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        
                                            
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-nama_paket" class=" form-control-label">Nama Paket</label>

                                                </div>

                                                <div class="col-12 col-md-9">
                                                    <select class="form-control" name="id_pengumuman_lelang">
                                     <?php foreach ($data_pengumuman as $row) : ?>
                                                    <option value="<?= $row['id_pengumuman_lelang'] ?>"><?= $row['no_sk']; ?></option>
                                           <?php endforeach ; ?>
                                                    </select>
                                                     
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-pemenang" class=" form-control-label">Pemenang</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-pemenang" name="pemenang" placeholder="Masukkan Pemenang" class="form-control">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-hps" class=" form-control-label">HPS (Rp) </label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-hps" name="hps" placeholder="Masukkan HPS" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            
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
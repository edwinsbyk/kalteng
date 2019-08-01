<?php
foreach ($datajabatan as $row) : ?>
    <div class="modal fade" id="modal_detail<?= $row['id_pegawai']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Lihat Data Pegawai</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="">
                    <div class="modal-body">
                      <div class="form-group">
                            <label class="col-form-label"></label>
                            
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">NIP :</label>
                             <input type="hidden" class="form-control" id="id_pegawai" name="id_pegawai"
                              value="<?= $row['id_pegawai'] ?>">
                            <input type="text" class="form-control" id="nip" name="nip" placeholder="nip" value="<?= $row['nip'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" value="<?= $row['nama'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat']  ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Alamat kantor</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat']  ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jabatan :</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="" value="<?= $row['jabatan'] ?>" disabled>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-info" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
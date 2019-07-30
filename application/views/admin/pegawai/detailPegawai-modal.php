<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
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
                              <img  src="<?= base_url('assets/'); ?>img/<?= $row['image'] ?>" alt="logo">
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">NIP :</label>
                             <input type="hidden" class="form-control" id="id" name="id"
                              value="<?= $row['id'] ?>">
                            <input type="text" class="form-control" id="username" name="username" placeholder="kegiatan" value="<?= $row['username'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?= $row['name'] ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Email :</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="email" value="<?= $row['email']  ?>" disabled>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Jabatan :</label>
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="" value="<?= $row['jabatan'] ?>" disabled>
                        </div><div class="form-group">
                            <label class="col-form-label">Bidang :</label>
                            <input type="text" class="form-control" id="bidang" name="bidang" placeholder="bidang" value="<?= $row['bidang'] ?>" disabled>
                        </div><div class="form-group">
                            <label class="col-form-label">Alamat Kantor:</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $row['alamat_kantor'] ?>" disabled>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
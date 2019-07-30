<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_bidang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataBidang') ?>">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label class="col-form-label">Nama Bidang :</label>
                             <input type="hidden" class="form-control" id="id_bidang" name="id_bidang"
                              value="<?= $row['id_bidang'] ?>">
                            <input type="text" class="form-control" id="bidang" name="bidang" placeholder="bidang" value="<?= $row['bidang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Alamat Kantor :</label>
                            <input type="text" class="form-control" id="alamat_kantor" name="alamat_kantor" placeholder="alamat_kantor" value="<?= $row['alamat_kantor'] ?>" required>
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
<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_jabatan']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataJabatan') ?>">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label class="col-form-label">Nama Bidang :</label>
                             <input type="hidden" class="form-control" id="id_jabatan" name="id_jabatan"
                              value="<?= $row['id_jabatan'] ?>">
                            <input type="text" class="form-control" id="jabatan" name="jabatan" placeholder="jabatan" value="<?= $row['jabatan'] ?>" required>
                        </div>
                       

                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</form>
</div>
</div>
</div>

<?php endforeach; ?>
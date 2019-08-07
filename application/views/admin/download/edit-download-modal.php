<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_file']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/edit_file') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Keterangan :</label>
                             <input type="hidden" class="form-control" name="id_file" value="<?= $row['id_file'] ?>">
                            <input type="text" class="form-control" name="keterangan" placeholder="Keterangan" value="<?= $row['keterangan'] ?>" required>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-3">Public File: </div>
                                <div class="">
                                    <label class="switch switch-text switch-primary switch-pill">
                                    <input type="checkbox" class="switch-input" name="public_mode" <?= $row["publik"] ? "checked" : "" ?>>
                                    <span data-on="ON" size="lg" data-off="OFF" class="switch-label"></span>
                                    <span class="switch-handle"></span>
                                    </label>
                                </div>
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
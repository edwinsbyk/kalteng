<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_rup']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataRup') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Kegiatan:</label>
                             <input type="hidden" class="form-control" id="id_rup" name="id_rup"
                              value="<?= $row['id_rup'] ?>">
                            <input type="text" class="form-control" id="kegiatan" name="kegiatan" placeholder="kegiatan" value="<?= $row['kegiatan'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Lokasi:</label>
                            <input type="text" class="form-control" id="lokasi" name="lokasi" placeholder="lokasi" value="<?= $row['lokasi'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Pagu:</label>
                            <input type="text" class="form-control" id="pagu" name="pagu" placeholder="pagu" value="<?php echo number_format($row['pagu'])  ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Metode:</label>
                            <input type="text" class="form-control" id="metode" name="metode" placeholder="metode" value="<?= $row['metode'] ?>" required>
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
<?php
foreach ($data as $d) : ?>
    <div class="modal fade" id="modal_edit<?= $d['id_danau']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataPotensiDanau') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $d['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kota" placeholder="Kota" value="<?= $d['kota'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="luas" placeholder="luas" value="<?= $d['luas'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kedalaman" placeholder="Kedalaman" value="<?= $d['kedalaman'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas" value="<?= $d['kapasitas'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="penduduk" placeholder="Penduduk" value="<?= $d['penduduk'] ?>" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="irigasi" placeholder="Irigasi" value="<?= $d['irigasi'] ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $d['id_danau']; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
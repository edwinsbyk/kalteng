<?php
foreach ($data as $d) : ?>
    <div class="modal fade" id="modal_edit<?= $d['id_rawa']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataPotensiRawa') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" name="nama" placeholder="Nama" value="<?= $d['nama'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="jenis" placeholder="Jenis" value="<?= $d['jenis'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="kota" placeholder="Kota / Kabupaten" value="<?= $d['kota'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="sudah_kembang" placeholder="Sudah Berkembang" value="<?= $d['sudah_kembang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="belum_kembang" placeholder="Belum Berkembang" value="<?= $d['belum_kembang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="total" placeholder="Total" value="<?= $d['total'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="tahun" placeholder="Tahun" value="<?= $d['tahun'] ?>" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $d['id_rawa']; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
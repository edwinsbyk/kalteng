<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_pengumuman_lelang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataPengumuman') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">Tanggal:</label>
                             <input type="hidden" class="form-control" id="id_pengumuman_lelang" name="id_pengumuman_lelang"
                              value="<?= $row['id_pengumuman_lelang'] ?>">
                            <input type="text" class="form-control" id="tanggal" name="tanggal" placeholder="tanggal" value="<?= $row['tanggal'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Batas Waktu:</label>
                            <input type="text" class="form-control" id="batas" name="batas" placeholder="batas" value="<?= $row['batas'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">No. SK:</label>
                            <input type="text" class="form-control" id="no_sk" name="no_sk" placeholder="no_sk" value="<?= $row['no_sk'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama Paket:</label>
                            <input type="text" class="form-control" id="nama_paket" name="nama_paket" placeholder="nama_paket" value="<?= $row['nama_paket'] ?>" required>
                        </div>
                         <div class="form-group">
                            <label class="col-form-label">Pagu (Rp):</label>
                            <input type="text" class="form-control" id="pagu" name="pagu" placeholder="pagu" value="<?php echo number_format($row['pagu'])  ?>" required>
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
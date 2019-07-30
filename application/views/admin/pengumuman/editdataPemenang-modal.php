<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id_pemenang_lelang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataPemenang') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-form-label">No. Sk:</label>
                             <input type="hidden" class="form-control" id="id_pemenang_lelang" name="id_pemenang_lelang"
                              value="<?= $row['id_pemenang_lelang'] ?>">
                            <select class="form-control" name="id_pengumuman_lelang">
                                     <?php foreach ($data_pengumuman as $data) : ?>
                                                    <option value="<?= $data['id_pengumuman_lelang'] ?>"><?= $data['no_sk']; ?></option>
                                           <?php endforeach ; ?>
                                                    </select>
                        </div>
                        
                        <div class="form-group">
                            <label class="col-form-label">Pemenang:</label>
                            <input type="text" class="form-control" id="pemenang" name="pemenang" placeholder="" value="<?= $row['pemenang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">HPS (Rp) :</label>
                            <input type="text" class="form-control" id="hps" name="hps" placeholder="hps" value="<?php echo number_format($row['hps']) ?>" required>
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
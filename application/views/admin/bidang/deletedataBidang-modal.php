<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_delete<?= $row['id_bidang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/deletedataBidang') ?>">
                    <div class="modal-body">
                        HAPUS  <?= $row['bidang'] ?> ?
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id_bidang" value="<?= $row['id_bidang']; ?>">

                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
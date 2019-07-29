<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_delete<?= $row['id_pemenang_lelang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/deletedataPemenang') ?>">
                    <div class="modal-body">
                        Hapus data Pemenang : ( <?= $row['pemenang'] ?> )
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $row['id_pemenang_lelang']; ?>">

                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
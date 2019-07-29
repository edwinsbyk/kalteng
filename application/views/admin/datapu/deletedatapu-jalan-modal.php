<?php
foreach ($data as $d) : ?>
    <div class="modal fade" id="modal_delete<?= $d['id_jalan']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/deletedataJalan') ?>">
                    <div class="modal-body">
                        Hapus data <?= $d['ruas'] ?>?
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $d['id_jalan']; ?>">

                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
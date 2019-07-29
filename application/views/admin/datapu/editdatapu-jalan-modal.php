<?php
foreach ($data as $d) : ?>
    <div class="modal fade" id="modal_edit<?= $d['id_jalan']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editdataJalan') ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="ruas" placeholder="Nama" value="<?= $d['ruas'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="kota" placeholder="Kota" value="<?= $d['kota'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="stat" placeholder="Status" value="<?= $d['stat'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="panjang" placeholder="Panjang (Km)" value="<?= $d['panjang'] ?>" required>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="lebar" placeholder="Lebar (m)" value="<?= $d['lebar'] ?>" required>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $d['id_jalan']; ?>">
                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
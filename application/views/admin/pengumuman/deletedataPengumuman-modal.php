<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_delete<?= $row['id_pengumuman_lelang']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Hapus Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/deletedataPengumuman') ?>">
                    <div class="modal-body ">
                            <div class="row">
              <div class="col">
               
              </div>
              <div class="col">
                <section class="">
                  <div class=" text-secondary">  <i class="fas fa-exclamation-circle fa-8x" style="color: black;" ></i></div>
                </section>
              </div>
              <div class="col">
               
              </div>
            </div>
                        <br>

                        <i text-align='center'>Anda yakin ingin menghapus Data ?</i>

                    </div>

                    <div class="modal-footer">
                        <input type="hidden" name="id" value="<?= $row['id_pengumuman_lelang']; ?>">

                        <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                        <button type="submit" class="btn btn-info">Hapus</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php endforeach; ?>
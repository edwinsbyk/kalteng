<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_detail<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Ganti Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label class="col-form-label">Password Baru</label>
                             <input type="hidden" class="form-control" id="id" name="id"
                              value="<?= $row['id'] ?>">
                            <input type="text" class="form-control" id="password" name="password" placeholder="Maukkan Pssword" required>
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
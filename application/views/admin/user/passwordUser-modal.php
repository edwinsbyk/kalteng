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
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editPassword') ?>">
                    <div class="modal-body">
                    
                        <div class="form-group">
                            <label class="col-form-label">Password Baru</label>
                             
                            <input type="text" class="form-control" id="password" name="password" placeholder="Maukkan Pssword" required>
                        </div>
                       
                              <input type="hidden" class="form-control" id="id" name="id"
                              value="<?= $row['id'] ?>">
                              <input type="hidden" class="form-control" id="name" name="name"
                              value="<?= $row['name'] ?>">
                              <input type="hidden" class="form-control" id="email" name="email"
                              value="<?= $row['email'] ?>">
                              <input type="hidden" class="form-control" id="image" name="image"
                              value="<?= $row['image'] ?>">
                              <input type="hidden" class="form-control" id="role_id" name="role_id"
                              value="<?= $row['role_id'] ?>">
                              <input type="hidden" class="form-control" id="is_active" name="is_active"
                              value="<?= $row['is_active'] ?>">
                              <input type="hidden" class="form-control" id="date_created" name="date_created"
                              value="<?= $row['date_created'] ?>">
                        

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
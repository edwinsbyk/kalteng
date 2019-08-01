<?php
foreach ($data as $row) : ?>
    <div class="modal fade" id="modal_edit<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newSubMenuModalLabel">Lihat Data User</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form class="form-horizontal" method="post" action="<?= base_url('admin/editUser') ?>">
                    <div class="modal-body">
                      
                        <div class="form-group">
                            <label class="col-form-label">Email</label>
                             <input type="hidden" class="form-control" id="id" name="id"
                              value="<?= $row['id'] ?>">
                              <input type="hidden" id="hf-password" name="password"  class="form-control" value="<?= $row['password'] ?>">
                            <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?= $row['email'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label class="col-form-label">Nama :</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?= $row['name'] ?>" required>
                        </div>
                      
                        <div class="form-group">
                            <label class="col-form-label">Level</label>
                                                                                <select type="text" id="hf-hps" name="role_id" placeholder="Masukkan Level" class="form-control">
                                                        
                                                        <option value="1">Admin</option>
                                                         <option value="2">Operator</option>
                                                    
                                                    
                                                        
                                                        
                                                       </select>
                        
                                                    <input type="hidden" id="hf-is_active" name="is_active"  class="form-control" value="1">
                                                    <input type="hidden" id="hf-image" name="image"  class="form-control" value="<?= $row['image']?>">
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
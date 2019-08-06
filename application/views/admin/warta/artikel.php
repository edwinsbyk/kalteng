<style type="text/css">
    .tabb {
        background-color: white;
        border-radius: 4px;
    }
</style>
<div class="main-content">
        <div class="container-fluid">
            
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Artikel</h4>
                </div>
                <div class="card-body">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Artikel</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/warta/table_artikel') ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php $this->load->view('admin/warta/tambah_artikel') ?>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="previewModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xxlg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="judul-artikel">Preview Artikel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <div id="isi-artikel"></div>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Artikel</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
            <?php echo form_open_multipart(base_url("admin/edit_artikel"));?>
                <div class="form-horizontal card">
                    <div class="card-body card-block borders">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label" required>Judul Artikel</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" name="edit-judul" required placeholder="Judul artikel disini" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Link Gambar</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="edit-image" placeholder="Link Gambar" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Tanggal & Waktu</label>
                            </div>
                            <div class="col-12 col-md-9">
                            <input type='text' class="form-control" required disabled name="edit-tanggal"/>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label">Dibuat oleh</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input type="text" name="edit-dibuat-oleh" disabled class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="disabled-input" class=" form-control-label">Isi Artikel</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea type="textarea" data-directory="<?= base_url("files/artikel_img_acceptor") ?>" name="edit-isi" id="edit-isi-artikel" rows="10" class="form-control tinyarea"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="edit-id_artikel">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                        <button type="reset" class="btn btn-danger btn-sm">
                            <i class="fa fa-ban"></i> Reset
                        </button>
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
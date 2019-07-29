<div class="main-content">
    <div class="section__content--p30">
        <div class="default-tab">
            <nav>
                <div class="nav nav-tabs mb-2" id="myTab" role="tablist">
                        <a class="nav-item nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Berita</a>
                        <a class="nav-item nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Berita</a>
                </div>
                </nav>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <?php $this->load->view('admin/warta/tableberita') ?>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <?php $this->load->view('admin/warta/tambahberita') ?>
                    </div>
                </div>
        </div>
    </div>
</div>

<div id="previewModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xxlg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Preview Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <h1>WKWK</h1>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <form action="<?= base_url("admin/tambahBerita") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul Berita</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="text-input" name="judul-berita" placeholder="Judul Berita" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="file-input" class=" form-control-label">Thumbnail Image</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="file" id="file-input" name="image" class="form-control-file">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tanggal</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="date" id="date-berita" name="tanggal" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="isi-berita" id="textarea-input" class="form-control"></textarea>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
                    <h4>Berita</h4>
                </div>
                <div class="card-body">
            <nav>
                <div class="nav nav-tabs mb-4" id="myTab" role="tablist">
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
              <h5 class="modal-title" id="judul-berita">Preview Berita</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <h5 id="judul-berita" class=""></h5>
                <div id="isi-berita"></div>
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
                <form action="<?= base_url("admin/edit_berita") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="row form-group">
                        <div class="col col-md-3">
                        <label for="text-input" class=" form-control-label">Judul Berita</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="edit_judul_berita" name="judul-berita" placeholder="Judul Berita" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Link Gambar</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" id="edit_link_gambar" name="image" placeholder="Link Gambar" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tanggal</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text" class="datepicker" id="edit_tanggal_berita" name="tanggal" class="form-control">
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <textarea name="isi-berita" id="edit_isi_berita" class="form-control tinyarea"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fa fa-dot-circle-o"></i> Submit
                        </button>
                    </div>
                    <input type="hidden" name="edit_idberita">
                </form>
            </div>
        </div>
    </div>
</div>

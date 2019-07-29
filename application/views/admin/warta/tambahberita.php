            <!-- MAIN CONTENT-->

<script>tinymce.init({selector:'textarea'});</script>

<div class="col-lg-12">
    <div class="card-header">
        <strong>Tambah</strong> Berita
    </div>
    <div class="card-body card-block" style="background-color: white">
        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                    <label for="textarea-input" class=" form-control-label">Textarea</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="isi-berita" id="textarea-input" rows="9" placeholder="Content..." class="form-control"></textarea>
                </div>
            </div>

            </form>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
    </div>
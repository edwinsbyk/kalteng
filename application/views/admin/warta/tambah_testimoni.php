<div class="col-lg-12">
    <form action="<?= base_url("admin/tambah_testimoni") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block borders">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label" required>Nama</label>
                </div>
                <div class="col-12 col-md-9">
                    <input required type="text" name="nama" required placeholder="Nama" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Email</label>
                </div>
                <div class="col-12 col-md-9">
                    <input required type="text" id="text-input" name="email" placeholder="Email" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Isi Testimoni</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="textarea" name="isi" class="form-control tinyarea"></textarea>
                </div>
            </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary btn-sm">
                <i class="fa fa-dot-circle-o"></i> Submit
            </button>
            <button type="reset" class="btn btn-danger btn-sm">
                <i class="fa fa-ban"></i> Reset
            </button>
        </div>
    </form>
   
</div>
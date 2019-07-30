<div class="col-lg-12">
    <form action="<?= base_url("admin/add_article") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block borders">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label" required>Judul Artikel</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="judul_artikel" required placeholder="Judul artikel disini" class="form-control">
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal & Waktu</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <input type='text' class="form-control" name="tanggal" placeholder="<?= date("Y/m/d H:i:s") ?>" required disabled/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Dibuat oleh</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" name="dibuat_oleh" disabled value="Syahid Nurrohim" class="form-control">
                </div>
            </div>


            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Isi Artikel</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="textarea" name="isi_artikel" class="form-control tinyarea"></textarea>
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
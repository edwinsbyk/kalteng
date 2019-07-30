            <!-- MAIN CONTENT-->
<div class="col-lg-12">
    <form action="<?= base_url("admin/add_article") ?>" method="post" enctype="multipart/form-data" class="form-horizontal card">
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
                    <label for="disabled-input" class=" form-control-label">Isi Artikel</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="textarea" name="isi_artikel" rows="10" placeholder="Isi artikel disini" class="form-control"></textarea>
                </div>
            </div>
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label">Tanggal & Waktu</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type='text' class="form-control" id='datepicker' required name="tanggal_pembuatan"/>
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
    <script>
        document.getElementById("tanggal_pembuatan").placeholder = (new Date()).toLocaleDateString("id", {
            timeZone: "Asia/Jakarta",
            weekday: 'long', 
            year: 'numeric', 
            month: 'long', 
            day: 'numeric',
            hour: 'numeric', 
            minute: 'numeric',
        });
    </script>
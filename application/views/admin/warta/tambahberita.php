<div class="col-lg-12">

    <div class="card-body card-block" style="background-color: white">
        <form action="<?php echo base_url().'admin/tambah_berita' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
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
                    <label for="text-input" class=" form-control-label">Link Gambar</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="image" placeholder="Link Gambar" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <input type='text' class="form-control" name="tanggal" placeholder="<?= date("Y/m/d H:i:s") ?>" required disabled/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Dibuat oleh</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <input type='text' class="form-control" name="tanggal" placeholder="Syahid Nurrohim" required disabled/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="isi-berita" id="textarea-input" class="form-control tinyarea"></textarea>
                </div>
            </div>

            <div class="card-footer">
            <button type="submit" name="sbmt" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </form>
    </div>
</div>
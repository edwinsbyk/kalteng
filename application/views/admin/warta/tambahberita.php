            <!-- MAIN CONTENT-->
<script src="<?= base_url("assets/plugin/tinymce/tinymce.min.js") ?>"></script>

<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  plugins: 'preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
  toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
});
</script>

<div class="col-lg-12">
    <div class="card-header">
        <strong>Tambah</strong> Berita
    </div>
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

            <div class="card-footer">
            <button type="submit" name="sbmt" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit
            </button>
        </form>
    </div>
</div>
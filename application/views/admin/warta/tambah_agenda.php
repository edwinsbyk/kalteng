<div class="col-lg-12">
    <form action="<?= base_url("admin/tambah_agenda") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
        <div class="card-body card-block borders">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label class=" form-control-label" required>Judul Agenda</label>
                </div>
                <div class="col-12 col-md-9">
                    <input required type="text" name="judul_agenda" required placeholder="Judul agenda disini" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Link Gambar</label>
                </div>
                <div class="col-12 col-md-9">
                    <input required type="text" id="text-input" name="image" placeholder="Link Gambar" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal & Waktu Mulai</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <div class="input-group date" id="dtp_tgl_mulai" data-target-input="nearest">
                        <input required type="text" name="tanggal_mulai" class="form-control datetimepicker-input" data-target="#dtp_tgl_mulai" placeholder="Tanggal & Waktu Mulai" required/>
                        <div class="input-group-append" data-target="#dtp_tgl_mulai" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <!-- <input type='text' class="form-control datetimepicker" name="tanggal_mulai" required/> -->
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal & Waktu Selesai</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <div class="input-group date" id="dtp_tgl_selesai" data-target-input="nearest">
                            <input required type="text" name="tanggal_selesai" class="form-control datetimepicker-input" data-target="#dtp_tgl_selesai" placeholder="Tanggal & Waktu Selesai" required/>
                            <div class="input-group-append" data-target="#dtp_tgl_selesai" data-toggle="datetimepicker">
                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                            </div>
                    </div>
                    <!-- <input type='date' class="form-control datepicker" name="tanggal_selesai" required/> -->
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
                    <label for="textarea-input" class=" form-control-label">Isi Agenda</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea type="textarea" name="isi_agenda" class="form-control tinyarea"></textarea>
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

<script type="text/javascript">
    $(function () {
        $('#dtp_tgl_mulai').datetimepicker(
            {
                format: 'D/M/Y HH:mm'
            }
        );
        $('#dtp_tgl_selesai').datetimepicker(
            {
                useCurrent: false,
                format: 'D/M/Y HH:mm'
            }
        );

        $("#dtp_tgl_mulai").on("change.datetimepicker", function (e) {
            $('#dtp_tgl_selesai').datetimepicker('minDate', e.date);
        });
        
        $("#dtp_tgl_selesai").on("change.datetimepicker", function (e) {
            $('#dtp_tgl_mulai').datetimepicker('maxDate', e.date);
        });
    });
</script>
<div class="main-content">
        <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Agenda</h4>
                </div>
                <div class="card-body">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel agenda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah agenda</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/warta/table_agenda') ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php $this->load->view('admin/warta/tambah_agenda') ?>
                </div>
            </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="editModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-xlg">
        <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit Agenda</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body" style="overflow: auto;">
                <form action="<?= base_url("admin/edit_agenda") ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                    <div class="card-body card-block borders">
                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label class=" form-control-label" required>Judul Agenda</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" name="edit_judul_agenda" required placeholder="Judul agenda disini" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Link Gambar</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <input required type="text" id="text-input" name="edit_image" placeholder="Link Gambar" class="form-control">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label">Tanggal & Waktu Mulai</label>
                            </div>
                            <div class="col-12 col-md-9 date" >
                                <div class="input-group date" id="edit_dtp_tgl_mulai" data-target-input="nearest">
                                    <input required type="text" name="edit_dtp_tgl_mulai" class="form-control datetimepicker-input" data-target="#edit_dtp_tgl_mulai" placeholder="Tanggal & Waktu Mulai" required/>
                                    <div class="input-group-append" data-target="#edit_dtp_tgl_mulai" data-toggle="datetimepicker">
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
                                <div class="input-group date" id="edit_dtp_tgl_selesai" data-target-input="nearest">
                                        <input required type="text" name="edit_dtp_tgl_selesai" class="form-control datetimepicker-input" data-target="#edit_dtp_tgl_selesai" placeholder="Tanggal & Waktu Selesai" required/>
                                        <div class="input-group-append" data-target="#edit_dtp_tgl_selesai" data-toggle="datetimepicker">
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
                                <input type="text" name="edit_dibuat_oleh" disabled value="Syahid Nurrohim" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                            <div class="col col-md-3">
                                <label for="textarea-input" class=" form-control-label">Isi Agenda</label>
                            </div>
                            <div class="col-12 col-md-9">
                                <textarea type="textarea" name="edit_isi_agenda" class="form-control tinyarea"></textarea>
                            </div>
                        </div>

                        <input type="hidden" name="edit_id_agenda">
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
        </div>
    </div>
</div>

<script type="text/javascript">
    $(function () {
        $('#edit_dtp_tgl_mulai').datetimepicker(
            {
                format: 'D/M/Y HH:mm'
            }
        );
        $('#edit_dtp_tgl_selesai').datetimepicker(
            {
                useCurrent: false,
                format: 'D/M/Y HH:mm'
            }
        );

        $("#edit_dtp_tgl_mulai").on("change.datetimepicker", function (e) {
            $('#edit_dtp_tgl_selesai').datetimepicker('minDate', e.date);
        });
        
        $("#edit_dtp_tgl_selesai").on("change.datetimepicker", function (e) {
            $('#edit_dtp_tgl_mulai').datetimepicker('maxDate', e.date);
        });
    });
</script>
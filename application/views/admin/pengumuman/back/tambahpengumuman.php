
    
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-4.7/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-4.7/css/bootstrap-datetimepicker.css" rel="stylesheet" media="all">
    
    
                
            <!-- HEADER DESKTOP-->
            <br><br><br><br>
            <!-- MAIN CONTENT-->
            <form method="post" action="#">
              <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                       Tambah <strong>Pengumuman Lelang</strong>
                                    </div>
                                    <div class="card-body card-block">
                                        <form action="" method="post" class="form-horizontal">
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-tanggal" class=" form-control-label">Tanggal</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="hf-tanggal" name="tanggal" placeholder="Masukkan Kegiatan" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-batas" class=" form-control-label">Batas Waktu</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="date" id="hf-batas" name="batas" placeholder="Masukkan lokasi" class="form-control">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-no_sk" class=" form-control-label">No. SK</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-no_sk" name="no_sk" placeholder="Masukkan No. Sk" class="form-control">
                                                    
                                                </div>
                                            </div>
                                             <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-nama_paket" class=" form-control-label">Nama Paket</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-nama_paket" name="nama_paket" placeholder="Masukkan Nama Paket" class="form-control">
                                                    
                                                </div>
                                            </div>
                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="hf-pagu" class=" form-control-label">Pagu (Rp)</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                                                    <input type="text" id="hf-pagu" name="pagu" placeholder="Masukkan Pagu" class="form-control">
                                                    
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm" name="submit">
                                            <i class="fa fa-plus-circle"></i> Tambah
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>
                            </br>

    <!-- Jquery JS-->

    <!-- Main JS-->
    <script src="<?= base_url('assets/admin/'); ?>js/main.js"></script>
     <script type="text/javascript" src="<?= base_url('assets/admin/'); ?>js/bootstrap-datetimepicker.min.js"></script>
      <script type="text/javascript" src="<?= base_url('assets/admin/'); ?>js/bootstrap-datetimepicker.js"></script>
      <script type="text/javascript" src="<?= base_url('assets/admin/'); ?>js/locales/bootstrap-datetimepicker.id.js"></script>
       <script type="text/javascript" src="<?= base_url('assets/admin/'); ?>jquery/jquery-1.8.3.min.js"></script>
       <script type="text/javascript">
 $('.form_date').datetimepicker({
        language:  'id',
        weekStart: 1,
        todayBtn:  1,
  autoclose: 1,
  todayHighlight: 1,
  startView: 2,
  minView: 2,
  forceParse: 0
    });

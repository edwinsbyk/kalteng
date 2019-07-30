            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <form class="form-horizontal" method="post" action="<?= base_url('admin/tambahdataPotensiRawa') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                            <div class=" form-group">
                                <input type="text" class="form-control" name="jenis" placeholder="Jenis" required>
                            </div>
                            <div class=" form-group">
                                <input type="text" class="form-control" name="kota" placeholder="Kota / Kabupaten" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="sudah_kembang" placeholder="Sudah Berkembang" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="belum_kembang" placeholder="Belum Berkembang" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="total" placeholder="Total" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="tahun" placeholder="Tahun" required>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </form>
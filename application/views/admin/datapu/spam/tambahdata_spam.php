            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <form class="form-horizontal" method="post" action="<?= base_url('admin/tambahdataSpam') ?>">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kota" placeholder="Kota" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="kapasitas" placeholder="Kapasitas" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="pelayanan" placeholder="Pelayanan" required>
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
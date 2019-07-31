            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <form action="<?= base_url('admin/tambahdataPotensiDanau') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="nama" placeholder="Nama" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="kota" placeholder="Kota" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="luas" placeholder="Luas" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="kedalaman" placeholder="Kedalaman" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="kapasitas" placeholder="Kapasitas" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="penduduk" placeholder="Penduduk" class="form-control" required>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="irigasi" placeholder="Irigasi" class="form-control" required>
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
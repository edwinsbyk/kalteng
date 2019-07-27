            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <form action="<?= base_url('admin/tambahdataJalan') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="ruas" placeholder="Ruas" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="kota" placeholder="Kota / Kabupaten" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="stat" placeholder="Status" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="panjang" placeholder="Panjang (Km)" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-12 col-md">
                                <input type="text" id="text-input" name="lebar" placeholder="Lebar (m)" class="form-control">
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
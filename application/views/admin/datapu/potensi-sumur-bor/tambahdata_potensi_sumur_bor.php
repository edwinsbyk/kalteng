            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <form action="<?= base_url('admin/tambahdataPotensiSumurBor') ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="modal-body">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="nama" placeholder="Nama" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="kota" placeholder="Kota" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="swl" placeholder="SWL" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="debit" placeholder="debit" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="airbaku" placeholder="Air Baku" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="irigasi" placeholder="Irigasi" required>
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
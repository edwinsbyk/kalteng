<div class="dashboard"></div>
<section class="statistic">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <?php foreach ($data as $key => $value) { ?>
                                <div class="col-md-6 col-xl-3 col-lg-4">
                                    <div class="dash-item">
                                        <h2 class="dash-number"><?= $data[$key] ?></h2>
                                        <span class="dash-desc"><?= $key ?></span>
                                        <div class="w-100 d-flex justify-content-between align-items-center mt-4 desc-foot">
                                            <span><small>Informasi <?= ucfirst($key) ?></small></span>
                                            <i class=" far fa-chart-bar"></i>
                                        </div>
                                        <div class="item-<?= $key ?> dash-icon">
                                            <i class="zmdi zmdi-account-o"></i>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END STATISTIC-->

            
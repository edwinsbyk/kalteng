<div class="dashboard">
<section class="statistic">
    <div class="section__content section__content--p30 vh-100">
        <div class="container-fluid">
            <div class="row">
                <?php 
                    foreach ($data as $key => $value) { if ($key === "tambahan") continue; ?>
                    <div class="col-md-6 col-lg-4">
                        <div class="dash-item mb-5">
                            <h2 class="dash-number"><?= $data[$key] ?></h2>
                            <span class="dash-desc"><?= $key != "size" ? $key : "disk terpakai" ?></span>
                            <div class="w-100 d-flex justify-content-between align-items-center mt-4 desc-foot">
                                <span><small>Informasi <?= ucfirst($key != "size" ? $key : "disk yang terpakai") ?></small></span>
                                <i class=" far fa-chart-bar"></i>
                            </div>
                            <div
                                style=" background: rgb(<?= $data["tambahan"][$key]["color"] ?>)!important;
                                        box-shadow: 0 4px 20px 0 rgba(<?= $data["tambahan"][$key]["color"] ?>,.14), 0 7px 10px -5px rgba(<?= $data["tambahan"][$key]["color"] ?>,.4)!important;" 
                                class="dash-icon">
                                <?= $data["tambahan"][$key]["icon"] ?>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
</div>
            <!-- END STATISTIC-->

            
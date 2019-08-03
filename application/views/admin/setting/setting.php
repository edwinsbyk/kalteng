<style>
    .nav-side {
        margin: 4px 0;  
        padding: .8rem 1.4rem;
    }
    .nav-side.active {
        box-shadow: 0 4px 20px 0 rgba(0, 0, 0,.14), 0 7px 10px -5px rgba(0, 123, 255,.4)!important;
    }
    .profile-img {
        width: 250px;
        object-fit: cover;
        height: 250px;
    }
</style>
<div class="main-content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Settings</h4>
                </div>
                <?= $this->session->flashdata("message") ?>
                <div class="card-body d-flex">
                <div class="nav flex-column nav-pills col-sm-2 border-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-side active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account"
                        aria-selected="true">Account Setting</a>
                    <a class="nav-link nav-side" id="v-pills-changep-tab" data-toggle="pill" href="#v-pills-changep" role="tab" aria-controls="v-pills-changep"
                        aria-selected="false">Change Password</a>
                </div>
                <div class="tab-content col-sm-10" id="myTabContent">
                    <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel" aria-labelledby="account-tab">
                        <?php echo form_open_multipart(base_url("admin/change_account_setting"));?>
                            <div class="col-sm-12 d-flex flex-wrap">
                            <div class="col-sm-8">
                                <h4 class="border-bottom mb-4 pb-3">Account setting</h4>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="setting-email" class="form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="setting-email" name="setting-email" placeholder="Input email" value="<?= $data["email"] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="setting-email" class="form-control-label">Hak Akses</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="setting-username" name="setting-username" value="<?= $data["role_id"] ?>" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="setting-email" class="form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="setting-nama" name="setting-nama" placeholder="Input nama" value="<?= $data["name"] ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="setting-password" class="form-control-label">Tanggal dibuat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static"><?= $data["date_created"] ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title mb-3">Foto Profile</strong>
                                    </div>
                                    <div class="card-body">
                                        <div class="mx-auto d-block">
                                            <img class="rounded-circle mx-auto d-block profile-img" src="<?= $data["image"] ?>" alt="Card image cap">
                                        </div>                                        
                                    </div>
                                    <div class="input-group">
                                        <input type="file" name="setting-image" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" value="Submit" type="submit">
                            </div>
                        </form>
                    </div>
                    <div class="tab-pane col-sm-10 fade" id="v-pills-changep" role="tabpanel" aria-labelledby="changep-tab">
                        <form action="<?= base_url("admin/change_account_password") ?>" method="post" class="form-horizontal">
                            <h4 class="border-bottom mb-4 pb-3">Change Password</h4>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-oldpassword" class=" form-control-label">Old Passwod</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="hf-oldpassword" name="oldpassword" placeholder="Input old password" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">New Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" name="newpassword" placeholder="Input new password" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Repeat New Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" name="rnewpassword" placeholder="Repeat new password" class="form-control">
                                </div>
                            </div>
                            <input class="btn btn-primary" value="Submit" type="submit">
                            <input class="btn btn-danger" value="Reset" type="reset">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
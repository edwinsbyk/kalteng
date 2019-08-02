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
                <div class="card-body d-flex">
                <div class="nav flex-column nav-pills col-sm-2 border-right" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link nav-side active" id="v-pills-account-tab" data-toggle="pill" href="#v-pills-account" role="tab" aria-controls="v-pills-account"
                        aria-selected="true">Account Setting</a>
                    <a class="nav-link nav-side" id="v-pills-changep-tab" data-toggle="pill" href="#v-pills-changep" role="tab" aria-controls="v-pills-changep"
                        aria-selected="false">Change Password</a>
                </div>
                <div class="tab-content col-sm-10" id="myTabContent">
                    <div class="tab-pane fade show active" id="v-pills-account" role="tabpanel" aria-labelledby="account-tab">
                        <form action="" enctye="multipart/form-data" method="post" class="col-sm-12 d-flex form-horizontal flex-wrap">
                            <div class="col-sm-8">
                                <h4 class="border-bottom mb-4 pb-3">Account setting</h4>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-email" class=" form-control-label">Email</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="email" id="hf-email" name="hf-email" placeholder="Input email" value="a@a.com" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-email" class=" form-control-label">Username</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hf-username" name="hf-username" value="porrosyhd" disabled class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-email" class=" form-control-label">Nama</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <input type="text" id="hf-nama" name="hf-nama" placeholder="Input nama" value="Syahid Nurrohim" class="form-control">
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col col-md-3">
                                        <label for="hf-password" class=" form-control-label">Tanggal dibuat</label>
                                    </div>
                                    <div class="col-12 col-md-9">
                                        <p class="form-control-static"><?= date("d M Y, H:i:s") ?></p>
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
                                            <img class="rounded-circle mx-auto d-block profile-img" src="https://images.pexels.com/photos/614810/pexels-photo-614810.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="Card image cap">
                                        </div>                                        
                                    </div>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01">
                                            <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input class="btn btn-primary" value="Submit" type="submit">
                        </form>
                    </div>
                    <div class="tab-pane col-sm-10 fade" id="v-pills-changep" role="tabpanel" aria-labelledby="changep-tab">
                        <form action="" method="post" class="form-horizontal">
                            <h4 class="border-bottom mb-4 pb-3">Change Password</h4>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-oldpassword" class=" form-control-label">Old Passwod</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="hf-oldpassword" name="hf-oldpassword" placeholder="Input old password" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="hf-password" class=" form-control-label">New Password</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="password" id="hf-password" name="hf-password" placeholder="Input new password" class="form-control">
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
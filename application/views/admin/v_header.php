<header class="header-desktop2">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap2 justify-content-between">
                <div class="logo text-white d-block">
                    <h3 style="color: white;"><?= $title ?></h3>
                </div>
                
                <div class="header-button2">
                    <div class="header-button-item mr-0 js-sidebar-btn">
                        <i class="zmdi zmdi-menu"></i>
                    </div>

                    

                    <div class="setting-menu js-right-sidebar d-none d-lg-block">
                        
                    
                        <!-- <div class="account-dropdown__body"> -->
                        <div class="account2">
                            <div class="image img-cir img-120">
                                <img style="width: 100%; height: 100%;object-fit: cover;" src="<?= base_url("assets/admin/images/user_profile/") . $this->session->userdata("user_image") ?>" alt="<?= $this->session->userdata("user_name") ?>" />
                            </div>
                            <h4 class="name"><?= $this->session->userdata("user_name") ?></h4>
                            <span><small><?= $this->session->userdata("role_id") == 1 ? "Administrator" : "Operator" ?></small></span>
                        </div>
                            <!-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div> -->
                        <!-- </div> -->

                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="<?= base_url("admin/setting") ?>">
                                    <i class="zmdi zmdi-settings"></i>Setting</a>
                            </div>
                            <!-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-money-box"></i>Billing</a>
                                        </div> -->
                        </div>
                        <div class="account-dropdown__body">
                            <div class="account-dropdown__item">
                                <a href="<?= base_url("auth/logout") ?>">
                                    <i class="zmdi zmdi-globe"></i>Log out</a>
                            </div>
                            <!-- <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-pin"></i>Location</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-email"></i>Email</a>
                                        </div>
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-notifications"></i>Notifications</a>
                                        </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
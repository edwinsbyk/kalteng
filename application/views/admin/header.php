<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->

        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="<?= base_url('admin/index'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/pegawai'); ?>">
                                <i class="fas fa-users"></i>Pegawai</a>
                        </li>

                        <li>
                            <a href="<?= base_url('admin/bidang'); ?>">
                                <i class="fas fa-bars"></i>Bidang</a>
                        </li>


                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar"></i>Warta</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('admin/berita'); ?>">Berita</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/artikel'); ?>">Artikel</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/agenda'); ?>">Agenda</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/testimoni'); ?>">Testimoni</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>Pengumuman</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('admin/rup'); ?>">RUP</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pengumuman_lelang'); ?>">Pengumuman Lelang</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/pemenang_lelang'); ?>">Pemenang Lelang</a>
                                </li>

                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-edit"></i>Data PU</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="<?= base_url('admin/datapujalan'); ?>">Jalan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapujembatan'); ?>">Jembatan</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapuembung'); ?>">Embung</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapusumurbor'); ?>">Sumur Bor</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapublackspot'); ?>">Black Spot</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapuspam'); ?>">Spam</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapupotensidanau'); ?>">Potensi Danau</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapupotensirawa'); ?>">Potensi Rawa</a>
                                </li>
                                <li>
                                    <a href="<?= base_url('admin/datapupotensisumurbor'); ?>">Potensi Sumur Bor</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                    </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section_content section_content--p30 h-100">
                    <div class="container-fluid h-100">
                        <div class="header-wrap align-items-center h-100">
                            <form>
<!-- 
                                <div class="section_content section_content--p30 h-100">
                                    <div class="container-fluid h-100">
                                        <div class="header-wrap h-100 align-items-center"> -->
                                            <form class="form-header" action="" method="POST">
                                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                                <button class="au-btn--submit" type="submit">
                                                    <i class="zmdi zmdi-search"></i>
                                                </button>
                                            </form>
                                            <div class="header-button">
                                                <div class="noti-wrap">
                                                    <div class="noti__item js-item-menu">

                                                    </div>


                                                    <div class="account-wrap">
                                                        <div class="account-item clearfix js-item-menu">
                                                            <div class="image">
                                                                <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                            </div>
                                                            <div class="content">
                                                                <a class="js-acc-btn" href="#">john doe</a>
                                                            </div>
                                                            <div class="account-dropdown js-dropdown">
                                                                <div class="info clearfix">
                                                                    <div class="image">
                                                                        <a href="#">
                                                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                                        </a>
                                                                    </div>
                                                                    <div class="content">
                                                                        <h5 class="name">
                                                                            <a href="#">john doe</a>
                                                                        </h5>
                                                                        <span class="email">johndoe@example.com</span>
                                                                    </div>
                                                                </div>
                                                                <div class="account-dropdown__body">
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-account"></i>Account</a>
                                                                    </div>
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-settings"></i>Setting</a>
                                                                    </div>
                                                                    <div class="account-dropdown__item">
                                                                        <a href="#">
                                                                            <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                                    </div>
                                                                </div>
                                                                <div class="account-dropdown__footer">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <!-- </div>
                                                </div>
                                            </div> -->
                                        </div>
                                    </div>
            </header>
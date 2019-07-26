<aside class="menu-sidebar d-none d-lg-block" style="background-color: #2e2f2f">
            <div class="logo">
                <a href="#">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="list-sidebar-item">
                            <a href="<?= base_url('admin'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li class="list-sidebar-item">
                            <a href="<?= base_url('admin/pegawai'); ?>">
                                <i class="fas fa-users"></i>Pegawai</a>
                        </li>
                        <li class="list-sidebar-item">
                            <a href="<?= base_url('admin/pegawaibidang'); ?>">
                                <i class="fas fa-bars"></i>Bidang</a>
                        </li>
                    


                        <li class="has-sub list-sidebar-item">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-calendar"></i>Warta</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/berita'); ?>">Berita</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/artikel'); ?>">Artikel</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/agenda'); ?>">Agenda</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/testimoni'); ?>">Testimoni</a>
                                </li>
                            </ul>
                        </li>

                        <li class="has-sub list-sidebar-item">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-file"></i>Pengumuman</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/rup'); ?>">RUP</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/pengumuman_lelang'); ?>">Pengumuman Lelang</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/pemenang_lelang'); ?>">Pemenang Lelang</a>
                                </li>

                            </ul>
                        </li>
                        <li class=" has-sub list-sidebar-item">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-edit"></i>Data PU</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapujalan'); ?>">Jalan</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapujembatan'); ?>">Jembatan</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapuembung'); ?>">Embung</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapusumurbor'); ?>">Sumur Bor</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapublackspot'); ?>">Black Spot</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapuspam'); ?>">Spam</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapupotensidanau'); ?>">Potensi Danau</a>
                                </li>
                                <li class="list-sidebar-item">
                                    <a href="<?= base_url('admin/datapupotensirawa'); ?>">Potensi Rawa</a>
                                </li>
                                <li class="list-sidebar-item">
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

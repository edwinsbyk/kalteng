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


                <li class="active has-sub">
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

                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-file-text"></i>Pengumuman</a>
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
                <li class="active has-sub">
                    <a class="js-arrow" href="#">
                        <i class="fas fa-edit"></i>Data PU</a>
                    <ul class="list-unstyled navbar__sub-list js-sub-list">
                        <li>
                            <a href="<?= base_url('admin/jalan'); ?>">Jalan</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/jembatan'); ?>">Jembatan</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/embung'); ?>">Embung</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/sumurbor'); ?>">Sumur Bor</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/blackspot'); ?>">Black Spot</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/spam'); ?>">Spam</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/potensidanau'); ?>">Potensi Danau</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/potensirawa'); ?>">Potensi Rawa</a>
                        </li>
                        <li>
                            <a href="<?= base_url('admin/potensisumurbor'); ?>">Potensi Sumur Bor</a>
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
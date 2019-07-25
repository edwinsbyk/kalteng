<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
    <link href="<?= base_url('assets/admin/'); ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?= base_url('assets/admin/'); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?= base_url('assets/admin/'); ?>css/theme.css" rel="stylesheet" media="all">

</head>

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data PU Potensi Danau</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select2" name="property">
                                    <option selected="selected">All Properties</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select2" name="time">
                                    <option selected="selected">Today</option>
                                    <option value="">3 Days</option>
                                    <option value="">1 Week</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <button class="au-btn-filter">
                                <i class="zmdi zmdi-filter-list"></i>filters</button>
                        </div>
                        <div class="table-data__tool-right">
                            <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                <i class="zmdi zmdi-plus"></i>add item</button>
                            <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
                                <select class="js-select2" name="type">
                                    <option selected="selected">Export</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive m-b-40">
                        <table class="table table-borderless table-data3">
                            <thead>
                                <tr>
                                    <th class="bg-color-5" width="50">No</th>
                                    <th class="bg-color-5">Nama</th>
                                    <th class="bg-color-5">Kota/Kab.</th>
                                    <th class="bg-color-5">Luas<br />(Km<sup>2</sup>)</th>
                                    <th class="bg-color-5">Kedalaman<br />(m)</th>
                                    <th class="bg-color-5">Kapasitas<br />(m<sup>3</sup>)</th>
                                    <th class="bg-color-5">Penduduk<br />(jiwa)</th>
                                    <th class="bg-color-5">Ternak<br />(ekor)</th>
                                    <th class="bg-color-5">Irigasi<br />(Ha)</th>
                                </tr>
                            </thead>
                            <tbody>
                            <tr>
									<td align="center">1</td>
									<td align="">TAGE</td>
									<td align="center">PANIAI</td>
									<td align="center">17220</td>
									<td align="center">12</td>
									<td align="center">13</td>
									<td align="center">14</td>
									<td align="center">15</td>
									<td align="center">16</td>
								</tr>
								<tr>
									<td align="center">2</td>
									<td align="">NISA</td>
									<td align="center">WAROPEN</td>
									<td align="center">10300</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">3</td>
									<td align="">MUTAPO</td>
									<td align="center">NABIRE</td>
									<td align="center">12000</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">4</td>
									<td align="">AREHBOLD</td>
									<td align="center">TOLIKARA</td>
									<td align="center">1579</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">5</td>
									<td align="">KULUMBRU</td>
									<td align="center">PUNCAK JAYA</td>
									<td align="center">4709</td>
									<td align="center">12</td>
									<td align="center">1234</td>
									<td align="center">122</td>
									<td align="center">45</td>
									<td align="center">5</td>
								</tr>
								<tr>
									<td align="center">6</td>
									<td align="">SENTANI</td>
									<td align="center">JAYAPURA</td>
									<td align="center">93960</td>
									<td align="center">24.5</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">7</td>
									<td align="">TAHUN</td>
									<td align="center">SARMI</td>
									<td align="center">4568</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">8</td>
									<td align="">PIAMFROM</td>
									<td align="center">SARMI</td>
									<td align="center">2384</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">9</td>
									<td align="">BOMBERAI</td>
									<td align="center">SARMI</td>
									<td align="center">133500</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">10</td>
									<td align="">JAMUR</td>
									<td align="center">NABIRE</td>
									<td align="center">32810</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">11</td>
									<td align="">NAMAMI</td>
									<td align="center">NABIRE</td>
									<td align="center">8480</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">12</td>
									<td align="">TIGI</td>
									<td align="center">PANIAI</td>
									<td align="center">32740</td>
									<td align="center">150</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">13</td>
									<td align="">PANIAI</td>
									<td align="center">PANIAI</td>
									<td align="center">1513000</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">14</td>
									<td align="">HABBEMA</td>
									<td align="center">JAYAWIJAYA</td>
									<td align="center">2461</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
								<tr>
									<td align="center">15</td>
									<td align=""> WAM</td>
									<td align="center">MERAUKE</td>
									<td align="center">419400</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
								</tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br><br>

    </div>
    <!-- Jquery JS-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="<?= base_url('assets/admin/'); ?>vendor/slick/slick.min.js">
    </script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/wow/wow.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/animsition/animsition.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/circle-progress/circle-progress.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="<?= base_url('assets/admin/'); ?>vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="<?= base_url('assets/admin/'); ?>js/main.js"></script>

    </body>

</html>
<!-- end document-->
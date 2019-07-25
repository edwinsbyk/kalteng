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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data PU Potensi Rawa</a>
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
									<th rowspan="2" width="50">No</th>
									<th rowspan="2">Nama</th>
									<th rowspan="2">Jenis</th>
									<th rowspan="2">Kota/Kab.</th>
									<th colspan="2">Dikembangkan</th>
									<th colspan="2">Dianfaatkan</th>
									<th rowspan="2">Total</th>
									<th rowspan="2">Tahun Design</th>
								</tr>
								<tr>
									<th>Sudah</th>
									<th>Belum</th>
									<th>Sudah</th>
									<th>Belum</th>
								</tr>
								</thead>
								<tbody>
								<tr>
									<td align="center">1</td>
									<td align="">Gudang Arang</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">1539</td>
									<td align="center">33</td>
									<td align="center">0</td>
									<td align="center">15</td>
									<td align="center">1587</td>
									<td align="center">2009</td>
								</tr>
								<tr>
									<td align="center">2</td>
									<td align="">Okaba</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">296</td>
									<td align="center">736621</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">736917</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">3</td>
									<td align="">Nasem</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">3000</td>
									<td align="center">3000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">4</td>
									<td align="">Semangga</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">3000</td>
									<td align="center">3000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">5</td>
									<td align="">Tanah Miring</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">4500</td>
									<td align="center">4500</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">6</td>
									<td align="">Kuprik</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">3000</td>
									<td align="center">3000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">7</td>
									<td align="">Kurik</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">12400</td>
									<td align="center">12400</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">8</td>
									<td align="">Kuti</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">70000</td>
									<td align="center">70000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">9</td>
									<td align="">Disul Mappi</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">1753000</td>
									<td align="center">1753000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">10</td>
									<td align="">Asmat</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">MERAUKE</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">5500</td>
									<td align="center">5500</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">11</td>
									<td align="">Sarmi</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">JAYAPURA</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">9800</td>
									<td align="center">9800</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">12</td>
									<td align="">Lembah Kaniu</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">PANIAI</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">13000</td>
									<td align="center">13000</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">13</td>
									<td align="">Yapen Selatan</td>
									<td align="center">PASANG SURUT</td>
									<td align="center">YAPEN WAROPEN</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">8500</td>
									<td align="center">8500</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">14</td>
									<td align="">Kepi</td>
									<td align="center">LEBAK</td>
									<td align="center">MERAUKE</td>
									<td align="center">130</td>
									<td align="center">288117</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">288247</td>
									<td align="center"></td>
								</tr>
								<tr>
									<td align="center">15</td>
									<td align="">Murlinggua</td>
									<td align="center">LEBAK</td>
									<td align="center">MERAUKE</td>
									<td align="center">51</td>
									<td align="center">67820</td>
									<td align="center">0</td>
									<td align="center">0</td>
									<td align="center">67871</td>
									<td align="center"></td>
								</tr>
								</tbody>
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
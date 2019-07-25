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
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Data PU Embung</a>
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
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kota/Kab.</th>
                                    <th scope="col">Kapasitas</th>
                                    <th scope="col">Penduduk</th>
                                    <th scope="col">Ternak</th>
                                    <th scope="col">Irigasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td align="center">1</td>
                                    <td align="">001 - Kalisusu</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">7200</td>
                                    <td align="center">257</td>
                                    <td align="center">128</td>
                                    <td align="center">2.1</td>
                                </tr>
                                <tr>
                                    <td align="center">2</td>
                                    <td align="">002 - Siriwini</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">10840</td>
                                    <td align="center">470</td>
                                    <td align="center">144</td>
                                    <td align="center">3.52</td>
                                </tr>
                                <tr>
                                    <td align="center">3</td>
                                    <td align="">003 - Topo</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">8713.65</td>
                                    <td align="center">393</td>
                                    <td align="center">786</td>
                                    <td align="center">4</td>
                                </tr>
                                <tr>
                                    <td align="center">4</td>
                                    <td align="">004 - Kaliharapan</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">9720.72</td>
                                    <td align="center">190</td>
                                    <td align="center">5700</td>
                                    <td align="center">6.67</td>
                                </tr>
                                <tr>
                                    <td align="center">5</td>
                                    <td align="">005 - Sanoba</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">8508.3</td>
                                    <td align="center">332</td>
                                    <td align="center">664</td>
                                    <td align="center">8.35</td>
                                </tr>
                                <tr>
                                    <td align="center">6</td>
                                    <td align="">006 - Waharia</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">1319.73</td>
                                    <td align="center">280</td>
                                    <td align="center">560</td>
                                    <td align="center">9.1</td>
                                </tr>
                                <tr>
                                    <td align="center">7</td>
                                    <td align="">007 - Kimi</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">7524.25</td>
                                    <td align="center">119</td>
                                    <td align="center">238</td>
                                    <td align="center">7.4</td>
                                </tr>
                                <tr>
                                    <td align="center">8</td>
                                    <td align="">008 - Girimulyo</td>
                                    <td align="center">NABIRE</td>
                                    <td align="center">2773.21</td>
                                    <td align="center">853</td>
                                    <td align="center">1706</td>
                                    <td align="center">1.8</td>
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
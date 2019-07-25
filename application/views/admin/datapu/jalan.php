<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<!-- <head> -->
<!-- Required meta tags-->
<!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template"> -->

<!-- Title Page-->
<!-- <title>Dashboard</title> -->

<!-- Fontfaces CSS-->
<!-- <link href="<?= base_url('assets/admin/'); ?>css/font-face.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all"> -->

<!-- Bootstrap CSS-->
<!-- <link href="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all"> -->

<!-- Vendor CSS-->
<!-- <link href="<?= base_url('assets/admin/'); ?>vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?= base_url('assets/admin/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all"> -->

<!-- Main CSS-->
<!-- <link href="<?= base_url('assets/admin/'); ?>css/theme.css" rel="stylesheet" media="all"> -->

</!-->



<!-- HEADER DESKTOP-->
<!-- <br><br><br><br> -->
<!-- MAIN CONTENT-->
<!-- <div class="col-md-2">
    <div align="right">
        <div class="table-data-feature">
            <a href="http://localhost/admin/tambahrup" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-plus-circle"></i></a>Tambah Data


        </div>
    </div>
</div><br> -->
<!-- <div class="col-lg-12"> -->
<!-- DATA TABLE-->
<!-- <div class="table-responsive m-b-40">
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Ruas</th>
                    <th scope="col">Kota / Kab</th>
                    <th scope="col">Stat</th>
                    <th scope="col">P(KM)</th>
                    <th scope="col">L(M)</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>0.27.0 - GENTENTIRI</td>
                    <td>Merauke</td>
                    <td>Nas</td>
                    <td>189.8</td>
                    <td>4</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>60.13.K - BIAK</td>
                    <td>BIAK NUMFOR</td>
                    <td>Nas</td>
                    <td>2.19</td>
                    <td>3.5</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>60.12.K - JLN. MOH.</td>
                    <td>BIAK NUMFOR</td>
                    <td>Nas</td>
                    <td>9.01</td>
                    <td>3.5</td>
                    <td>
                        <div class="table-data-feature center">
                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>


    </div> -->

<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#table" role="tab" aria-controls="home" aria-selected="true">Data PU Jalan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</a>
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
                                    <th scope="col">#</th>
                                    <th scope="col">Ruas</th>
                                    <th scope="col">Kota / Kab</th>
                                    <th scope="col">Stat</th>
                                    <th scope="col">P(KM)</th>
                                    <th scope="col">L(M)</th>

                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>60.13.K - BIAK</td>
                                    <td>BIAK NUMFOR</td>
                                    <td>Nas</td>
                                    <td>2.19</td>
                                    <td>3.5</td>
                                    <td>
                                        <div class="table-data-feature">
                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                            <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                        </div>
                                    </td>

                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Jquery JS-->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/jquery-3.2.1.min.js"></script> -->
        <!-- Bootstrap JS-->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/popper.min.js"></script> -->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-4.1/bootstrap.min.js"></script> -->
        <!-- Vendor JS       -->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/slick/slick.min.js"> -->
        <!-- </script> -->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/wow/wow.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/animsition/animsition.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"> -->
        <!-- </script> -->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/counter-up/jquery.counterup.min.js"> -->
        <!-- </script> -->
        <!-- <script src="<?= base_url('assets/admin/'); ?>vendor/circle-progress/circle-progress.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="<?= base_url('assets/admin/'); ?>vendor/select2/select2.min.js"> -->
        <!-- </script> -->

        <!-- Main JS-->
        <!-- <script src="<?= base_url('assets/admin/'); ?>js/main.js"></script> -->

        <!-- </body> -->

        </!-->
        <!-- end document-->
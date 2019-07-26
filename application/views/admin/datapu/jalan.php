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
                                <?php $i = 1; ?>
                                <?php foreach ($data as $d) : ?>
                                    <tr>
                                        <td><?= $i; ?></td>
                                        <td><?= $d['ruas']; ?></td>
                                        <td><?= $d['kota']; ?></td>
                                        <td><?= $d['stat']; ?></td>
                                        <td><?= $d['panjang']; ?></td>
                                        <td><?= $d['lebar']; ?></td>
                                        <td>
                                            <div class="table-data-feature">
                                                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                                                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
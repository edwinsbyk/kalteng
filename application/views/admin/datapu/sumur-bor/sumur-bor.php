<style type="text/css">
    .tabb {
        background-color: white;
        border-radius: 4px;
    }
</style>
<div class="main-content">
    <div class="container-fluid">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h4>Data PU Sumur Bor</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#table" role="tab" aria-controls="home" aria-selected="true">Data PU Sumur Bor</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="home-tab">
                            <?php $this->load->view('admin/datapu/sumur-bor/tabeldata_sumur-bor') ?>
                        </div>
                        <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="home-tab">
                            <?php $this->load->view('admin/datapu/sumur-bor/tambahdata_sumur-bor') ?>
                        </div>


                    </div>

                </div>
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
                    <h4>Jembatan</h4>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Data PU Jembatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <?php $this->load->view('admin/datapu/jembatan/tabeldata_jembatan') ?>
                        </div>
                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php $this->load->view('admin/datapu/jembatan/tambahdata_jembatan') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
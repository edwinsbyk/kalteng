<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#table" role="tab" aria-controls="home" aria-selected="true">Data PU Embung</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#tambah" role="tab" aria-controls="profile" aria-selected="false">Tambah Data</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="table" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/datapu/tabeldata_embung') ?>
                </div>
                <div class="tab-pane fade" id="tambah" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/datapu/tambahdata_embung') ?>
                </div>
            </div>

        </div>
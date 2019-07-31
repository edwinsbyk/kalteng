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
                    <h4>Pegawai Bidang</h4>
                </div>
                <div class="card-body">
    
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Pegawai Bidang</a>
                </li>
                
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/pegawaibidang/tabelbidang',$data) ?>
                </div>
                
            </div>
        </div>
    </div>
</div>
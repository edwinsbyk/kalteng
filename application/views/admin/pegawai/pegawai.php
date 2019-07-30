
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
                    <h4>Pegawai</h4>
                </div>
                <div class="card-body">
    
            <ul class="nav nav-tabs mb-4" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Tabel Pegawi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Tambah Pegawai</a>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <?php $this->load->view('admin/pegawai/tabelpegawai',$data) ?>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <?php $this->load->view('admin/pegawai/tambahpegawai',$data) ?>
                </div>

<br><br><br><br>
<div class="col-md-2">
  <div>
    <div class="table-data-feature">
      <a href="<?= base_url('admin/tambahpegawai'); ?>" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-plus-circle"></i></a>Tambah Data
    </div>
  </div>
</div><br>
<div class="col-lg-12">
  <!-- DATA TABLE-->
  <div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Bidang</th>
          <th>Action</th>

        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Proyek</td>
          <td>kalimantan</td>
          <td>Rp.1414</td>

          <td>
            <div class="table-data-feature">
              <a href="#" class="item" data-toggle="modal" data-placement="top" title="Detail" data-target="#myModal"><i class="fas fa-eye"></i></a>
              <div class="table-data-feature">
                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

                <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
              </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
  <!-- Modal -->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- konten modal-->
      <div class="modal-content">
        <!-- heading modal -->
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Detail Pegawai</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
          <div class="form-group">
              <label for="recipient-name" class="col-form-label">Nama:</label>
              <input type="text" class="form-control" id="recipient-name" name="nama" disabled>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Email:</label>
              <input type="text" class="form-control" id="recipient-name" name="email" disabled>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Tangal Pembuatan</label>
              <input type="text" class="form-control" id="recipient-name" name="date_created" disabled>

            </div>
        </div>
    </div>
</div>
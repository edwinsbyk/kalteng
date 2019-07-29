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
            <div class="form-group">
              <label for="message-text" class="col-form-label">Bidang</label>
              <input type="text" class="form-control" id="recipient-name" name="bidang" disabled>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Jabatan</label>
              <input type="text" class="form-control" id="recipient-name" name="jabatan" disabled>
            </div>
            <div class="form-group">
              <label for="message-text" class="col-form-label">Alamat Kantor</label>
              <input type="text" class="form-control" id="recipient-name" name="alamat" disabled>
            </div>

          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <br><br>
  <!-- Jquery JS-->


  <!-- end document-->
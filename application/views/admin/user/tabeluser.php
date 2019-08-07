<?= $this->session->flashdata('message'); ?>
<div class="col-lg-12">
  <div class="table-responsive m-b-40 ">
    <table id="artikelTable" class="table table-borderless table-data3 data_table" style="width:100%">
        <thead>
          <th>No</th>
          <th>Email</th>
          <th>Nama</th>
          <th>Hak Akses</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
      <?php $nomor = 1; ?>
        <?php foreach ($data as $row) : ?>
          <tr>
            <td><?= $nomor ?></td>
            <td><?= $row['email'] ?></td>
            <td><?= $row['name'] ?></td>
            <td>
              <span class="badge ml-2 p-1 badge-<?= $row["role_id"] 
                  ? "success" 
                  : "primary" ?>">
                  <?= $row["role_id"] == 1 ? "Administrator" : "Operator" ?>
              </span>
            </td>
            <td>
              <div class="table-data-feature">
                <a href="#" class="item" data-toggle="modal" data-target="#modal_detail<?= $row['id']; ?>"><i class="fas fa-key"></i></a>
                <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a>
                <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $row['id']; ?>"><i class="zmdi zmdi-delete"></i></a>
              </div>
            </td>
          </tr>
            <?php $nomor++; ?>
              <?php endforeach; ?>
          <?php $this->load->view('admin/user/passwordUser-modal'); ?>
          <?php $this->load->view('admin/user/editUser-modal'); ?>
          <?php $this->load->view('admin/user/deleteUser-modal'); ?>
        </tbody>
    </table>
  </div>
</div>

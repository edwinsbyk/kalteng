<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" id="artikelTable">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kota/Kab.</th>
                <th>Kapasitas</th>
                <th>Pelayanan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['kota']; ?></td>
                    <td><?= $d['kapasitas']; ?></td>
                    <td><?= $d['pelayanan']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_spam']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_spam']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/spam/editdatapu-spam-modal'); ?>
<?php $this->load->view('admin/datapu/spam/deletedatapu-spam-modal'); ?>
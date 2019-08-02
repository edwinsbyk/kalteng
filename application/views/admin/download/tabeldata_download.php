<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Alias</th>
                <th scope="col">Nama File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['alias']; ?></td>
                    <td>
                        <a href="<?php echo base_url('files/download/') ?><?php echo $d['nama_file'] ?>" target=”_blank”><?= $d['nama_file'] ?></a>
                    </td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_file']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_file']; ?>"><i class="zmdi zmdi-delete"></i></a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php $this->load->view('admin/download/edit-download-modal'); ?>
<?php $this->load->view('admin/download/delete-download-modal'); ?>
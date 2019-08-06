<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Nama File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['keterangan']; ?></td>
                    <td><?= $d['nama_file'] ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_file']; ?>"><i class="zmdi zmdi-delete"></i></a>
                            <a href="<?php echo base_url('files/download/') ?><?= $d['id_file'] ?>" target="_blank" class="item"><i class="zmdi zmdi-download"></i></a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php $this->load->view('admin/download/delete-download-modal'); ?>
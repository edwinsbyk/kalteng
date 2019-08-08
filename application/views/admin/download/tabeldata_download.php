<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Keterangan</th>
                <th scope="col">Nama File</th>
                <th scope="col">Ukuran File</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['keterangan']; ?> <span class="badge ml-2 p-1 badge-<?= $d["publik"] ? "success" : "secondary" ?>"><?= $d["publik"] ? "Public File" : "Private File" ?></span></td>
                    <td><?= $d['nama_file'] ?></td>
                    <td><?= number_format((float) $d['size'] / 1024, 2, '.', '') ?> MB</td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_file']; ?>"><i class="zmdi zmdi-delete"></i></a>
                            <a href="#" data-toggle="modal"data-target="#modal_edit<?= $d['id_file']; ?>" class="item"><i class="zmdi zmdi-edit"></i></a>
                            <a href="<?php echo base_url('files/download/') ?><?= $d['id_file'] ?>" target="_self" class="item"><i class="zmdi zmdi-download"></i></a>
                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php $this->load->view('admin/download/delete-download-modal'); ?>
<?php $this->load->view('admin/download/edit-download-modal'); ?>
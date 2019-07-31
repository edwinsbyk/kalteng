<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" id="artikelTable">
        <thead>
            <tr>
            <tr>
                <th class="bg-color-5" width="50">No</th>
                <th class="bg-color-5">Ruas</th>
                <th class="bg-color-5">Kota/Kab.</th>
                <th class="bg-color-5">Jenis Masalah</th>
                <th class="bg-color-5">Tingkat Masalah</th>
                <th scope="col">Action</th>
            </tr>

            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['ruas']; ?></td>
                    <td><?= $d['kota']; ?></td>
                    <td><?= $d['jenis_masalah']; ?></td>
                    <td><?= $d['tingkat_masalah']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_black_spot']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_black_spot']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/black-spot/editdatapu-black-spot-modal'); ?>
<?php $this->load->view('admin/datapu/black-spot/deletedatapu-black-spot-modal'); ?>
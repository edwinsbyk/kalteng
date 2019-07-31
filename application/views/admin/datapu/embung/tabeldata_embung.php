<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Kota/Kab.</th>
                <th scope="col">Kapasitas</th>
                <th scope="col">Penduduk</th>
                <th scope="col">Ternak</th>
                <th scope="col">Irigasi</th>
                <th scope="col">Action</th>

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
                    <td><?= $d['penduduk']; ?></td>
                    <td><?= $d['ternak']; ?></td>
                    <td><?= $d['irigasi']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_embung']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_embung']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>

                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/embung/editdatapu-embung-modal'); ?>
<?php $this->load->view('admin/datapu/embung/deletedatapu-embung-modal'); ?>
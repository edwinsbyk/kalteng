<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th class="bg-color-5" width="50">No</th>
                <th class="bg-color-5">Nama</th>
                <th class="bg-color-5">Kota/Kab.</th>
                <th class="bg-color-5">Luas<br />(Km<sup>2</sup>)</th>
                <th class="bg-color-5">Kedalaman<br />(m)</th>
                <th class="bg-color-5">Kapasitas<br />(m<sup>3</sup>)</th>
                <th class="bg-color-5">Penduduk<br />(jiwa)</th>
                <th class="bg-color-5">Irigasi<br />(Ha)</th>
                <th class="bg-color-5">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['kota']; ?></td>
                    <td><?= $d['luas']; ?></td>
                    <td><?= $d['kedalaman']; ?></td>
                    <td><?= $d['kapasitas']; ?></td>
                    <td><?= $d['penduduk']; ?></td>
                    <td><?= $d['irigasi']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_danau']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_danau']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/potensi-danau/editdatapu-potensi-danau-modal'); ?>
<?php $this->load->view('admin/datapu/potensi-danau/deletedatapu-potensi-danau-modal'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th rowspan="2" width="50">No</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">Jenis</th>
                <th rowspan="2">Kota/Kab.</th>
                <th colspan="2">Dikembangkan</th>
                <th rowspan="2">Total</th>
                <th rowspan="2">Tahun Design</th>
                <th rowspan="2">Action</th>
            </tr>
            <tr>

                <th>Sudah</th>
                <th>Belum</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['nama']; ?></td>
                    <td><?= $d['jenis']; ?></td>
                    <td><?= $d['kota']; ?></td>
                    <td><?= $d['sudah_kembang']; ?></td>
                    <td><?= $d['belum_kembang']; ?></td>
                    <td><?= $d['total']; ?></td>
                    <td><?= $d['tahun']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_rawa']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_rawa']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>



                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/potensi-rawa/editdatapu-potensi-rawa-modal'); ?>
<?php $this->load->view('admin/datapu/potensi-rawa/deletedatapu-potensi-rawa-modal'); ?>
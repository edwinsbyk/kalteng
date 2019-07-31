<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kota / Kab</th>
                <th scope="col">Debit</th>
                <th scope="col">Air Baku</th>
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
                    <td><?= $d['debit']; ?></td>
                    <td><?= $d['air_baku']; ?></td>
                    <td><?= $d['irigasi']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_sumurbor']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_sumurbor']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php $this->load->view('admin/datapu/sumur-bor/editdatapu-sumur-bor-modal'); ?>
<?php $this->load->view('admin/datapu/sumur-bor/deletedatapu-sumur-bor-modal'); ?>
<?= $this->session->flashdata('message'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Ruas</th>
                <th scope="col">Kota / Kab</th>
                <th scope="col">Stat</th>
                <th scope="col">P(KM)</th>
                <th scope="col">L(M)</th>

                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($data as $d) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td><?= $d['ruas']; ?></td>
                    <td><?= $d['kota']; ?></td>
                    <td><?= $d['stat']; ?></td>
                    <td><?= $d['panjang']; ?></td>
                    <td><?= $d['lebar']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_jalan']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_jalan']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>

        </tbody>
    </table>
</div>

<?php $this->load->view('admin/datapu/jalan/editdatapu-jalan-modal'); ?>
<?php $this->load->view('admin/datapu/jalan/deletedatapu-jalan-modal'); ?>
<div class="table-data__tool">

</div>
<div class="table-responsive m-b-40">
    <table class="table table-borderless  data_table table-data3" id="artikelTable">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nama</th>
                <th scope="col">Kota/Kab.</th>
                <th scope="col">P(Km)</th>
                <th scope="col">L(m)</th>
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
                    <td><?= $d['panjang']; ?></td>
                    <td><?= $d['lebar']; ?></td>
                    <td>
                        <div class="table-data-feature">
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_jembatan']; ?>"><i class="zmdi zmdi-edit"></i></a>
                            <a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_jembatan']; ?>"><i class="zmdi zmdi-delete"></i></a>

                        </div>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?php $this->load->view('admin/datapu/jembatan/editdatapu-jembatan-modal'); ?>
<?php $this->load->view('admin/datapu/jembatan/deletedatapu-jembatan-modal'); ?>
<div class="table-responsive m-b-40">
    <table class="table table-borderless table-data3">
        <thead>
            <tr>
                <th width="50">No.</th>
                <th>Judul</th>
                <th width="200">Tanggal</th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             $no = 1;
             foreach ($data as $d) : 
             ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $d->judul ?></td>
                <td><?= $d->tanggal ?></td>
                <td>
                <div class="table-data-feature">
                    <a href="#" class="item" data-toggle="modal" data-placement="top" title="Preview" data-target="#previewModal"><i class="fas fa-eye"></i></a>
                    <a href="#" class="item" data-toggle="modal" data-placement="top" title="Edit" data-target="#editModal"><i class="zmdi zmdi-edit"></i></a>
                    <a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
                </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<style type="text/css">
.modal-xxlg {
    width: 97%;
    height: 97%;
    max-width: 100%;
    padding: 0;
}

.modal-xlg {
    width: 60%;
    height: 97%;
    max-width: 60%;
    padding: 0;
}

.modal-content {
    height: 97%;
    overflow:auto;
}

</style>
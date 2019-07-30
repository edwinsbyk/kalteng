<!-- <script type="text/javascript">
    $("#previewModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var title = triggerLink.data("isi");
      
        $("#previewContent").text(title);
    });
</script>    -->

<div class="table-responsive m-b-40">
<table id="beritaTable" class="table table-striped" style="width:100%"> 
        <thead>
            <tr>
                <th>Judul</th>
                <th width="200">Tanggal</th>
                <th width="100">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
             foreach ($data as $d) : 
             ?>
            <tr>
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
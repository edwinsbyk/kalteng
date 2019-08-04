<!-- <script type="text/javascript">
    $("#previewModal").on('show.bs.modal', function (e) {
        var triggerLink = $(e.relatedTarget);
        var title = triggerLink.data("isi");
      
        $("#previewContent").text(title);
    });
</script>    -->

<?= $this->session->flashdata('message') ?>
<div class="table-responsive m-b-40">
<table class="data_table table table-striped" style="width:100%"> 
        <thead>
            <tr>
                <th>Judul</th>
                <th width="200">Author</th>
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
                <td><?= $d->name ?></td>
                <td><?= $d->tanggal ?></td>
                <td>
                <div class="table-data-feature">
                    <button 
                        class="item get_data_on_table"
                        table-data-id="<?= $d->idberita ?>"
                        data-url="<?= base_url("admin/get_data_berita_by_id") ?>" 
                        data-toggle="modal"
                        data-namespace="preview_berita"
                        data-placement="top" 
                        title="Preview" 
                        data-target="#previewModal">
                            <i class="fas fa-eye"></i>
                        </button>
                    <button 
                        class="item get_data_on_table" 
                        table-data-id="<?= $d->idberita ?>"
                        data-url="<?= base_url("admin/get_data_berita_by_id") ?>" 
                        data-toggle="modal" 
                        data-placement="top" 
                        data-namespace="edit_berita"
                        title="Edit" 
                        data-target="#editModal">
                            <i class="zmdi zmdi-edit"></i>
                        </button>
                    <button 
                        class="item delete_data_on_table" 
                        table-data-id="<?= $d->idberita ?>"
                        data-url="<?= base_url("admin/delete_berita") ?>" 
                        data-toggle="tooltip" 
                        data-placement="top" 
                        title="Delete">
                            <i class="zmdi zmdi-delete"></i>
                        </button>
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
<!-- <div class="table-data__tool">
    <div class="table-data__tool-left">
        <div class="rs-select2--light rs-select2--md">
            <select class="js-select2" name="property">
                <option selected="selected">All Properties</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <div class="rs-select2--light rs-select2--sm">
            <select class="js-select2" name="time">
                <option selected="selected">Today</option>
                <option value="">3 Days</option>
                <option value="">1 Week</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
        <button class="au-btn-filter">
            <i class="zmdi zmdi-filter-list"></i>filters</button>
    </div>
    <div class="table-data__tool-right">
        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
            <i class="zmdi zmdi-plus"></i>add item</button>
        <div class="rs-select2--dark rs-select2--sm rs-select2--dark2">
            <select class="js-select2" name="type">
                <option selected="selected">Export</option>
            </select>
            <div class="dropDownSelect2"></div>
        </div>
    </div>
</div> -->

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

<?= $this->session->flashdata('message') ?>
<table id="agendaTable" class="table table-striped" style="width:100%"> 
    <thead> 
        <tr> 
        <tr> 
            <th>Judul</th> 
            <th width="200">Tanggal Mulai</th>
            <th width="200">Tanggal Selesai</th>
            <th width="100">Action</th>
        </tr>   
        </tr> 
    </thead> 
    <tbody> 
        <?php
            foreach ($wk as $d) {
        ?>
            <tr>
                <td><?= $d["judul"] ?></td>
                <td><?= $d["tanggal_mulai"] ?></td>
                <td><?= $d["tanggal_selesai"] ?></td>
                <td>
                    <div class="table-data-feature" style="justify-content: flex-start">
                        <button
                            class="item get_data_on_table"
                            table-data-id="<?= $d["id_agenda"] ?>"
                            data-url="<?= base_url("admin/get_data_agenda_by_id") ?>"
                            data-toggle="modal"  
                            data-placement="top" 
                            title="Edit"
                            data-namespace="edit_agenda"
                            data-target="#editModal">
                            <i class="zmdi zmdi-edit"></i>
                            </button>
                        <button 
                            id="delete_agenda" 
                            class="item delete_data_on_table" 
                            data-url="<?= base_url("admin/delete_agenda") ?>" 
                            data-toggle="modal" 
                            data-placement="top" 
                            table-data-id="<?= $d["id_agenda"] ?>" 
                            title="Delete">
                                <i class="zmdi zmdi-delete"></i>
                            </button>
                    </div>
                </td>
            </tr>
        <?php } ?> 
    </tbody>
</table>
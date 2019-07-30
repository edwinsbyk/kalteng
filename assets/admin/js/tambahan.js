$(document).ready(() => {
    $("#artikelTable").DataTable();
    $("#beritaTable").DataTable();

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        showOtherMonths: true,
        format: 'dd-mm-yyyy'
    });
    $(".delete_artikel").click(() => {
        swal({
            text: "Apakah anda yakin ingin menghapus data?",
            // text: "Jika data telah terhapus, sistem kami tidak dapat mengembalikannya",
            icon: "warning",
            buttons: true,
            dangerMode: true,
          })
          .then((onDelete) => {
            if (onDelete) {
                $.ajax({
                    method: "post",
                    url: $(".delete_artikel").attr("data-url"),
                    data: {artikel_id: $(".delete_artikel").attr("artikel-index")},
                    cache: false
                }).done((bool) => {
                    swal(bool ? "Berhasil menghapus data" : "Gagal menghapus data", {
                        icon: bool ? "success" : "danger", dangerMode: !bool
                    }).then(() => location.reload());
                })
            } else {
              swal("Perintah dibatalkan");
            }
          });
    })

})
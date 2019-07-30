$(document).ready(() => {
    $("#artikelTable").DataTable();
    $("#beritaTable").DataTable();

    $('#datepickerArtikel').datepicker({
        uiLibrary: 'bootstrap4',
        showOtherMonths: true,
        format: 'dd-mm-yyyy'
    });

    $('#datepickerBerita').datepicker({
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


    $(".detail_berita").click(() => {
        $.ajax({
            method: "get",
            url: $(".detail_berita").attr("data-url"),
            data: {berita_id: $(".detail_berita").attr("berita-index")},
            cache: false
        })
    })

})
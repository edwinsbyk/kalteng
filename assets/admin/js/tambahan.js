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
    $(".delete_artikel").click(function () {
        var self = $(this);
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
                    url: self.attr("data-url"),
                    data: {artikel_id: self.attr("artikel-index")},
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

    var detail_berita = $(".detail_berita");
    detail_berita.each(function () {
        detail_berita.click(function () {
            var self = $(this);
            $.ajax({
                method: "get",
                url: self.attr("data-url"),
                data: {berita_id: self.attr("berita-index")},
                cache: false
            }).done((data) => {
                data = JSON.parse(data)[0]
                $("#judul-berita").html(data.judul);
                $("#isi-berita").html(data.isi)  
            })
        })
    })

    var detail_artikel = $(".detail_artikel");
    detail_artikel.each(function () {
        detail_artikel.click(function () {
            var self = $(this);
            $.ajax({
                method: "get",
                url: self.attr("data-url"),
                data: {artikel_id: self.attr("artikel-index")},
                cache: false
            }).done((data) => {
                data = JSON.parse(data)[0]
                $("#judul-artikel").html(data.judul);
                $("#isi-artikel").html(data.isi)  
            })
        })
    })

    var edit_artikel = $(".edit_artikel");
    edit_artikel.each(function () {
        edit_artikel.click(function () {
            var self = $(this);
            $.ajax({
                method: "get",
                url: self.attr("data-url"),
                data: {artikel_id: self.attr("artikel-index")},
                cache: false
            }).done((data) => {
                data = JSON.parse(data)[0]
                $("[name='edit-judul']").val(data.judul);
                $("[name='edit-isi']").html(data.isi);
                $("[name='edit-tanggal']").html(data.tanggal);  
            })
        })
    })

})
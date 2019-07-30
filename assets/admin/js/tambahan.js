$(document).ready(() => {
    $("#artikelTable").DataTable();
    $("#beritaTable").DataTable();

    $('#datepickerArtikel').datepicker({
        uiLibrary: 'bootstrap4',
        showOtherMonths: true,
        format: 'dd-mm-yyyy'
    });
    $('.datepicker').datepicker({
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

    $('.delete_berita').click(function () {
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
                    data: {berita_id: self.attr("berita-index")},
                    cache: false
                }).done(bool => {
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

    var edit_berita = $(".edit_berita");
        edit_berita.click(function () {
            var self = $(this);
            $.ajax({
                method: "get",
                url: self.attr("data-url"),
                data: {berita_id: self.attr("berita-index")},
                cache: false
            }).done((data) => {
                data = JSON.parse(data)[0]
                $("#edit_judul_berita").val(data.judul);
                $("input[name='edit_idberita']").val(data.idberita);
                $("#edit_tanggal_berita").val(data.tanggal);
                tinymce.get('edit_isi_berita').setContent(data.isi);
            })
        })

    var detail_artikel = $(".detail_artikel");
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
        tinymce.init({
            selector: 'textarea.tinyarea',
            mode : "specific_textareas",
            height: 500,
            plugins: 'preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
            toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
        });
})
$(document).ready(() => {
	$(".data_table").DataTable();

	$(document).on("click", ".delete_data_on_table", function() {
		var self = $(this);
		swal({
			text: "Apakah anda yakin ingin menghapus data?",
			icon: "warning",
			buttons: true,
			dangerMode: true,
		})
		.then((onDelete) => {
			if (onDelete) {
				$.ajax({
					method: "post",
					url: self.attr("data-url"),
					data: { id: self.attr("table-data-id") },
					cache: false
				}).done(bool => {
					swal(bool ? "Berhasil menghapus data" : "Gagal menghapus data", {
						icon: bool ? "success" : "danger",
						dangerMode: !bool
					}).then(() => location.reload());
				})
			} else {
				swal("Perintah dibatalkan");
			}
		});
	})

	$(document).on("click", ".get_data_on_table", function() {
		var self = $(this);
		$.ajax({
			method: "get",
			url: self.attr("data-url"),
			data: { id: self.attr("table-data-id") },
			cache: false
		}).done((data) => {
			data = JSON.parse(data)[0]
			switch (self.attr("data-namespace")) {
				case "preview_berita":
						$("#judul-berita").html(data.judul);
						$("#isi-berita").html(data.isi)
					break;
				case "edit_berita":
						$("#edit_judul_berita").val(data.judul);
						$("input[name='edit_idberita']").val(data.idberita);
						$("#edit_tanggal_berita").val(data.tanggal);
						$("#edit_link_gambar").val(data.image);
						tinymce.get('edit_isi_berita').setContent(data.isi);
					break;
				case "preview_artikel":
						$("#judul-artikel").html(data.judul);
						$("#isi-artikel").html(data.isi);
					break;
				case "edit_artikel":
						$("[name='edit-judul']").val(data.judul);
						$("[name='edit-tanggal']").val(data.tanggal);
						$("[name='edit-image']").val(data.image);
						$("[name='edit-id_artikel']").val(data.id_artikel);
						tinymce.get('edit-isi-artikel').setContent(data.isi);
					break;
				case "edit_agenda":
						$("[name='edit_judul_agenda']").val(data.judul);
						$("[name='edit_dtp_tgl_mulai']").val(data.tanggal_mulai);
						$("[name='edit_dtp_tgl_selesai']").val(data.tanggal_selesai);
						$("[name='edit_image']").val(data.image);
						$("[name='edit_id_agenda']").val(data.id_agenda);
						tinymce.get('edit_isi_agenda').setContent(data.isi);
					break;
				case "edit_testimoni":
						$("[name='edit_nama']").val(data.nama);
						$("[name='edit_email']").val(data.email);
						$("[name='edit_id_testimoni']").val(data.id_testimoni);
						tinymce.get('edit_isi').setContent(data.isi);
					break;
				default:
						console.log("invalid namespace");
					break;
			}
		})
	})


})

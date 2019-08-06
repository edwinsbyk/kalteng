<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 23.1% 64.6%,  rgba(129,125,254,1) 0%, rgba(111,167,254,1) 90% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Potensi Danau</h1>
				<p class="lead mt-5 mb-8">Pekerjaan Umum Kalimantan Tengah</p>
			</div>
</header>


<main class="main-content">

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg mx-auto">
					<table class="table table-hover data_table">
						<thead>
							<tr>
								<th class="bg-color-5" width="50">No</th>
								<th class="bg-color-5">Nama</th>
								<th class="bg-color-5">Kota/Kab.</th>
								<th class="bg-color-5">Luas<br />(Km<sup>2</sup>)</th>
								<th class="bg-color-5">Kedalaman<br />(m)</th>
								<th class="bg-color-5">Kapasitas<br />(m<sup>3</sup>)</th>
								<th class="bg-color-5">Penduduk<br />(jiwa)</th>
								<th class="bg-color-5">Irigasi<br />(Ha)</th>
								<th class="bg-color-5">Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['nama']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['luas']; ?></td>
									<td><?= $d['kedalaman']; ?></td>
									<td><?= $d['kapasitas']; ?></td>
									<td><?= $d['penduduk']; ?></td>
									<td><?= $d['irigasi']; ?></td>
									<td>
										<div class="table-data-feature">
											<a href="#" class="item" data-toggle="modal" data-target="#modal_edit<?= $d['id_danau']; ?>"><i class="zmdi zmdi-edit"></i></a>
											<a href="#" class="item" data-toggle="modal" data-target="#modal_delete<?= $d['id_danau']; ?>"><i class="zmdi zmdi-delete"></i></a>

										</div>
									</td>
								</tr>
								<?php $i++; ?>
							<?php endforeach; ?>
						</tbody>
					</table>

				</div>
			</div>

		</div>
	</section>



</main>
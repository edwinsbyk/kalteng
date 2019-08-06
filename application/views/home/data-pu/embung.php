<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle 1002px at -0.1% 47%,  rgba(53,92,125,1) 0%, rgba(108,91,123,1) 51.2%, rgba(192,108,132,1) 100.2% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Embung</h1>
				<p class="lead mt-5 mb-8">Pekerjaan Umum Kalimantan Tengah</p>
			</div>
</header>


<main class="main-content">

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg mx-auto">
					<table class="data_table table table-hover ">
						<thead>
							<tr>
								<th scope="col">No</th>
								<th scope="col">Nama</th>
								<th scope="col">Kota/Kab.</th>
								<th scope="col">Kapasitas</th>
								<th scope="col">Penduduk</th>
								<th scope="col">Ternak</th>
								<th scope="col">Irigasi</th>

							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['nama']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['kapasitas']; ?></td>
									<td><?= $d['penduduk']; ?></td>
									<td><?= $d['ternak']; ?></td>
									<td><?= $d['irigasi']; ?></td>
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
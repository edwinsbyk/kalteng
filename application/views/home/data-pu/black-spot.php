<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(162,75,166,1) 5.8%, rgba(181,71,163,1) 96.9% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Black Spot</h1>
				<p class="lead mt-5 mb-8">Pekerjaan Umum Kalimantan Tengah</p>
			</div>
</header>


<main class="main-content">

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg mx-auto">
					<table class="table table-hover data_table">
						<thead class="thead-dark">
							<tr>
							<tr>
								<th class="bg-color-5" width="50">No</th>
								<th class="bg-color-5">Ruas</th>
								<th class="bg-color-5">Kota/Kab.</th>
								<th class="bg-color-5">Jenis Masalah</th>
								<th class="bg-color-5">Tingkat Masalah</th>
							</tr>

							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['ruas']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['jenis_masalah']; ?></td>
									<td><?= $d['tingkat_masalah']; ?></td>
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
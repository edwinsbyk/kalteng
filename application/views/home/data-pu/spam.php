<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 173.1deg,  rgba(244,162,110,1) 12.4%, rgba(218,99,104,1) 88.5% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Spam</h1>
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
								<th>No</th>
								<th>Nama</th>
								<th>Kota/Kab.</th>
								<th>Kapasitas</th>
								<th>Pelayanan</th>
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
									<td><?= $d['pelayanan']; ?></td>
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
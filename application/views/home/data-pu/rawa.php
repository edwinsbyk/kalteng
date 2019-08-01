<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 107deg,  rgba(72,81,86,1) 11.2%, rgba(187,187,187,1) 90.7% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Potensi Rawa</h1>
				<p class="lead mt-5 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.</p>
				<p class="gap-xy">
					<a class="btn btn-round btn-outline-light mw-150" href="#">At imperdiet</a>
					<a class="btn btn-round btn-light mw-150" href="#">At imperdiet</a>
				</p>
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
								<th rowspan="2" width="50">No</th>
								<th rowspan="2">Nama</th>
								<th rowspan="2">Jenis</th>
								<th rowspan="2">Kota/Kab.</th>
								<th colspan="2">Dimanfaatkan</th>
								<th rowspan="2">Total</th>
								<th rowspan="2">Tahun Design</th>
							</tr>
							<tr>

								<th>Sudah</th>
								<th>Belum</th>
							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['nama']; ?></td>
									<td><?= $d['jenis']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['sudah_kembang']; ?></td>
									<td><?= $d['belum_kembang']; ?></td>
									<td><?= $d['total']; ?></td>
									<td><?= $d['tahun']; ?></td>
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
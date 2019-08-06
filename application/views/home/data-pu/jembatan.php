<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 69deg,  rgba(116,43,62,1) 19.1%, rgba(192,71,103,1) 90.2% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Jembatan</h1>
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
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Kota/Kab.</th>
								<th scope="col">P(Km)</th>
								<th scope="col">L(m)</th>

							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['nama']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['panjang']; ?></td>
									<td><?= $d['lebar']; ?></td>
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
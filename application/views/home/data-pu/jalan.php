<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: linear-gradient( 108deg,  rgba(0,166,81,1) 9.3%, rgba(0,209,174,1) 118.3% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Jalan</h1>
				<p class="lead mt-5 mb-8">Pekerjaan Umum Kalimantan Tengah</p>
			</div>
</header>


<main class="main-content">

	<section class="section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 mx-auto">
					<table class="table table-hover data_table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">#</th>
								<th scope="col">Ruas</th>
								<th scope="col">Kota / Kab</th>
								<th scope="col">Stat</th>
								<th scope="col">P(KM)</th>
								<th scope="col">L(M)</th>

							</tr>
						</thead>
						<tbody>
							<?php $i = 1; ?>
							<?php foreach ($data as $d) : ?>
								<tr>
									<td><?= $i; ?></td>
									<td><?= $d['ruas']; ?></td>
									<td><?= $d['kota']; ?></td>
									<td><?= $d['stat']; ?></td>
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
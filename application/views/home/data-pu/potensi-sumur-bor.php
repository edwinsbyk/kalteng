<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(255,162,128,1) 0%, rgba(255,195,153,1) 78.2% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Potensi Sumur Bor</h1>
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
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Kota</th>
								<th scope="col">SWL</th>
								<th scope="col">Debit</th>
								<th scope="col">Air Baku</th>
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
									<td><?= $d['swl']; ?></td>
									<td><?= $d['debit']; ?></td>
									<td><?= $d['airbaku']; ?></td>
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
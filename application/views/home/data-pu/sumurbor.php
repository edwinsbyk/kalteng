<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle 853px at 12.9% 47.3%,  rgba(107,158,205,1) 28.3%, rgba(50,73,101,1) 100.2% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Sumur Bor</h1>
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
								<th scope="col">#</th>
								<th scope="col">Nama</th>
								<th scope="col">Kota / Kab</th>
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
									<td><?= $d['debit']; ?></td>
									<td><?= $d['air_baku']; ?></td>
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
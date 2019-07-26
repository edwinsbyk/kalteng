<?php var_dump($data); ?>
<header id="home" class="header text-white h-fullscreen  text-center text-lg-left" style="background-image: radial-gradient( circle farthest-corner at 10% 20%,  rgba(37,22,131,1) 0%, rgba(97,170,231,1) 90% );">
	<div class="container">
		<div class="row align-items-center h-100">

			<div class="col-lg-6">
				<h1>Jalan</h1>
				<p class="lead mt-5 mb-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					incididunt ut labore et dolore magna aliqua.</p>
				<p class="gap-xy">
					<a class="btn btn-round btn-outline-light mw-150" href="#">At imperdiet</a>
					<a class="btn btn-round btn-light mw-150" href="#">At imperdiet</a>
				</p>
			</div>
</header>


<main class="main-content">

	<section class="mainContent full-width clearfix coursesSection">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 block">
					<div>
						<div class="caption border-color-1">
							<h3 class="color-1">Jalan</h3>
							<div class="table">
								<table class="table">
									<thead>
										<tr>
											<th scope="col">#</th>
											<th scope="col">Ruas</th>
											<th scope="col">Kota / Kab</th>
											<th scope="col">Stat</th>
											<th scope="col">P(KM)</th>
											<th scope="col">L(M)</th>

											<th scope="col">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php foreach ($data as $d) : ?>
											<tr>
												<td></td>
												<td><?= $d['ruas']; ?></td>
												<td><?= $d['kota']; ?></td>
												<td><?= $d['status']; ?></td>
												<td><?= $d['panjang']; ?></td>
												<td><?= $d['lebar']; ?></td>
												<td>

													<div class="table-data-feature">
														<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

														<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
													</div>
												</td>

											</tr>

										<?php endforeach; ?>

										<tr>
											<!-- <td>1</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>2</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>3</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>4</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>5</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>6</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr>
										<tr>
											<td>7</td>
											<td>60.13.K - BIAK</td>
											<td>BIAK NUMFOR</td>
											<td>Nas</td>
											<td>2.19</td>
											<td>3.5</td>
											<td>
												<div class="table-data-feature">
													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Edit"><i class="zmdi zmdi-edit"></i></a>

													<a href="#" class="item" data-toggle="tooltip" data-placement="top" title="Delete"><i class="zmdi zmdi-delete"></i></a>
												</div>
											</td>

										</tr> -->
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



</main>
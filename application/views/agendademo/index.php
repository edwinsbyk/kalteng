
<main class="main-content">
  <div class="section" id="section-content">
    <div class="container">
    	<div class="row">
              <div class="col-lg-2">
                
              </div>
              <div class="col-lg-8">
              	<div><h2 style="text-align: center;"><span style="text-decoration: underline;"><strong><?= $data->judul ?></strong></span></h1>
              	</p></div>
               		<div> </div><br>
                  <div> <img src="<?= $data->image ?>"></div>
              
              </div>
              <div class="col-lg-2">
                
              </div>
            </div><br><br>
       <div class="row">
              <div class="col-lg-2">
                
              </div>
              <div class="col-lg-8">
                  <div> <?= $data->isi ?></div>
                    Mulai  : <span style="color: #e03e2d;"><?= $data->tanggal_mulai ?></span> <br>
                    Selesai: <span style="color: #e03e2d;"><?= $data->tanggal_mulai ?></span>
              </div>
              <div class="col-lg-2">
                
              </div>
            </div>
     <div>
  </div>
  
</main>
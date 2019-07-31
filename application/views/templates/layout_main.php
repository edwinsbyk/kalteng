<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?php foreach ($css_list as $css) { ?>
        <link rel="stylesheet" href="<?= base_url($css) ?>">
    <?php } ?>
    <title><?= $title ?></title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="<?= base_url("assets/img/apple-touch-icon.png") ?>">
    <link rel="icon" href="<?= base_url("assets/img/favicon.png") ?>">

    <!--  Open Graph Tags -->
    <meta property="og:title" content="TheSaaS">
    <meta property="og:description" content="A responsive, professional, and multipurpose SaaS, Software, Startup and WebApp landing template powered by Bootstrap 4.">
    <meta property="og:image" content="http://thetheme.io/thesaas/assets/img/og-img.jpg">
    <meta property="og:url" content="http://thetheme.io/thesaas/">
    <meta name="twitter:card" content="summary_large_image">
    <script src="<?= base_url('assets/admin/vendor/jquery-3.2.1.min.js') ?>"></script>
</head>
<body>
    <?php 
        $this->load->view("templates/navbar");
        if (is_array($path)) {
            foreach ($path as $p) {
                $this->load->view($p);
            }
        } else {
            $this->load->view($path);
        }
    ?>
</body>
    <?php 
        $this->load->view("templates/footer");
    ?>
</html>
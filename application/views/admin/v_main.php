<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if (isset($list_css_plugins)){
    foreach ($list_css_plugins as $key) {?>
        <link href="<?php echo base_url($key) ?>" rel="stylesheet" media="all">
    <?php }} ?>
    <script src="<?= base_url("assets/plugin/tinymce/tinymce.min.js") ?>"></script>
    <title><?=$title?></title>
</head>
<body class="animsition">
    <main>
        <div class="page-wrapper">
            <?php 
                $this->load->view("admin/v_sidebar");
            ?>
            <div class="page-container">
            <?php 
                $this->load->view("admin/v_header");
                $this->load->view($path); 
            ?>
            </div>
            </div>
    </main>
</body>
    <footer>
        <?php if (isset($list_js_plugins)){
        foreach ($list_js_plugins as $key) {?>
            <script src="<?php echo base_url($key) ?>"></script>
        <?php }} ?>
        
    </footer>
</html>
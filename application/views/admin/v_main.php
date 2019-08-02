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
    <script src="<?= base_url('assets/admin/vendor/jquery-3.2.1.min.js') ?>"></script>
    <script src="<?= base_url("assets/plugin/tinymce/tinymce.min.js") ?>"></script>
        <script>
                tinymce.init({
                selector: "textarea.tinyarea",
                plugins: [
                    "advlist autolink lists link image charmap print preview hr anchor pagebreak",
                    "searchreplace wordcount visualblocks visualchars code fullscreen",
                    "insertdatetime nonbreaking save table contextmenu directionality",
                    "emoticons template paste textcolor colorpicker textpattern"
                ],
                toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image responsivefilemanager",
                automatic_uploads: true,
                image_advtab: true,
                images_upload_url: "<?= base_url("files/image_acceptor") ?>",
                file_picker_types: 'image',
                paste_data_images: true,
                relative_urls: true,
                remove_script_host: true,
                    file_picker_callback: function(cb, value, meta) {
                    var input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');
                    input.onchange = function() {
                        var file = this.files[0];
                        var reader = new FileReader();
                        reader.readAsDataURL(file);
                        reader.onload = function() {
                            var id = 'post-image-' + (new Date()).getTime();
                            var blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            var blobInfo = blobCache.create(id, file, reader.result);
                            blobCache.add(blobInfo);
                            cb(blobInfo.blobUri(), {
                                title: file.name
                            });
                        };
                    };
                    input.click();
                }
            });
        </script>
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
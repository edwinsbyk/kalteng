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
    <script src="<?= base_url('assets/admin/vendor/jquery-3.2.1.min.js') ?>"></script>
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
        <script>
            tinymce.init({
                selector: 'textarea.tinyarea',
                mode : "specific_textareas",
                height: 500,
                plugins: 'preview fullpage searchreplace autolink directionality visualblocks visualchars fullscreen image link media template codesample table charmap hr pagebreak nonbreaking anchor toc insertdatetime advlist lists wordcount imagetools textpattern help',
                toolbar: 'formatselect | bold italic strikethrough forecolor backcolor permanentpen formatpainter | link image media pageembed | alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent | removeformat | addcomment',
                images_upload_url: "<?= base_url("files/image_acceptor") ?>",
                automatic_uploads: true,
                images_upload_handler: function (blobInfo, success, failure) {
                    var xhr, formData;
                    console.log(blobInfo);
                    xhr = new XMLHttpRequest();
                    xhr.withCredentials = false;
                    xhr.open('POST', "<?= base_url("files/image_acceptor") ?>");
                    xhr.setRequestHeader('Content-Type', "application/octet-stream");
                    xhr.onload = function() {
                        var json;
                    
                        if (xhr.status != 200) {
                            failure('HTTP Error: ' + xhr.status);
                            return;
                        }
                    
                        json = JSON.parse(xhr.responseText);
                    
                        if (!json || typeof json.location != 'string') {
                            failure('Invalid JSON: ' + xhr.responseText);
                            return;
                        }
                    
                        success(json.location);
                    };
                
                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());
                
                    xhr.send(formData);
                },
            });
        </script>
    </footer>
</html>
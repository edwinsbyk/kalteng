            <!-- MAIN CONTENT-->
            <div class="col-lg-12" style="background-color: white">
                <div class="card-body card-block">
                    <?= form_open_multipart('files/do_upload'); ?>
                    <div class="form-group row">
                        <label for="alias" class="col-sm-2 col-form-label">Alias</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="alias" name="alias">
                        </div>
                    </div>
                    <div class=" form-group row">
                        <div class="col-sm-2">File</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="file_name" name="file_name">
                                        <label class="custom-file-label" for="image">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </div>
                    </form>
                </div>

                <script>
                    $('.custom-file-input').on('change', function() {
                        let fileName = $(this).val().split('\\').pop();
                        $(this).next('.custom-file-label').addClass("selected").html(fileName);
                    });
                </script>
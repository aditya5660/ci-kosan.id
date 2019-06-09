<div class="col-lg-9 col-md-12 col-sm-12 col-pad">
    <div class="content-area5">
        <div class="dashboard-content">
            <div class="dashboard-header clearfix">
                <div class="row">
                    <div class="col-sm-12 col-md-6"><h4>Hello , Tom</h4></div>
                    <div class="col-sm-12 col-md-6">
                        <div class="breadcrumb-nav">
                            <ul>
                                <li>
                                    <a href="#">Index</a>
                                </li>
                                <li>
                                    <a href="#" class="active">Blog</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submit-address dashboard-list">
                <form method="post" action="<?php base_url('admin/blogpost') ?>" enctype="multipart/form-data" >
                    <h4 class="bg-grea-3">Tambah Artikel</h4>
                    <div class="search-contents-sidebar">
                        <div class="row pad-20">
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label>Judul Artikel</label>
                                    <input type="text" class="input-text" name="judulArtikel" placeholder="Title">
                                </div>
                            </div>
                            
                            <div class="col-lg-8 col-md-8 col-sm-12">
                                <div class="form-group">
                                    <label for="Detail">Post</label>
                                    <textarea name="editor" id="editor"></textarea>
                                </div>
                            </div>
                    </div>
                    <h4 class="bg-grea-3">Foto Kosan</h4>
                    <div class="row pad-20">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="name">Photo</label>
                                    <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>" type="file" name="image" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('image') ?>
                                    </div>
                                </div>
                            </div>
                            </div>
                        <div class="col-lg-4 col-md-12 col-sm-12">
                            <button type="submit" class="btn btn-md button-theme">Tambah Artikel</button>
                        </div>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
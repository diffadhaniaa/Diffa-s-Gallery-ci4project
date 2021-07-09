<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>

<br>
<div id="layoutSidenav_content">   
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Add News</h3></div>
                                    <div class="card-body">
                                    
                                        <form action="/news/save" method="post" enctype="multipart/form-data">
                                        <?= csrf_field(); ?>
                                            
                                       <!-- <div class="form-group"> -->
                                            <!-- <label for="gambar">Gambar</label>
                                            <div class="col-sm-3">
                                            <img src="/assets/img/thumbnail.jpg" class="img-thumbnail img-preview">
                                            </div> -->
                                            
                                            <!-- <div class="input-group">
                                                <div class="custom-file">
                                                   <input type="file" class="custom-file-input" id="gambar" name="gambar" onchange="previewImg()" required>
                                                   <label class="custom-file-label" for="gambar">Pilih Gambar..</label>
                                                </div>
                                            </div> -->
                                        <!-- </div> -->
                                            <div class="form-group">
                                                        <label class="small mb-1" for="inputConfirmPassword">Judul</label>
                                                        <input class="form-control py-4" name="judul" placeholder="Masukkan Judul" type="text" required />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1">Keterangan</label>
                                                <input class="form-control py-4" type="text" name="keterangan" placeholder="Masukkan Keterangan" required />
                                            </div>
                                            <div class="form-group mt-4 mb-0">
                                            <button class="btn btn-primary btn-block" type="submit">Add</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
                </div>
<?= $this->endSection(); ?>

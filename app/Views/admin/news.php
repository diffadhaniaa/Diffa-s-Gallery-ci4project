<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>


<div id="layoutSidenav_content">         
<main>
   
            <div class="container-fluid">
            <h1 class="mt-4">News</h1>
            <div class="container">
            <a href="/add_news"><button type="submit" class="btn btn">+ Add News</button></a>
            </div>

            <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
            </div>
            <?php endif; ?>
    
              <div class="card-body">
                  <div class="table-responsive">
                    <div class="row">
                        <div class="col">
                            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0" action="" method="post">
                                <div class="input-group">
                                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" name="keyword">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit" name="submit"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                             </form>
                        </div>
                    </div>
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                    <th scope="col">No</th>
                    <!-- <th scope="col">Gambar</th> -->
                    <th scope="col">Judul</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Keterangan</th>
                    <th colspan="2">Action</th>
                    </tr>
                </thead>
                
                <tbody>
                <?php $i = 1 +(6 * ($currentPage - 1)); ?>
                <?php foreach ($news as $n) : ?>
                    <tr>
                    <td scope="row"><?= $i++; ?></td>
                   
                    <td><?= substr($n['judul'], 0, 30) ?></td>
                    <td><?= substr($n['slug'], 0, 30) ?></td>
                    <td><?= substr($n['keterangan'], 0, 70) ?></td>
                    <td><a href="/news/edit_news/<?= $n['slug']; ?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="news/delete/<?= $n['id']; ?>" onclick="return confirm('hapus data?')"><i class="fas fa-trash"></i></a></td>
                <?php endforeach ?>
                    </tr>
                </tbody>
                   
                </table>
                <?= $pager->links('news', 'news_pagination'); ?>
                </div>  
            </div>
        </main>
           
<?= $this->endSection(); ?>
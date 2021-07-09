<?= $this->extend('layout/template_admin'); ?>
<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Feedback</h1>
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor</th>
                                        <th>keterangan</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($feedback as $f ) : ?>
                                        <tr>
                                            <td scope="row"><?= $i++; ?></td>
                                            <td><?= $f['nama']; ?></td>
                                            <td><?= $f['email']; ?></td>
                                            <td><?= $f['nomor']; ?></td>
                                            <td><?= $f['keterangan']; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                      
                    </div>
                </main>
<?= $this->endSection(); ?>
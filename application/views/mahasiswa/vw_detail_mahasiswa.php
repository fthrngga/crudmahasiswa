<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul ?></h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Detail Mahasiswa
                </div>
                <div class="card-body">
                    <h2 class="card-title"><?= $mahasiswa['nama']; ?></h2>
                    <h6 class="card-subtitle mb-2 text-muted">
                    <?= $mahasiswa['email']; ?>
                    </h6>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;NIM</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['nim']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;Jenis Kelamin</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['jenis_kelamin']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;Prodi</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['prodi']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;Asal Sekolah</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['asal_sekolah']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;No HP</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['no_hp']; ?></div>
                </div>
                <div class="row">
                    <div class="col-md-4">&nbsp;Alamat</div>
                    <div class="col-md-2">:</div>
                    <div class="col-md-6"><?= $mahasiswa['alamat']; ?></div>
                </div>
                <br>
            </div>
            <div class="card-footer justify-content-center">
                <a href="<?= base_url('index.php/Mahasiswa')?>" class="btn 
                btn-danger">Tutup</a>
            </div>
        </div>
    </div>
</div>
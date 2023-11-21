
<!-- Page content-->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul ?></h1>
    <div class="col-md-6"><a href="<?= base_url()?>index.php/Calon_presiden/tambah" class="btn btn-info mb-2">Tambah
        Calon Presiden</a></div>
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>NIK</td>
                    <td>Asal</td>
                    <td>Partai</td>
                    <td>Riwayat Pekerjaan</td>
                    <td>Umur</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($calon_presiden as $us) : ?>
                <tr>
                    <td><?= $i; ?>.</td>
                    <td><?= $us['namaLengkap']; ?></td>
                    <td><?= $us['nik']; ?></td>
                    <td><?= $us['asal']; ?></td>
                    <td><?= $us['partai']; ?></td>
                    <td><?= $us['riwayatPekerjaan']; ?></td>
                    <td><?= $us['umur']; ?></td>
                    <td>
                        <a href="<?= base_url('index.php/Calon_presiden/hapus/'). $us['id']; ?>" class="btn btn-danger">Hapus</a>
                        <a href="<?= base_url('index.php/Calon_presiden/edit/'). $us['id']; ?>" class="btn btn-warning">Edit</a>
                        
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
            
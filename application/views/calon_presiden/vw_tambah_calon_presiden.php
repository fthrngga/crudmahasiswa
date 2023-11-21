<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul ?></h1>
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header justify-content-center">
                Form Tambah Data Calon Presiden
            </div>

            <div class="card-body">
                <form action="<?= base_url('index.php/Calon_presiden/upload'); ?>" method ="POST">
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="namaLengkap" class="form-control" id="namaLengkap"
                        placeholder ="Nama"><br>
                    </div>
                    <div class="form-group">
                        <label for="nim">NIK</label>
                        <input type="text" name="nik" class="form-control" id="nik"
                        placeholder ="NIK"><br>
                    </div>
                    <div class="form-group">
                        <label for="email">Asal</label>
                        <input type="text" name="asal" class="form-control" id="asal"
                        placeholder ="Asal"><br>
                    </div>
                    <div class="form-group">
                        <label for="asal_sekolah">Partai Pendukung</label>
                        <input type="text" name="partai" class="form-control" id="partai"
                        placeholder ="Partai Pendukung"><br>
                    </div>
                    <div class="form-group">
                        <label for="no_hp">Riwayat Pekerjaan</label>
                        <input type="text" name="riwayatPekerjaan" class="form-control" id="riwayatPekerjaan"
                        placeholder ="Riwayat Pekerjaan"><br>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Umur</label>
                        <input type="text" name="umur" class="form-control" id="umur"
                        placeholder ="Umur"><br>
                    </div>
                    <a href="<?= base_url('index.php/Calon_presiden')?>" class="btn btn-danger">Tutup</a>
                    <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah
                        Data
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>    
<div class="container">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center text-dark mt-5">Registrasi</h2>
            <div class="card my-5">
                <form action="<?= base_url('index.php/auth/cek_regis'); ?>" method="POST" class="card-body cardbody-color p-lg-5">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="Username" name="nama" placeholder="nama">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="email" name="email" placeholder="email">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100">Daftar</button></div>
                    <div id="emailHelp" class="form-text text-center mb-5 text-dark">Have an 
                        Account? <a href="<?= base_url('index.php/Auth') ?>" class="text-dark fw-bold"> Login
                            </a>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
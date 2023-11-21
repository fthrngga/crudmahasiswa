<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Fathur Bootstrap CI</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?= base_url('assets/')?>assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?= base_url('assets/')?>css/styles.css" rel="stylesheet" />
        <style>
            img {
        width: 30px;
        height: 30px;
    }
        </style>
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light">BPF TI A 2023</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="#!">Dashboard</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="<?= site_url('Mahasiswa/') ?>">Mahasiswa</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" 
                    href="<?= site_url('Prodi/') ?>">Prodi</a>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
                    <div class="container-fluid">
                        <button class="btn btn-primary" id="sidebarToggle">Toggle Menu</button>
                        
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" 
                        aria-expanded="false" aria-label="Toggle navigation"><span 
                        class="navbar-toggler-icon"></span></button>
                        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                                
                            <span class="mr-2 d-none d-lg-inline text-gray-600-small"><?= $user['nama']; ?>&nbsp;</span>
                            <img class="img-profile rounded-circle" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>">
                                <li class="nav-item active"><a class="nav-link" href="<?= base_url('index.php/auth/logout') ?>">LogOut</a></li>

                            </ul>
                        </div>
                    </div>
                </nav>
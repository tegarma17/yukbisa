<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>SDN Kebun 1 Kamal</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="/template/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/node_modules/@fortawesome/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/template/node_modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="/template/node_modules/selectric/public/selectric.css">
    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="/template/assets/css/style.css">
    <link rel="stylesheet" href="/template/assets/css/components.css">
</head>


<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
                        <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
                    </ul>

                </form>
                <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="/template/assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="dropdown-title">Logged in 5 min ago</div>
                            <a href="features-profile.html" class="dropdown-item has-icon">
                                <i class="far fa-user"></i> Profile
                            </a>
                            <a href="features-settings.html" class="dropdown-item has-icon">
                                <i class="fas fa-cog"></i> Settings
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="#" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="<?= base_url('home') ?>">SDN Kebun 1 Kamal</a>
                    </div>
                    <!-- <div class="sidebar-brand sidebar-brand-sm">
                        <a href="index.html">St</a>
                    </div> -->
                    <ul class="sidebar-menu">
                        <li class="menu-header">Data Induk</li>
                        <li>
                            <a href="<?= base_url('siswa') ?>"><i class="fas fa-user"></i><span>Data Siswa</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('guru') ?>"><i class="fas fa-user-graduate"></i><span>Data Guru</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('kepsek') ?>"><i class="fas fa-user-graduate"></i><span>Data Kepala Sekolah</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('kelas') ?>"><i class="fas fa-building"></i><span>Data Kelas</span></a>
                        </li>
                        <li class="menu-header">Data Set Kelas</li>
                        <li>
                            <a href="<?= base_url('ruangkelas') ?>"><i class="fas fa-building"></i> <span>Data Kelas Siswa</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('walikelas') ?>"><i class="fas fa-user-graduate"></i> <span>Data Walikelas</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('mapel') ?>"><i class="fas fa-book"></i> <span>Data Mata Pelajaran</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('ekstra') ?>"><i class="fas fa-basketball-ball "></i> <span>Data Ekstrakulikuler</span></a>
                        </li>
                        <li class="menu-header">Data Nilai</li>
                        <li>
                            <a href="<?= base_url('n_spiritual') ?>"><i class="fas fa-edit"></i> <span>Nilai Spiritual</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('n_sosial') ?>"><i class="fas fa-edit"></i> <span>Nilai Sosial</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('n_pengetahuan') ?>"><i class="fas fa-edit"></i> <span>Nilai Pengetahuan</span></a>
                        </li>
                        <li>
                            <a href="<?= base_url('n_keterampilan') ?>"><i class="fas fa-edit"></i> <span>Nilai Keterampilan</span></a>
                        </li>
                        <li class="menu-header">Data Laporan</li>
                        <li>
                            <a href="<?= base_url('laporan') ?>"><i class="fas fa-clipboard"></i> <span>Laporan</span></a>
                        </li>



                        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
                            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                                <i class="fas fa-rocket"></i> Documentation
                            </a>
                        </div>
                </aside>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                <?= $this->renderSection('content') ?>
            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; <?php echo date("Y"); ?> <div class="bullet"></div> Design By <a href="">Tegar Maulana A</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="/template/node_modules/jquery/dist/jquery.min.js"></script>
    <script src="/template/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/template/node_modules/jquery.nicescroll/dist/jquery.nicescroll.min.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"> -->
    </script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"> -->
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/template/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="/template/node_modules/cleave.js/dist/cleave.min.js"></script>
    <script src="/template/node_modules/cleave.js/dist/addons/cleave-phone.us.js"></script>
    <script src="/template/node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="/template/node_modules/bootstrap-daterangepicker/daterangepicker.js"></script>
    <script src="/template/node_modules/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
    <script src="/template/node_modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
    <script src="/template/node_modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="/template/node_modules/select2/dist/js/select2.full.min.js"></script>
    <script src="/template/node_modules/selectric/public/jquery.selectric.min.js"></script>
    <!-- Template JS File -->
    <script src="/template/assets/js/scripts.js"></script>
    <script src="/template/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    <script src="/template/assets/js/sweetalert2.all.js"></script>
    <script src="/template/assets/js/myscript.js"></script>
    <script src="/template/assets/js/page/forms-advanced-forms.js"></script>
</body>

</html>
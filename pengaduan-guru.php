<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./img/school-solid-full.svg" type="image/x-icon" />

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>
<script>
$(document).ready(function(){
    $('.tanggapi-btn').click(function(){
        let id = $(this).data('id');
        let nama = $(this).data('nama');
        let judul = $(this).data('judul');
        let isi = $(this).data('isi');
        let status = $(this).data('status');

        $('#id_pengaduan').val(id);
        $('#nama_siswa').val(nama);
        $('#judul').val(judul);
        $('#isi_pengaduan').val(isi);
        $('#status').val(status);
    });
});
</script>


<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon">
                    <img src="./img/school-solid-full.svg" alt="Logo" style="width: 40px; height: 40px;">
                </div>
                <div class="sidebar-brand-text mx-3">Siskolah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Keuangan
            </div>

            <!-- Nav Item - Subsidi Pemerintah -->
            <li class="nav-item">
                <a class="nav-link" href="subsidi-pemerintah.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Subsidi Pemerintah</span></a>
            </li>

            <!-- Nav Item - SPP -->
            <li class="nav-item">
                <a class="nav-link" href="spp.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>SPP</span></a>
            </li>

            <!-- Nav Item - Pengeluaran -->
            <li class="nav-item">
                <a class="nav-link" href="pengeluaran.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengeluaran</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Informasi Sekolah
            </div>

            <!-- Nav Item - Menu Kolaborasi Biodata -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBiodata"
                    aria-expanded="true" aria-controls="collapseBiodata">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Biodata</span>
                </a>
                <div id="collapseBiodata" class="collapse" aria-labelledby="headingBiodata"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Biodata Pengguna:</h6>
                        <a class="collapse-item" href="biodata-admin.html">Admin</a>
                        <a class="collapse-item" href="biodata-guru.html">Guru</a>
                        <a class="collapse-item" href="biodata-siswa.html">Siswa</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Kelas -->
            <li class="nav-item">
                <a class="nav-link" href="kelas.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Kelas</span></a>
            </li>

            <!-- Nav Item - Guru Mapel -->
            <li class="nav-item">
                <a class="nav-link" href="guru-mapel.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Guru Mapel</span></a>
            </li>

            <!-- Nav Item - Mata Pelajaran -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMapel"
                    aria-expanded="true" aria-controls="collapseMapel">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Mata Pelajaran</span>
                </a>
                <div id="collapseMapel" class="collapse" aria-labelledby="headingMapel" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelas X :</h6>
                        <a class="collapse-item" href="#">X A</a>
                        <a class="collapse-item" href="#">X B</a>
                        <a class="collapse-item" href="#">X C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XI :</h6>
                        <a class="collapse-item" href="#">XI A</a>
                        <a class="collapse-item" href="#">XI B</a>
                        <a class="collapse-item" href="#">XI C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XII :</h6>
                        <a class="collapse-item" href="#">XII A</a>
                        <a class="collapse-item" href="#">XII B</a>
                        <a class="collapse-item" href="#">XII C</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Nilai Siswa
            </div>

            <!-- Nav Item - Absensi Guru -->
            <li class="nav-item">
                <a class="nav-link" href="absensi-guru.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Absensi Guru</span></a>
            </li>

            <!-- Nav Item - Absensi Siswa -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAbsensiSiswa"
                    aria-expanded="true" aria-controls="collapseAbsensiSiswa">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Absensi Siswa</span>
                </a>
                <div id="collapseAbsensiSiswa" class="collapse" aria-labelledby="headingAbsensiSiswa" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelas X :</h6>
                        <a class="collapse-item" href="#">X A</a>
                        <a class="collapse-item" href="#">X B</a>
                        <a class="collapse-item" href="#">X C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XI :</h6>
                        <a class="collapse-item" href="#">XI A</a>
                        <a class="collapse-item" href="#">XI B</a>
                        <a class="collapse-item" href="#">XI C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XII :</h6>
                        <a class="collapse-item" href="#">XII A</a>
                        <a class="collapse-item" href="#">XII B</a>
                        <a class="collapse-item" href="#">XII C</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Nilai Siswa -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseNilaiSiswa"
                    aria-expanded="true" aria-controls="collapseNilaiSiswa">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Nilai Siswa</span>
                </a>
                <div id="collapseNilaiSiswa" class="collapse" aria-labelledby="headingNilaiSiswa" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Kelas X :</h6>
                        <a class="collapse-item" href="#">X A</a>
                        <a class="collapse-item" href="#">X B</a>
                        <a class="collapse-item" href="#">X C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XI :</h6>
                        <a class="collapse-item" href="#">XI A</a>
                        <a class="collapse-item" href="#">XI B</a>
                        <a class="collapse-item" href="#">XI C</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Kelas XII :</h6>
                        <a class="collapse-item" href="#">XII A</a>
                        <a class="collapse-item" href="#">XII B</a>
                        <a class="collapse-item" href="#">XII C</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Heading -->
            <div class="sidebar-heading">
                Masukan
            </div>

            <!-- Nav Item - Pengaduan -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePengaduan"
                    aria-expanded="false" aria-controls="collapsePengaduan">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Pengaduan</span>
                </a>

                <div id="collapsePengaduan" class="collapse" aria-labelledby="headingPengaduan" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Jenis Pengaduan:</h6>
                        <a class="collapse-item" href="pengaduan.php">Pengaduan Siswa</a>
                        <a class="collapse-item" href="pengaduan-guru.php">Pengaduan Guru</a>
                    </div>
                </div>
            </li>


            <!-- Nav Item - Kritik & Saran -->
            <li class="nav-item">
                <a class="nav-link" href="kritik-saran.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Kritik & Saran</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            <div class="sidebar-card d-none d-lg-flex">
                <img class="sidebar-card-illustration mb-2" src="img/undraw_rocket.svg" alt="...">
                <p class="text-center mb-2"><strong>SB Admin Pro</strong> is packed with premium features, components, and more!</p>
                <a class="btn btn-success btn-sm" href="https://startbootstrap.com/theme/sb-admin-pro">Upgrade to Pro!</a>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <?php
                //memanggil koneksi
                include ('./library/koneksi.php');
                ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Header Page -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <!-- Judul Halaman -->
                        <h1 class="h3 text-gray-800 mb-0">Pengaduan</h1>

                        <!-- Breadcrumb -->
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Data Pengaduan</li>
                        </ol>
                    </div>

                     <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-flex justify-content-between align-items-center">
                            <!-- Judul Card -->
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Data Pengaduan</h6>

                            <!-- Container tombol -->
                            <div class="d-flex align-items-center">
                                <!-- Tombol Tambah Kelas -->
                                <a href="tambah-pengaduan.php" class="btn btn-sm btn-primary btn-icon-split mr-2 btn-equal">
                                    <span class="icon text-white-50">
                                        <i class="fas fa-plus"></i>
                                    </span>
                                    <span class="text">Tambah Pengaduan<span>
                                </a>

                                <!-- Tombol Visibility Dropdown -->
                                <div class="dropdown mr-2">
                                    <button class="btn btn-sm btn-secondary dropdown-toggle btn-equal align-items-center" type="button" 
                                            id="dropdownVisibility" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-eye mr-1"></i>
                                        </span>
                                        <span class="text">Visibility</span>
                                    </button>
                                    <div class="dropdown-menu p-3" aria-labelledby="dropdownVisibility">
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="0" id="colID" checked>
                                            <label class="form-check-label" for="colID">ID Pengaduan </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="1" id="colNama" checked>
                                            <label class="form-check-label" for="colNama">Nisn</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="2" id="colTanggalTanggapan" checked>
                                            <label class="form-check-label" for="colTanggalTanggapan">Nama Siswa</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="3" id="colJenis" checked>
                                            <label class="form-check-label" for="colJenis">Tanggal Pengaduan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="4" id="colIsi" checked>
                                            <label class="form-check-label" for="colIsi">Judul</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="5" id="colTanggapan" checked>
                                            <label class="form-check-label" for="colTanggapan">Isi Pengaduan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="6" id="colTanggalTanggapan" checked>
                                            <label class="form-check-label" for="colStatus">Status</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="7" id="colTanggalTanggapan" checked>
                                            <label class="form-check-label" for="colTanggapan">Tanggapan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="8" id="colTanggalTanggapan" checked>
                                            <label class="form-check-label" for="colTanggalTanggapan">Tanggal Tanggapan</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="9" id="colTanggalTanggapan" checked>
                                            <label class="form-check-label" for="colTanggapi">Tanggapi</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="10" id="colEdit" checked>
                                            <label class="form-check-label" for="colEdit">Edit</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input col-toggle" type="checkbox" value="11" id="colHapus" checked>
                                            <label class="form-check-label" for="colHapus">Hapus</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Dropdown Generate Report -->
                                <div class="dropdown">
                                    <a class="btn btn-sm btn-primary dropdown-toggle shadow-sm" href="#" 
                                        id="dropdownReport" role="button" data-toggle="dropdown" 
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="fas fa-download fa-sm text-white-50 mr-1"></i> Generate Report
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownReport">
                                        <a class="dropdown-item export-pdf" href="#">
                                            <i class="fas fa-file-pdf fa-sm text-danger mr-2"></i> Export PDF
                                        </a>
                                        <a class="dropdown-item export-excel" href="#">
                                            <i class="fas fa-file-excel fa-sm text-success mr-2"></i> Export Excel
                                        </a>
                                        <a class="dropdown-item export-csv" href="#">
                                            <i class="fas fa-file-csv fa-sm text-info mr-2"></i> Export CSV
                                        </a>
                                        <a class="dropdown-item export-copy" href="#">
                                            <i class="fas fa-copy fa-sm text-dark mr-2"></i> Copy
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item export-print" href="#">
                                            <i class="fas fa-print fa-sm text-primary mr-2"></i> Print
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID Pengaduan</th>
                                            <th>Nisn</th>
                                            <th>Nama Siswa</th>
                                            <th>Tanggal Pengaduan</th>
                                            <th>Judul</th>
                                            <th>Isi Pengaduan</th>
                                            <th>Status</th>
                                            <th>Tanggapan</th>
                                            <th>Tanggal Tanggapan</th>
                                            <th>Tanggapi</th>
                                            <th>Edit</th>
                                            <th>Hapus</th>
                                        </tr>
                                    </thead>
<tbody>
<?php
$sql = "SELECT p.id_pengaduan, p.nisn, s.nama_lengkap, 
               p.tanggal_pengaduan, p.judul, p.isi_pengaduan, 
               p.status, p.tanggapan, p.tanggal_tanggapan
        FROM pengaduan_siswa p
        JOIN siswa s ON p.nisn = s.nisn
        ORDER BY p.id_pengaduan DESC";

$query = mysqli_query($koneksi, $sql);
while($result = mysqli_fetch_array($query)) {
?>
<tr>
    <td><?= $result['id_pengaduan']; ?></td>
    <td><?= $result['nisn']; ?></td>
    <td><?= $result['nama_lengkap']; ?></td>
    <td><?= $result['tanggal_pengaduan']; ?></td>
    <td><?= $result['judul']; ?></td>
    <td><?= $result['isi_pengaduan']; ?></td>
    <td><?= $result['status']; ?></td>
    <td><?= $result['tanggapan']; ?></td>
    <td><?= $result['tanggal_tanggapan']; ?></td>
    
    <!-- Tombol Tanggapi -->
    <td class="text-center">
        <button class="btn btn-success btn-sm tanggapi-btn"
            data-id="<?= $result['id_pengaduan']; ?>"
            data-nama="<?= htmlspecialchars($result['nama_lengkap']); ?>"
            data-judul="<?= htmlspecialchars($result['judul']); ?>"
            data-isi="<?= htmlspecialchars($result['isi_pengaduan']); ?>"
            data-status="<?= htmlspecialchars($result['status']); ?>"
            data-toggle="modal"
            data-target="#modalTanggapan">
            <i class="fas fa-comment-dots"></i> Tanggapi
        </button>
    </td>

    <!-- Tombol Edit -->
     <td class="text-center">
    <a href="edit-pengaduan.php?id_pengaduan=<?= $result['id_pengaduan']; ?>" 
       class="btn btn-primary btn-sm" 
       style="border-radius: 8px;">
        <i class="fas fa-pen"></i> Edit
    </a>
    </td>

    <!-- Tombol Hapus -->
    <td class="text-center">
    <a href="hapus-pengaduan.php?id_pengaduan=<?= $result['id_pengaduan']; ?>" 
       onclick="return confirm('Yakin ingin menghapus data ini?')" 
       class="btn btn-danger btn-sm"
       style="border-radius: 8px;">
        <i class="fas fa-trash"></i> Hapus
    </a>
</td>
</tr>
<?php } ?>
</tbody>
<tfoot>
<tr>
    <th>ID Pengaduan</th>
    <th>Nisn</th>
    <th>Nama Siswa</th>
    <th>Tanggal Pengaduan</th>
    <th>Judul</th>
    <th>Isi Pengaduan</th>
    <th>Status</th>
    <th>Tanggapan</th>
    <th>Tanggal Tanggapan</th>
    <th>Tanggapi</th>
    <th>Edit</th>
    <th>Hapus</th>
</tr>
</tfoot>

                                </table>
                            </div>
                            <!-- Modal Tanggapan -->
<div class="modal fade" id="modalTanggapan" tabindex="-1" role="dialog" aria-labelledby="modalTanggapanLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <form action="proses-tanggapan.php" method="POST">
      <div class="modal-content">
        <div class="modal-header bg-primary text-white">
          <h5 class="modal-title" id="modalTanggapanLabel">Tanggapi Pengaduan</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
            <span>&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <input type="hidden" name="id_pengaduan" id="id_pengaduan">

          <div class="form-group">
            <label for="nama_siswa">Nama Siswa</label>
            <input type="text" id="nama_siswa" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label for="judul">Judul Pengaduan</label>
            <input type="text" id="judul" class="form-control" readonly>
          </div>

          <div class="form-group">
            <label for="isi_pengaduan">Isi Pengaduan</label>
            <textarea id="isi_pengaduan" class="form-control" rows="3" readonly></textarea>
          </div>

          <div class="form-group">
            <label for="tanggapan">Tanggapan Guru</label>
            <textarea name="tanggapan" id="tanggapan" class="form-control" rows="3" required></textarea>
          </div>

          <div class="form-group">
            <label for="tanggal_tanggapan">Tanggal Tanggapan</label>
            <input type="date" name="tanggal_tanggapan" id="tanggal_tanggapan" class="form-control" required>
          </div>

          <div class="form-group">
            <label for="status">Status Pengaduan</label>
            <select name="status" id="status" class="form-control" required>
                <option value="Diajukan">Diajukan</option>
              <option value="Diproses">Diproses</option>
              <option value="Selesai">Selesai</option>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"></i> Kirim</button>
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        </div>
      </div>
    </form>
  </div>
</div>

                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
<script>
document.addEventListener("DOMContentLoaded", function() {
  const buttons = document.querySelectorAll(".tanggapi-btn");
  buttons.forEach(btn => {
    btn.addEventListener("click", function() {
      document.getElementById("id_pengaduan").value = this.dataset.id;
      document.getElementById("nama_siswa").value = this.dataset.nama;
      document.getElementById("judul").value = this.dataset.judul;
      document.getElementById("isi_pengaduan").value = this.dataset.isi;
      document.getElementById("status").value = this.dataset.status;
    });
  });
});
</script>

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="vendor/datatables-buttons/css/buttons.bootstrap4.min.css">

    <!-- DataTables Buttons JS -->
    <script src="vendor/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="vendor/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="vendor/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="vendor/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="vendor/jszip/jszip.min.js"></script>
    <script src="vendor/pdfmake/pdfmake.min.js"></script>
    <script src="vendor/pdfmake/vfs_fonts.js"></script>

    <!-- Script custom toggle Visibility + hubungkan Generate Report -->
    <script>
    $(document).ready(function() {
        // Cek apakah DataTable sudah diinisialisasi
        var table;
        if ( ! $.fn.DataTable.isDataTable('#dataTable') ) {
            table = $('#dataTable').DataTable({
                dom: 'Bfrtip', // menampilkan tombol DataTables
                buttons: [
                    { extend: 'pdfHtml5', text: 'Export PDF', className: 'd-none' },
                    { extend: 'excelHtml5', text: 'Export Excel', className: 'd-none' },
                    { extend: 'csvHtml5', text: 'Export CSV', className: 'd-none' },
                    { extend: 'copyHtml5', text: 'Copy', className: 'd-none' },
                    { extend: 'print', text: 'Print', className: 'd-none' }
                ]
            });
        } else {
            table = $('#dataTable').DataTable();
        }

        // Hubungkan dropdown custom Generate Report
        $('#dropdownReport .dropdown-item').each(function() {
            var btnText = $(this).text().trim();
            $(this).on('click', function(e){
                e.preventDefault();
                table.button(btnText).trigger();
            });
        });

        // Toggle kolom Visibility
        $('.col-toggle').on('change', function() {
            var colIndex = $(this).val();
            var column = table.column(colIndex);
            column.visible($(this).is(':checked'));
        });
    });
    </script>


</body>

</html>
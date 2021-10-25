<?php
    include 'connect.php';
    session_start();
    
    if (!isset($_SESSION['email'])){
        header("location:index.php");
    }

?>

<!doctype html>
<html lang='en'>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Indoor Environment Quality</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
</head>

<body id=page-top>
        
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
            <div class="sidebar-brand-icon rotate-n-15"></div>
            <div class="sidebar-brand-text mx-3">BMS<br> RSGM UMY</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Lantai 1 -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLt1"
                aria-expanded="true" aria-controls="collapseLt1">
                <span>Lantai 1</span>
            </a>
            <div id="collapseLt1" class="collapse" aria-labelledby="headingLt1" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="poli_gigi_1.html">Poli Gigi 1</a>
                    <a class="collapse-item" href="poli_gigi_2.html">Poli Gigi 2</a>
                    <a class="collapse-item" href="404.html">Poli Gigi 3</a>
                    <a class="collapse-item" href="404.html">Poli Gigi 4</a>
                    <a class="collapse-item" href="404.html">Poli Gigi Anak</a>
                    <a class="collapse-item" href="404.html">Poli Pendidikan</a>
                    <a class="collapse-item" href="404.html">Ruang Tunggu</a>
                    <a class="collapse-item" href="404.html">Lobi</a>
                    <a class="collapse-item" href="404.html">Ruang Perawat</a>
                    <a class="collapse-item" href="404.html">Dental X-Ray 1</a>
                    <a class="collapse-item" href="404.html">Dental X-Ray 2</a>
                    <a class="collapse-item" href="404.html">Dental X-Ray 3</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Lantai 2 -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLt2"
                aria-expanded="true" aria-controls="collapseLt2">
                <span>Lantai 2</span>
            </a>
            <div id="collapseLt2" class="collapse" aria-labelledby="headingLt2"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="404.html">Poli Pendidikan</A></a>
                    <a class="collapse-item" href="404.html">Instalasi Rawat Inap 1</a>
                    <a class="collapse-item" href="404.html">Ruang Operasi</a>
                    <a class="collapse-item" href="404.html">Ruang Post-Operasi</a>
                    <a class="collapse-item" href="404.html">Ruang Pre-Operasi</a>
                    <a class="collapse-item" href="404.html">ICU</a>
                    <a class="collapse-item" href="404.html">Ruang Manajemen</a>
                    <a class="collapse-item" href="404.html">Ruang Direktur</a>
                    <a class="collapse-item" href="404.html">Ruang Tunggu Keluarga</a>
                    <a class="collapse-item" href="404.html">Nurse Station</a>
                    <a class="collapse-item" href="404.html">Area Diskusi</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Nav Item - Lanta 3 -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLt3"
                aria-expanded="true" aria-controls="collapseLt3">
                <span>Lantai 3</span>
            </a>
            <div id="collapseLt3" class="collapse" aria-labelledby="headingLt3"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="404.html">Poli Pendidikan</a>
                    <a class="collapse-item" href="404.html">Ruang OCSE</a>
                    <a class="collapse-item" href="404.html">Ruang Dosen</a>
                    <a class="collapse-item" href="404.html">Ruang Komite Medik</a>
                    <a class="collapse-item" href="404.html">Ruang PDGI</a>
                    <a class="collapse-item" href="404.html">Kantor Manajemen</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Lantai 4 -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLt4"
                aria-expanded="true" aria-controls="collapseUtilities">
                <span>Lantai 4</span>
            </a>
            <div id="collapseLt4" class="collapse" aria-labelledby="headingLt4"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="404.html">Poli Pendidikan </a>
                    <a class="collapse-item" href="404.html">Student Center</a>
                    <a class="collapse-item" href="404.html">Aula</a>
                    <a class="collapse-item" href="404.html">Mushola</a>
                </div>
            </div>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">
        <!-- Nav Item - Lantai 5 -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseLt5"
                aria-expanded="true" aria-controls="collapseUtilities">
                <span>Lantai 5</span>
            </a>
            <div id="collapseLt5" class="collapse" aria-labelledby="headingLt5"
                data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <a class="collapse-item" href="404.html">Kantor Manajemn</a>
                    <a class="collapse-item" href="404.html">Kantor Komisaris</a>
                </div>
            </div>
        </li>

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
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
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <!-- Sidebar Toggle (Topbar) End -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="ieq.php" role="button">
                                <span>Dashboard IEQ</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="material.php" role="button">
                                <span>Material Rendah Emisi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site.php" role="button">
                                <span>Site Plan</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sensor.php" role="button">
                                <span>Sensor</span>
                            </a>
                        </li>
                        
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </li>
                    </ul>
                    <!-- Topbar Navbar End -->
                </nav>
                <!-- Topbar End -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Material Rendah Emisi</h1>
                    <p class="mb-4">Berikut adalah daftar material yang berpotensi menghasilkan emisi di Ruang Poli Gigi 1, Lantai 1</p>
                
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Material yang berpotensi menghasilkan emisi </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Produk</th>
                                            <th>Batas emisi (VOC)</th>
                                            <th>Standar VOC produk yang digunakan</th>
                                            <th>Hasil Pengujian VOC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- prepping data -->
                                    <?php
                                    $query_material = $conn->query('SELECT produk, batas_voc, standar, pengujian_voc FROM rsgm.material_beremisi
                                    INNER JOIN rsgm.material_ruangan ON rsgm.material_beremisi.material_id = rsgm.material_ruangan.material_id
                                    WHERE ruangan_id = 1');
                                    while($row = $query_material->fetch()){
                                        echo "<tr><td>" . $row['produk'] .  "</td>";
                                        echo "<td>" . $row['batas_voc'] .  "</td>";
                                        echo "<td>" .$row['standar'] .  "</td>";
                                        echo "<td>" . $row['pengujian_voc'] . "</td></tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                    <!-- /.container-fluid -->
                    <a href="tambah_material.php" class="btn btn-success btn-icon-split mb-3">
                                        <span class="icon text-white-50">+</span>
                                        <span class="text text-base">Tambah Material Lainnya</span>
                    </a>
                </div>
            </div>
            <!-- End of Main Content -->

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

</body>

</html>
<?php
    include 'connect.php';

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
                        <a class="collapse-item" href="poli_gigi_3.html">Poli Gigi 3</a>
                        <a class="collapse-item" href="poli_gigi_4.html">Poli Gigi 4</a>
                        <a class="collapse-item" href="poli_gigi_anak.html">Poli Gigi Anak</a>
                        <a class="collapse-item" href="poli_pendidikan.html">Poli Pendidikan</a>
                        <a class="collapse-item" href="ruang_tunggu.html">Ruang Tunggu</a>
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
                        <a class="collapse-item" href="ruang_2A.html">IRNA 1</A></a>
                        <a class="collapse-item" href="ruang_2B.html">IRNA 2</a>
                        <a class="collapse-item" href="ruang_2C.html">Ruang Operasi</a>
                        <a class="collapse-item" href="ruang_2D.html">Ruang Post-Operasi</a>
                        <a class="collapse-item" href="ruang_2E.html">Ruang X-Ray 1</a>
                        <a class="collapse-item" href="ruang_2F.html">Ruang X-Ray 2</a>
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
                        <a class="collapse-item" href="ruang_3A.html">IRNA 1</a>
                        <a class="collapse-item" href="ruang_3B.html">IRNA 2</a>
                        <a class="collapse-item" href="ruang_3C.html">Poli Pendidikan 3</a>
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
                        <a class="collapse-item" href="ruang_4A.html">Aula</a>
                        <a class="collapse-item" href="ruang_4B.html">Ruang BoD</a>
                    </div>
                </div>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">


                        <!-- Nav Item - Alerts -->
                        <li class="nav-item">
                            <a class="nav-link" href="energi.php" role="button">
                                <span>Energi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="air.php" role="button">
                                <span>Air</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="site.php" role="button">
                                <span>Site Planning</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ieq.php" role="button">
                                <span>IEQ</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" role="button">
                                <span>LogOut</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Daftar Sensor</h1>
                    <p class="mb-4">Berikut adalah daftar sensor yang digunakan pada Ruang Poli Gigi 1, Lantai 1.
                        <br> Untuk mengunduh datasheet tiap sensor, silahkan klik link pada kolom Datasheet
                    </p>

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
                                            <th>Parameter</th>
                                            <th>Nama Sensor</th>
                                            <th>Datashet Sensor</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <!-- prepping data -->
                                    <?php
                                    $query_material = $conn->query('SELECT parameter_pengukuran, nama_sensor, link_datasheet FROM rsgm.sensor AS a
                                    INNER JOIN rsgm.ruangan_sensor as b ON a.sensor_id = b.sensor_id
                                    WHERE ruangan_id = 1;');
                                    while($row = $query_material->fetch()){
                                        echo "<tr><td>" . $row['parameter_pengukuran'] .  "</td>";
                                        echo "<td>" . $row['nama_sensor'] .  "</td>";
                                        echo "<td>" .$row['link_datasheet'] .  "</td>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

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

</body>

</html>
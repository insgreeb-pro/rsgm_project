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
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/style.css" rel="stylesheet">
    </head>

    <body class="bg-gradient-primary" id=page-top>
        
        <!-- Page Wrapper -->
        <div id="wrapper">
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">
                
            <!-- Main Content -->
            <div id="content m-5">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto px-5">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item">
                            <a class="nav-link" href="#" role="button">
                                <span>Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="survey.php" role="button">
                                <span>Survey Kenyamanan Ruang</span>
                            </a>
                        </li>
                        <div class="topbar-divider d-none d-sm-block"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="login.html" role="button">
                                <span>Login Admin</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                <!-- main landing page -->
                <div class="row">
                    <div class= "col-xl-7">
                        <div class="container">
                            <div class="d-sm-flex-column align-items-center justify-content-center px-5 py-5 m-3">
                                <h1 class="h1 mb-4 text-gray-800">Building Management System 
                                    <br> Rumah Sakit Gigi & Mulut UMY</h1>
                                <h2 class="h5 mb-4 text-gray-800"> Sistem menejemen bangunan Rumah Sakit Gigi dan Mulut 
                                    <br>Universitas Muhammadiyah Yogyakarta dalam upayanya<br>
                                    untuk menjadi rumah sakit ramah lingkungan</h2>
                
                                <a href="survey.php" class="btn btn-success btn-icon-split m-3">
                                    <span class="icon text-white-50">
                                    <i class="fas fa-check"></i>
                                    </span>
                                    <span class="text">Isi Survey Kenyamanan Pengunjung </span>
                                </a>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="container">
                            <div class="row justify-content-center">
                                
                                    <div class="card o-hidden border-0 shadow-lg my-5">
                                        <div class="card-body p-0">
                                            <!-- Nested Row within Card Body -->
                                            <div class="p-5">
                                                        <div class="text-center">
                                                            <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                                        </div>
                                                        <form class="user">
                                                            <div class="form-group">
                                                                <input type="email" class="form-control form-control-user"
                                                                    id="exampleInputEmail" aria-describedby="emailHelp"
                                                                    placeholder="Enter Email Address...">
                                                            </div>
                                                            <div class="form-group">
                                                                <input type="password" class="form-control form-control-user"
                                                                    id="exampleInputPassword" placeholder="Password">
                                                            </div>
                                                            <div class="form-group">
                                                                <div class="custom-control custom-checkbox small">
                                                                    <input type="checkbox" class="custom-control-input" id="customCheck">
                                                                    <label class="custom-control-label" for="customCheck">Remember
                                                                        Me</label>
                                                                </div>
                                                            </div>
                                                            <a href="indexieq.php" class="btn btn-primary btn-user btn-block">
                                                                Login
                                                            </a>
                                                        </form>
                                                        <hr>
                                                        <div class="text-center">
                                                            <a class="small" href="forgot-password.html">Forgot Password?</a>
                                                        </div>
                                            </div>                      
                                        </div>
                                    </div>

                                

                            </div>
                        </div>
                    </div>
                </div>
                <!-- main landing page end -->

            </div>
            <!-- main contain end -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- page wrapper end -->
    </body>
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin-2.min.js"></script>

        <!-- Page level plugins -->
        <script src="vendor/chart.js/Chart.min.js"></script>

        <!-- Page level custom scripts -->
        <script src="js/demo/chart-area-demo.js"></script>
        <script src="js/demo/chart-pie-demo.js"></script>
</html>

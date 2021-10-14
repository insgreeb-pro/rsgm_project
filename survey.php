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
        
            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column ">
                
                <!-- Main Content -->
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-dark topbar mb-4 static-top shadow">
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto px-5">

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" role="button">
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
                            <a class="nav-link" href="login.php" role="button">
                                <span>Login Admin</span>
                            </a>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                
                <!-- Begin Page Content -->
                <div class="row justify-content-center">
                    <div class="col-xl-4">
                        <div class="card o-hidden border-0 shadow-lg my-5">
                            <div class="card-body p-0">
                                <!-- Nested Row within Card Body -->
                                <div class="row text-center">
                                    <div class="p-5">
                                        <div class="text-center">
                                            <h1 class="h3 text-gray-900 mb-4">Survey Kenyamanan Ruang Huni RSGM UMY</h1>
                                        </div>
                                        <hr>
                                        <form action="simpan-survey.php" method="POST" class="survey">
                                            <h2 class="h4 text-gray-900">Ruangan yang di huni:</h2>
                                            <div class="form-group mb-5">
                                                <label for="ruangan"></label>
                                                <select class="custom-select" id="ruangan" name="ruangan">
                                                    <option value="1">Lantai 1 - Poli Gigi 1</option>
                                                    <option value="2">Lantai 1 - Poli Gigi 2</option>
                                                    <option value="3">Lantai 1 - Poli Gigi 3</option>
                                                    <option value="4">Lantai 1 - Poli Gigi 4</option>
                                                    <option value="5">Lantai 1 - Poli Gigi Anak</option>
                                                    <option value="6">Lantai 2 - Ruang Operasi</option>
                                                    <option value="7">Lantai 2 - Ruang Post-Operasi</option>
                                                </select> 
                                            </div>
                                            <h2 class="h4 text-gray-900 mb-4">Kenyamanan Termal</h2>
                                            <div class="form-group mb-3">
                                                <h3 class="h5 text-gray-900">Sensasi termal yang Anda rasakan di ruangan ini:</h3>
                                                <label for="sensasi_termal"></label>
                                                <select class="custom-select" id="sensasi_termal" name="sensasi_termal">
                                                    <option value="Dingin">Dingin</option>
                                                    <option value="Sejuk">Sejuk</option>
                                                    <option value="Cukup sejuk">Cukup sejuk</option>
                                                    <option value="Netral">Netral</option>
                                                    <option value="Cukup hangat">Cukup hangat</option>
                                                    <option value="Hangat">Hangat</option>
                                                    <option value="Panas">Panas</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <h3 class="h5 text-gray-900 mb-2">Suhu dan Kelembaban di ruangan ini?</h3>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_termal" id="sangat_buruk" value="sangat buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Disappointed_but_Relieved_Emoji_Icon_1e554748-dab1-472b-937e-54ecd95ee75c_large.png?v=1571606089" alt="sangat buruk">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_termal" id="buruk" value="buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Worried_Face_Emoji_12fa1bbf-0297-4818-8298-d6c1a588c341_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_termal" id="cukup" value="cukup">
                                                        <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Neutral_Face_Emoji_large.png?v=1571606037">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_termal" id="baik" value="baik">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Slightly_Smiling_Face_Emoji_87fdae9b-b2af-4619-a37f-e484c5e2e7a4_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_termal" id="sangat_baik" value="sangat baik" checked>
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Emoji_with_Smiling_Eyes_large.png?v=1571606035">
                                                </label> 
                                            </div>                                
                                            <div class="form-group">
                                            <h2 class="h4 text-gray-900 mb-4">Kenyamanan Visual</h2>
                                                <h5 text-gray-900 mb-2>Kondisi visual dan pencahayaan di ruangan ini?</h5>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_visual" id="sangat_buruk" value="sangat buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Disappointed_but_Relieved_Emoji_Icon_1e554748-dab1-472b-937e-54ecd95ee75c_large.png?v=1571606089" alt="sangat buruk">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_visual" id="buruk" value="buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Worried_Face_Emoji_12fa1bbf-0297-4818-8298-d6c1a588c341_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_visual" id="cukup" value="cukup">
                                                        <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Neutral_Face_Emoji_large.png?v=1571606037">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_visual" id="baik" value="baik">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Slightly_Smiling_Face_Emoji_87fdae9b-b2af-4619-a37f-e484c5e2e7a4_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_visual" id="sangat_baik" value="sangat baik" checked>
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Emoji_with_Smiling_Eyes_large.png?v=1571606035">
                                                </label>
                                            </div>
                                            <div class="form-group">
                                            <h2 class="h4 text-gray-900 mb-4">Kenyamanan Akustik</h2>
                                                <p>Kondisi akustik di ruangan ini?</p>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_akustik" id="sangat_buruk" value="sangat buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Disappointed_but_Relieved_Emoji_Icon_1e554748-dab1-472b-937e-54ecd95ee75c_large.png?v=1571606089" alt="sangat buruk">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_akustik" id="buruk" value="buruk">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Worried_Face_Emoji_12fa1bbf-0297-4818-8298-d6c1a588c341_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey" name="kenyamanan_akustik" id="cukup" value="cukup">
                                                        <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Neutral_Face_Emoji_large.png?v=1571606037">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_akustik" id="baik" value="baik">
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Slightly_Smiling_Face_Emoji_87fdae9b-b2af-4619-a37f-e484c5e2e7a4_large.png?v=1571606036">
                                                </label>
                                                <label class="custom-survey-label">
                                                    <input type="radio" class="survey"  name="kenyamanan_akustik" id="sangat_baik" value="sangat baik" checked>
                                                    <img class="emoji" src="https://cdn.shopify.com/s/files/1/1061/1924/products/Smiling_Emoji_with_Smiling_Eyes_large.png?v=1571606035">
                                                </label>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Kumpulkan</button>
                                        </form>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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


</html>
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
        <link href="css/sb-admin-2.css" rel="stylesheet">
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
                
                <!-- Begin Page Content -->
                <!-- queerying data -->
                <?php //prepping data//
                    //variabel status sessor temperatur
                    $status_sensor_temperatur = false;
                    $status_sensor_iluminansi = false;
                    $status_sensor_kelembapan = false;
                    $status_sensor_noise = false;
                    $status_sensor_co2 = false;
                    $status_sensor_pm2_5 = false;
                    $status_sensor_pm10 = false;
                    $status_sensor_co = false;
                    $status_sensor_voc = false;
                    $status_sensor_airpressure = false;
                    $status_sensor_ach = false;
                    $status_sensor_formaldehida=false;
                                    
                    // Query Realtime Data //
                    $query = $conn->query("SELECT 
                    DATE_TRUNC('second',waktu_db) AS waktu_db, 
                    ROUND(iluminansi,1) AS iluminansi, 
                    ROUND(temperatur,1) AS temperatur,
                    ROUND(kelembaban,1) AS kelembapan,
                    ROUND(co2, 0) AS co2,
                    ROUND(ach,0) AS vent_rate,
                    ROUND(voc, 3) AS voc,
                    ROUND(noise,0) AS noise,
                    ROUND(pm2_5, 0) AS pm2_5,
                    ROUND(pm10, 3) AS pm10
                    FROM rsgm.realtime_data 
                    WHERE ruangan_id = 1 
                    ORDER BY waktu_db DESC 
                    LIMIT 1");
                    if(!$query){
                        echo "Error";
                        exit;
                    }else{
                        $rowdata = $query->fetch(PDO::FETCH_ASSOC);
                    }
                ?>
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex flex-direction-row  mb-3">
                        <h1 class="h2 mb-2 text-gray-800">IEQ Dashboard</h1>
                        <h3 class="h4 mb-0 text-gray-800">Lantai 1, Poli Gigi 1</h3>
                        <h5 class="h6 mb-0 text-blue-800">Last Update: <?php echo ($rowdata['waktu_db'])?></h5>
                    </div>

                    <!-- main content -->                 
                    <div class="row">
                        <!-- column left -->
                        <div class= "col-xl-9 col-lg-6 col-md-5 mb-4">
                            <!--realtime data card -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Realtime Data</h6>
                                </div>
                                <div class="card-body">

                                    <table class = "realtime">
                                        <tr>
                                            <th>Temperatur</th>
                                            <th>Kelembapan</th>
                                            <th>Ventilation Rate</th>
                                            <th>VOC</th>
                                            <th>CO2</th>
                                            <th>CO</th>
                                        </tr>
                                        <tr>
                                            <td>
                                                <?php 
                                                if(empty($rowdata['temperatur'])){
                                                    echo "E";
                                                    $status_sensor_temperatur=false;
                                                }else{
                                                    echo ($rowdata['temperatur']);
                                                    $status_sensor_temperatur=true;
                                                }
                                                ?> 
                                                degree
                                            </td>
                                            <td>
                                                <?php
                                                if(empty($rowdata['kelembapan'])){
                                                    echo "E";
                                                    $status_sensor_kelembapan=false;
                                                }else{
                                                    echo ($rowdata['kelembapan']);
                                                    $status_sensor_kelembapan=true;
                                                }
                                                ?>
                                                %
                                            </td>
                                            <td>
                                                <?php
                                                if(empty($rowdata['vent_rate'])){
                                                    echo "E";
                                                    $status_sensor_ach=false;
                                                }else{
                                                    echo($rowdata['vent_rate']);
                                                    $status_sensor_ach=true;
                                                }
                                                ?>
                                                ACH
                                            </td>
                                            <td>
                                                <?php
                                                if(empty($rowdata['voc'])){
                                                    echo"E";
                                                    $status_sensor_voc=false;
                                                }else{
                                                    echo($rowdata['voc']);
                                                    $status_sensor_voc=true;
                                                }
                                                ?>
                                                ppm 
                                            </td>
                                            <td>
                                                <?php
                                                if(empty($rowdata['co2'])){
                                                    echo"E";
                                                    $status_sensor_co2=false;
                                                }else{
                                                    echo($rowdata['co2']);
                                                    $status_sensor_co2=true;
                                                }
                                                ?> 
                                                ppm
                                            </td>
                                            <td>
                                                E ppm
                                            </td>
                                            </tr>
                                            <tr>
                                                <th>PM 2.5</th>
                                                <th>PM 10</th>            
                                                <th>Iluminansi</th>
                                                <th>Noise</th>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <?php
                                                    if(empty($rowdata['2_5'])){
                                                        echo "E";
                                                        $status_sensor_pm2_5=false;
                                                    }
                                                    else{
                                                        echo($rowdata['pm2_5']);
                                                        $status_sensor_pm2_5=true;
                                                    }
                                                    ?>
                                                    ppm
                                                </td>
                                                <td>
                                                    <?php
                                                    if(empty($rowdata['pm10'])){
                                                        echo "E";
                                                        $status_sensor_pm10=false;
                                                    }
                                                    else{
                                                        echo ($rowdata['pm10']);
                                                        $status_sensor_pm10=true;
                                                    }
                                                    ?>
                                                    ppm
                                                </td>
                                                <td>
                                                    <?php
                                                    if(empty($rowdata['iluminansi'])){
                                                        echo "E";
                                                        $status_sensor_iluminansi = false;
                                                    }else{
                                                        echo ($rowdata['iluminansi']);
                                                        $status_sensor_iluminansi = true;
                                                        }
                                                    ?>
                                                    lux
                                                </td>
                                                <td>
                                                    <?php
                                                    if(empty($rowdata['noise'])){
                                                        echo"E";
                                                        $status_sensor_noise=false;
                                                    }else{
                                                        echo ($rowdata['noise']);
                                                        $status_sensor_noise=true;
                                                    }                                            
                                                    ?>
                                                    db
                                                </td>

                                            </tr>
                                        </table>
                                </div>
                            </div>      
                            <!-- Line graph -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                    <hr>
                                    Styling for the area chart can be found in the
                                    <code>/js/demo/chart-area-demo.js</code> file.
                                </div>
                            </div>
                        </div>
                        <!--column right-->
                        <div class="col-xl-3 col-lg-4 col-md-5 mb-4">
                            <!-- status sensor -->    
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Status Sensor</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table-sensor">
                                        <tr>
                                            <th>Sensor Temperatur</th>
                                            <td>
                                                <?php
                                                if($status_sensor_temperatur==false){
                                                    echo ("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Kelembapan</th>
                                            <td>
                                                <?php
                                                if($status_sensor_kelembapan==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>                
                                        </tr>
                                        <tr>
                                            <th>Sensor Cahaya</th>
                                            <td>
                                                <?php
                                                if($status_sensor_iluminansi==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>                
                                        </tr>
                                        <tr>
                                            <th>Sensor Audio</th>
                                            <td>
                                                <?php
                                                if($status_sensor_noise==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>                
                                        </tr>
                                        <tr>
                                            <th>Sensor CO2</th>
                                            <td>
                                                <?php
                                                if($status_sensor_co2==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor CO</th>
                                                <td>
                                                <?php
                                                if($status_sensor_co==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Formaldehida</th>
                                            <td>
                                                <?php
                                                if($status_sensor_formaldehida==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>    
                                            <th>Sensor PM 2.5 </th>
                                            <td>
                                                <?php
                                                if($status_sensor_pm2_5==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>    
                                            <th>Sensor PM 10 </th>
                                            <td>
                                                <?php
                                                if($status_sensor_pm10==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                                </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor VOC</th>
                                            <td>
                                                <?php
                                                if($status_sensor_voc==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Ventilation Rate</th>
                                            <td>
                                                <?php
                                                if($status_sensor_ach==false){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Air Pressure</th>
                                            <td>
                                                <?php
                                                if($status_sensor_airpressure==true){
                                                    echo("ON");
                                                }else{
                                                    echo("OFF");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            
                            <!-- comfort meter -->
                            <div class="card shadow mb-4">
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m0 font-weight-bold text-primary">Hasil POE</h6>
                                    <div class="dropdown no-arrow">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                            <div class="dropdown-header">Parameter:</div>
                                            <a class="dropdown-item" href="#">Termal</a>
                                            <a class="dropdown-item" href="#">Cahaya</a>
                                            <a class="dropdown-item" href="#">Noise</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Download Data</a>
                                        </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="chart-pie pt-4">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                    </div>
                                <hr>Isinya hasil persenan orang yang 
                                    udh ngisi survey yeay
                            </div>
                        
                                
                        </div>
            
            
                </div>
            </div>            
            
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
        </div>
        

 <!-- history section -->
<!--                     
<?php
    $query2 = $conn -> query("SELECT DATE_TRUNC('day', waktu_db) AS date,
                AVG(temperatur) AS temperatur_rerata,
                AVG(iluminansi) AS iluminansi_rerata,
                AVG(kelembaban) AS rh_rerata
                FROM rsgm.realtime_data
                WHERE DATE_TRUNC('month', waktu_db) >= NOW()- interval '1 month' 
                AND ruangan_id=1   
                GROUP BY date");
    if (!$query2){
        echo "error query";
            exit;
    }else{
        $arraytemp=[];
        $arrayiluminansi=[];
        $arrayrh=[];
        while($row=$query2->fetch()){
            array_push($arraytemp,$row['temperatur_rerata']);
            array_push($arrayiluminansi,$row['iluminansi_rerata']);
            array_push($arrayrh,$row['rh_rerata']);
            }
    }
    ?>
-->                        
         


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


    </body>
</html>

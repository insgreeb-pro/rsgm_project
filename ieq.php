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
                
                <?php //prepping data//
                    //variabel status sessor temperatur
                                                        
                    // Query Realtime Data //
                    $query = $conn->query("SELECT 
                    TO_CHAR(waktu_akuisisi, 'dd/MM/yyyy HH:mm:ss') AS waktu, 
                    ROUND(iluminansi,1) AS iluminansi, 
                    ROUND(temperatur,1) AS temperatur,
                    ROUND(kelembapan,1) AS kelembapan,
                    ROUND(co2, 0) AS co2,
                    ROUND(co, 0) AS co,
                    ROUND(ach,0) AS vent_rate,
                    ROUND(voc, 3) AS voc,
                    ROUND(noise_audio,0) AS noise,
                    ROUND(pm2_5, 0) AS pm2_5,
                    ROUND(pm10, 3) AS pm10,
                    ROUND(airspeed, 2) AS airspeed,
                    jumlah_penghuni
                    FROM rsgm.realtime_data 
                    WHERE ruangan_id = 1 
                    ORDER BY waktu_akuisisi DESC 
                    LIMIT 1");
                    if(!$query){
                        #echo "Error";
                        exit;
                    }else{
                        $rowdata = $query->fetch(PDO::FETCH_ASSOC);
                    }
                    $query_ruangan = $conn->query("SELECT kapasitas FROM rsgm.ruangan WHERE ruangan_id = 1");
                    if(!$query_ruangan){
                        exit;
                    }else{
                        $row = $query->fetch(PDO::FETCH_ASSOC);
                    }
                ?>
                
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-xl-flex align-items-left mb-3">
                        <h1 class="h2 mb-2 text-gray-800"> Indoor Environment Quality Monitoring</h1>
                        <h3 class="h4 mb-2 text-gray-800">Lantai 1, Poli Gigi 1</h3>
                    </div>
                    <!-- Page Heading End -->

                    <!-- main content -->                 
                    <div class="row">
                        
                        <!-- column left -->
                        <div class= "col-xl-9 col-lg-6 col-md-5 mb-4">

                            <!--realtime data card -->
                            <div class="card shadow mb-4">
                                <!-- Header card -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Realtime Data</h6>
                                </div>
                                <!-- body card -->
                                <div class="card-body">
                                    <div class="grid grid-cols-6 my-2">
                                        <div class="text-center grid place-items-center col-span-1 border-b-2 lg:border-none">
                                            <div class="">
                                                <p class="text-lg lg:text-lg mb-3">Update Terakhir:</p>
                                                <p class="text-lg lg:text-lg mb-5 lg:mb-0 text-green-500"><?php echo $rowdata['waktu']; ?></p>
                                            </div>
                                        </div>
                                        <div class="col-span-5 text-base lg:text-base lg:col-span-5 mr-0">
                                            <div class="grid place-items-center grid-cols-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 mb-2 space-y-1">
                                                <!-- Jumlah orang -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Jumlah Penghuni</p>
                                                    <p>
                                                        <?php
                                                        if(empty($rowdata['jumlah_penghuni'])){
                                                            echo "<p class='text-gray-500'>--</p>";
                                                        }elseif($rowdata['jumlah_penghuni']<$row['kapasitas']){
                                                            echo ("<p class='text-green-500'>" .  $rowdata['jumlah_penghuni'] . "orang</p>");
                                                        }else{echo ("<p class='text-red-500'>" .  $rowdata['jumlah_penghuni'] . "orang</p>");}
                                                    #    echo "<p class='text-red-500'>" . $rowdata['vent_rate']. "ach</p>";
                                                    #}
                                                    ?>
                                                </div>
                                                <!-- iluminansi -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Iluminansi</p>
                                                        <?php
                                                            if(empty($rowdata['iluminansi'])){
                                                                echo "<p class='text-red-500'>--lux</p>";
                                                                
                                                            }elseif($rowdata['iluminansi']>500 && $rowdata['iluminansi']< 850) {
                                                                echo ("<p class='text-green-500'>" .  $rowdata['iluminansi'] . "lux</p>");
                                                                
                                                            }else{
                                                                echo "<p class='text-red-500'>" . $rowdata['iluminansi']. "lux</p>";}
                                                        ?>
                                                </div>
                                                <!-- noise -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Noise</p>
                                                    <?php
                                                        if(empty($rowdata['noise'])){
                                                            echo "<p class='text-red-500'>--dBA</p>";
                                                        }elseif($rowdata['noise']<45) {
                                                            echo ("<p class='text-green-500'>" .  $rowdata['noise'] . "dBA</p>");
                                                            
                                                        }else{
                                                            echo "<p class='text-red-500'>" . $rowdata['noise']. "dBA</p>";}
                                                    ?>
                                                </div>
                                                <!-- temperatur -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Temperatur</p>
                                                    <?php
                                                        if(empty($rowdata['temperatur'])){
                                                            echo "<p class='text-red-500'>--<span>&#176;</span>C</p>";
                                                        }elseif($rowdata['temperatur']>21 && $rowdata['temperatur']<24) {
                                                            echo ("<p class='text-green-500'>" .  $rowdata['temperatur'] . "<span>&#176;</span>C</p>");
                                                        }else{
                                                            echo "<p class='text-red-500'>" . $rowdata['temperatur']. "<span>&#176;</span>C</p>";}
                                                    ?> 
                                                </div>
                                                <!-- kelembapan -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Kelembapan</p>
                                                    <?php
                                                    if(empty($rowdata['kelembapan'])){
                                                        echo "<p class='text-red-500'>--%</p>";
                                                        
                                                    }elseif($rowdata['kelembapan']<60) {
                                                        echo ("<p class='text-green-500'>" .  $rowdata['kelembapan'] . "%</p>");
                                                        
                                                    }else{
                                                        echo "<p class='text-red-500'>" . $rowdata['kelembapan']. "%</p>";}
                                                    ?>
                                                </div>
                                                <!-- airspeed -->        
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Kecepatan Udara</p>
                                                    <?php
                                                    if(empty($rowdata['airspeed'])){
                                                        echo "<p class='text-gray-500'>--m/s</p>";
                                                        
                                                    }elseif($rowdata['airspeed']>0.15){
                                                        echo ("<p class='text-green-500'>" .  $rowdata['airspeed'] . "m/s</p>");
                                                       
                                                    }else{
                                                    echo "<p class='text-red-500'>" . $rowdata['airspeed']. "m/s</p>";
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                            <div class="grid grid-cols-5 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6 mb-2 space-y-1">
                                                <!-- ventilation rate -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">Pergantian Udara</p>
                                                    <?php
                                                    if(empty($rowdata['vent_rate'])){
                                                        echo "<p class='text-gray-500'>--ach</p>";
                                                        
                                                    }elseif($rowdata['vent_rate']>6){
                                                        echo ("<p class='text-green-500'>" .  $rowdata['vent_rate'] . "ach</p>");
                                                        
                                                    }else{
                                                        echo "<p class='text-red-500'>" . $rowdata['vent_rate']. "ach</p>";
                                                    }
                                                    ?>
                                                </div>
                                                <!-- pm 2.5 -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">PM 2.5</p>
                                                    <?php
                                                        if(empty($rowdata['pm2_5'])){
                                                            echo "<p class='text-gray-500'>--<span>&#956;</span>/m<sup>3</p>";
                                                            
                                                        }elseif($rowdata['pm2_5']<35){
                                                            echo ("<p class='text-green-500'>" .  $rowdata['co'] . "<span>&#956;</span>/m<sup>3</p>");
                                                            
                                                        }else{
                                                            echo "<p class='text-red-500'>" . $rowdata['co']. "<span>&#956;</span>/m<sup>3</p>";}
                                                    ?>
                                                </div>
                                                <!-- pm 10 -->  
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">PM 10</p>
                                                    <?php
                                                        if(empty($rowdata['pm10'])){
                                                            echo "<p class='text-gray-500'>--<span>&#956;</span>/m<sup>3</p>";
                                                            
                                                        }elseif($rowdata['pm10']<150){
                                                            echo ("<p class='text-green-500'>" .  $rowdata['pm10'] . "<span>&#956;</span>/m<sup>3</p>");
                                                            
                                                        }else{
                                                        echo "<p class='text-red-500'>" . $rowdata['pm10']. "<span>&#956;</span>/m<sup>3</p>";
                                                        }
                                                    ?>
                                                </div>
                                                <!-- co2 -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">CO<sub>2</sub></p>
                                                    <?php
                                                        if(empty($rowdata['co2'])){
                                                            echo "<p class='text-gray-500'>--ppm</p>";
                                                            
                                                        }else{
                                                            echo ("<p class='text-gray-500'>" .  $rowdata['co2'] . "ppm</p>");
                                                            
                                                        }
                                                    ?>
                                                </div>
                                                <!-- co -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">CO</p>
                                                    <?php
                                                        if(empty($rowdata['co'])){
                                                            echo "<p class='text-gray-500'>--ppm</p>";
                                                            
                                                        }elseif($rowdata['co']<35){
                                                            echo ("<p class='text-green-500'>" .  $rowdata['co'] . "ppm</p>");
                                                            
                                                        }else{
                                                            echo "<p class='text-red-500'>" . $rowdata['co']. "ppm</p>";
                                                        }
                                                    ?>
                                                </div>
                                                <!-- tvoc -->
                                                <div class="text-center flex-row items-center">
                                                    <p class="font-semibold">TVOC</p>
                                                    <?php
                                                        if(empty($rowdata['voc'])){
                                                            echo "<p class='text-gray-500'>--mg/m<sup>3</sup></p>";
                                                            
                                                        }elseif($rowdata['co']<35){
                                                            echo ("<p class='text-green-500'>" .  $rowdata['voc'] . "mg/m<sup>3</sup></p>");
                                                            
                                                        }else{
                                                            echo "<p class='text-red-500'>" . $rowdata['voc']. "mg/m<sup>3</sup></p>";
                                                        }
                                                    ?>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--realtime data card End -->

                            <!-- Line graph -->
                            <?php //Prepping data

                            ?>
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Area Chart</h6>
                                </div>
                                <div class="card-body"> 
                                    <!-- The Modal -->
                                    <!--
                                    <div id="myModal" class="modal">
                                        <div class="modal-content">
                                        <canvas id="temp-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal2" class="modal2">
                                        <div class="modal-content">
                                        <canvas id="kelemb-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal3" class="modal3">
                                        <div class="modal-content">
                                        <canvas id="illum-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal4" class="modal4">
                                        <div class="modal-content">
                                        <canvas id="ach-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal5" class="modal5">
                                        <div class="modal-content">
                                        <canvas id="airspeed-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal6" class="modal6">
                                        <div class="modal-content">
                                        <canvas id="pm2-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal7" class="modal7">
                                        <div class="modal-content">
                                        <canvas id="pm1-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal8" class="modal8">
                                        <div class="modal-content">
                                        <canvas id="co2-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal9" class="modal9">
                                        <div class="modal-content">
                                        <canvas id="co-graph"></canvas>
                                        </div>
                                    </div>
                                    <div id="myModal10" class="modal10">
                                        <div class="modal-content">
                                        <canvas id="voc-graph"></canvas>
                                        </div>
                                    </div>
                                    <div class="chart-area">
                                        <canvas id="myAreaChart"></canvas>
                                    </div>
                                                    -->
                                    <hr>
                                    <div class="flex flex-wrap justify-center space-x-2 space-y-2 my-5">
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="temp">Temperatur</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="kelemb">Kelembaban</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="illum">Illuminansi</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="ach">Pergantian Udara</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="airspeed">Kecepatan Udara</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="pm2">PM 2.5</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="pm1">PM 10</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="co2">CO<sub>2</sub></button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="co">CO</button>
                                        <button class="border border-blue-500 px-2 rounded-lg focus:bg-blue-400 focus:text-white" id="voc">TVOC</button>
                                    </div>
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
                                                if(empty($rowdata['temperatur'])){
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
                                                if(empty($rowdata['kelembapan'])){
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
                                                if(empty($rowdata['iluminansi'])){
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
                                                if(empty($rowdata['noise'])){
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
                                                if(empty($rowdata['co2'])){
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
                                                if(empty($rowdata['co'])){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Pertukaran Udara</th>
                                            <td>
                                                <?php
                                                if(empty($rowdata['ach'])){
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
                                                if(empty($rowdata['pm2_5'])){
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
                                                if(empty($rowdata['pm10'])){
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
                                                if(empty($rowdata['voc'])){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
                                                }
                                                ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Sensor Kecepatan Udara</th>
                                            <td>
                                                <?php
                                                if(empty($rowdata['airspeed'])){
                                                    echo("OFF");
                                                }else{
                                                    echo("ON");
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
                                        <hr>Isinya hasil persenan orang yang 
                                        udh ngisi survey yeay
                                        
                                    </div>
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
        </div>
    </div>
    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    

    <!-- PLS DONT CHANGE THIS OK -->
    <!-- Bottstrap Core Javascript -->
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
    <script src="js/demo/chart-bar-demo.js"></script>
    <!-- PLS DONT CHANGE THIS OK (end) -->
    
    
    
    <!-- Prepp for Line Graph -->
    <!--Prepping Data For Line Graph-->               
    <?php
        $tgf = [];
        $waktu = [];
        $igf = [];
        $hgf = [];
        $achgf = [];
        $nagf = [];
        $airgf = [];
        $querygrafik_menit = $conn->query(
            "SELECT TO_CHAR(waktu_akuisisi, 'DD-Mon-YYYY HH24:MI:SS') AS waktu, 
            ROUND(iluminansi, 1) AS iluminansi, 
            ROUND(temperatur, 1) AS temperatur,
            ROUND(kelembapan, 1) AS kelembapan,
            ROUND(ach,0) AS vent_rate,
            ROUND(noise_audio,0) AS noise,
            ROUND(airspeed, 0) AS airspeed
            FROM rsgm.realtime_data 
            WHERE ruangan_id=1 AND DATE_TRUNC('minute', waktu_akuisisi) >= NOW() - interval '15 minutes'
            ORDER BY waktu DESC");
        while($rowgm = $querygrafik_menit->fetch()){
            $tgf[] = $rowgm['temperatur'];
            $igf[] = $rowgm['iluminansi'];
            $hgf[] = $rowgm['kelembapan'];
            $achgf[] = $rowgm['ach'];
            $nagf[] = $rowgm['noise'];
            $airgf [] = $rowgm['airspeed'];
            $waktu[] = $rowgm['waktu'];
        }
        
        $querygrafik_harian= $conn->query(
            "SELECT TO_CHAR(DATE_TRUNC('hour', waktu_akuisisi), 'HH24:MI') AS waktu_jam, 
            ROUND(AVG(voc), 2) as tvoc, 
            ROUND(AVG(pm2_5),2) as pm2_5,
            ROUND(AVG(pm10), 2) as pm10,
            ROUND(AVG(co2), 2) as co2,
            ROUND(AVG(co), 2) as co
            FROM rsgm.realtime_data
            WHERE ruangan_id=1 AND DATE_TRUNC('day', waktu_akuisisi) >= NOW() - interval '1 day'
            GROUP BY DATE waktu_jam
            ORDER BY waktu_akuisisi DESC"
            );
        $waktu_jam=[];
        $co2gf = [];
        $tvocgf = [];
        $pm25gf = [];
        $pm10gf = [];
        $cogf = [];
        while ($rowgh = $querygrafik_harian->fetch()){
            $co2gf[] = $rowgh['co2'];
            $cogf[] = $rowgh['co'];
            $vocgf[] = $rowgh['tvoc'];
            $pm25gf[] = $rowgh['pm2_5'];
            $pm10gf[] = $rowgh['pm10'];
            $waktu_jam[] = $rowgh['waktu_jam'];
        }
    ?>
    <script>
        var waktu = <?php echo json_encode($waktu); ?>;
        var waktu = waktu.reverse();
        var temperatur = <?php echo json_encode($tgf); ?>;
        var temperatur = temperatur.reverse();
        var iluminansi = <?php echo json_encode($igf); ?>;
        var iluminansi = iluminansi.reverse();
        var kelembapan = <?php echo json_encode($hgf); ?>;
        var kelembapan = kelembapan.reverse();
        var co2 = <?php echo json_encode($co2gf); ?>;
        var co2 = co2.reverse();
        var ach = <?php echo json_encode($achgf); ?>;
        var ach = ach.reverse();
        var voc = <?php echo json_encode($vocgf); ?>;
        var voc = voc.reverse();
        var noise = <?php echo json_encode($nagf); ?>;
        var noise = noise.reverse();
        var pm25 = <?php echo json_encode($pm25gf); ?>;
        var pm25 = pm25.reverse();
        var pm10 = <?php echo json_encode($pm10gf); ?>;
        var pm10 = pm10.reverse();
    </script>
    <!--Prepping Data For Line Graph End-->
    <script src="grafik.js"></script>
    <!-- Modals for Line graph -->
    <script>
      // Get the modal
      var modal = document.getElementById("myModal");
      var modal2 = document.getElementById("myModal2");
      var modal3 = document.getElementById("myModal3");
      var modal4 = document.getElementById("myModal4");
      var modal5 = document.getElementById("myModal5");
      var modal6 = document.getElementById("myModal6");
      var modal7 = document.getElementById("myModal7");
      var modal8 = document.getElementById("myModal8");
      var modal9 = document.getElementById("myModal9");
      var modal10 = document.getElementById("myModal10");

      // Get the button that opens the modal
      var btn = document.getElementById("temp");
      var btn2 = document.getElementById("kelemb");
      var btn3 = document.getElementById("illum");
      var btn4 = document.getElementById("ach");
      var btn5 = document.getElementById("forma");
      var btn6 = document.getElementById("pm2");
      var btn7 = document.getElementById("pm1");
      var btn8 = document.getElementById("co2");
      var btn9 = document.getElementById("co");
      var btn10 = document.getElementById("voc");

      // When the user clicks on the button, open the modal
      btn.onclick = function() {
        modal.style.display = "block";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn2.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "block";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn3.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "block";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn4.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "block";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn5.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "block";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn6.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "block";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn7.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "block";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn8.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "block";
        modal9.style.display = "none";
        modal10.style.display = "none";
      }
      btn9.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "block";
        modal10.style.display = "none";
      }
      btn10.onclick = function() {
        modal.style.display = "none";
        modal2.style.display = "none";
        modal3.style.display = "none";
        modal4.style.display = "none";
        modal5.style.display = "none";
        modal6.style.display = "none";
        modal7.style.display = "none";
        modal8.style.display = "none";
        modal9.style.display = "none";
        modal10.style.display = "block";
      }
    </script>
    <!-- Modals for Line graph  End-->
    <!-- Prepp for Line Graph End-->
    

    
</body>
<?php
    $querychart = $conn->query("SELECT sensasi_termal,kenyamanan_termal,kenyamanan_visual,kenyamanan_akustik FROM rsgm.hasil_survey");
    $st = array();
    $kt = array();
    $kv = array();
    $ka = array();
    while($rowg = $querychart->fetch()){
      $st[] = $rowg["sensasi_termal"];
      $kt[] = $rowg["kenyamanan_termal"];
      $kv[] = $rowg["kenyamanan_visual"];
      $ka[] = $rowg["kenyamanan_akustik"];
    };
    
?>


<script>
    var st = <?php echo json_encode($st); ?>;
    var kt = <?php echo json_encode($kt); ?>;
    var kv = <?php echo json_encode($kv); ?>;
    var ka = <?php echo json_encode($ka); ?>;

    const countOccurrences = (arr, val) => arr.reduce((x, f) => (f === val ? x + 1 : x), 0);
    var jmlst1 = countOccurrences(st,1);
    var jmlst2 = countOccurrences(st,2);
    var jmlst3 = countOccurrences(st,3);
    var jmlst4 = countOccurrences(st,4);
    var jmlst5 = countOccurrences(st,5);
    var jmlst6 = countOccurrences(st,6);
    var jmlst7 = countOccurrences(st,7);
    var jmlkt1 = countOccurrences(kt,1);
    var jmlkt2 = countOccurrences(kt,2);
    var jmlkt3 = countOccurrences(kt,3);
    var jmlkt4 = countOccurrences(kt,4);
    var jmlkt5 = countOccurrences(kt,5);
    var jmlkv1 = countOccurrences(kv,1);
    var jmlkv2 = countOccurrences(kv,2);
    var jmlkv3 = countOccurrences(kv,3);
    var jmlkv4 = countOccurrences(kv,4);
    var jmlkv5 = countOccurrences(kv,5);
    var jmlka1 = countOccurrences(ka,1);
    var jmlka2 = countOccurrences(ka,2);
    var jmlka3 = countOccurrences(ka,3);
    var jmlka4 = countOccurrences(ka,4);
    var jmlka5 = countOccurrences(ka,5);
    var datast = anychart.data.set([
	['Dingin', jmlst1],
	['Sejuk', jmlst2],
	['Cukup Sejuk', jmlst3],
	['Netral', jmlst4],
	['Cukup Hangat', jmlst5],
	['Hangat', jmlst6],
	['Panas', jmlst7]
  ]);
  chartkt.palette(palettekt);
  chartkt.title('Kenyamanan Termal');
  chartkt.container('myChart3');
  chartkt.draw();
  var datakv = anychart.data.set([
	['Sangat Buruk', jmlkv1],
	['Buruk', jmlkv2],
	['Cukup', jmlkv3],
	['Baik', jmlkv4],
	['Sangat Baik', jmlkv5]
  ]);
</script>

</html>
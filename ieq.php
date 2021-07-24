<?php
    include 'connect.php';
    include 'navbar.php';
    include 'navbar2.php';
?>

<!doctype html>
<html lang='en'>
    <head>
    <title> Indoor Environment Quality BMS RSGM </title>
        
    </head>
    <body>
        <h1> LT. 1 Poli Gigi 1 </h1>
        <p> Data terakhir: 
            <?php
            //query waktu refresh
            $queryrt1 = $conn -> query ("SELECT waktu_db 
            FROM rsgm.realtime_data
            WHERE node_id = 1
            ORDER BY waktu_db DESC
            LIMIT 1");         
            ?>
        </p>
        
        <?php
        //variabel status sessor temperatur
        $status_sensor_temperatur = false;
        $status_sensor_iluminansi = false;
        $status_sensor_kelembaban = false;

        //query temperatur

        //algoritma Ver2:
        $temperatur = $conn->query("SELECT temperatur
                FROM rsgm.realtime_data
                WHERE ruangan_id = 1
                ORDER BY waktu_db DESC
                LIMIT 1");
        echo "<p> Temperatur: <p>
            <h2> $temperatur</h2>";  
        if (!$temperatur){
            $status_sensor_temperatur = false;
            echo "Error";
        }else{
            $status_sensor_temperatur = true;
        } 
        $iluminansi = $conn->query("SELECT illuminansi
                    FROM rsgm.realtime_data
                    WHERE ruangan_id = 1
                    ORDER BY waktu_db DESC
                    LIMIT 1");
        if (!$iluminansi){
            $status_sensor_iluminansi = false;
        }else{
            $status_sensor_iluminansi = true;
        }
        $kelembaban = $conn->query("SELECT kelembaban
                    FROM rsgm.realtime_data
                    WHERE ruangan_id = 1
                    ORDER BY waktu_db DESC
                    LIMIT 1");
        if (!$kelembaban){
            $status_sensor_kelembaban = false;
            echo "<p> status sensor:";
        }else{
            $status_sensor_kelembaban = true;
        }



        
        
        
        //css -> for status sensor temperatur -> color: green
        



        //$query2 = $conn->query("SELECT temperatur
        //    FROM rsgm.realtime_data
        //    WHERE node_id = 2
        //    ORDER BY waktu_db DESC
        //    LIMIT 1;");
        //if (!$query1){
        //    $status_st1 = false;
        //    $status_st2 = true;
        //    $temperatur = $query2;
        //    echo $temperatur;
        //    exit;
        //}else if (!$query2){
        //    $status_st2 = false;
        //    $statur_st1 = true;
        //    $temperatur = $query1;
        //    echo $temperatur;
        //    exit;
        //}else if (!$query1 && !$query2){
        //    $statur_st1 = false;
        //    $status_st2 = false;
        //    $temperatur = 0;
        //    echo $temperatur;
        //    exit;
        //}else {
        //    $status_st1 = 1;
        //    $status_st2 = 1;
        //    $temperatur = ($query1 + $query2)/2;
        //    echo $temperatur;
        //    exit;
        //}
        
            

        ?>


        <h1>Historical Data</h1>
        <h1>Status Sensor</h1>
        <h1>Post Occupancy Survey</h1>
    </body>
</html>

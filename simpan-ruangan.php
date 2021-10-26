<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $nama = $_POST["nama_ruangan"];
        $lantai = $_POST["lantai"];
        $arah = $_POST["arah"];
        $luas = $_POST["luas"];
        $kapasitas = $_POST["kapasitas"];
        $fungsi = $_POST["fungsi"];
        $query= $conn->query("INSERT INTO rsgm.ruangan(nama_ruangan, lantai_id, arah, fungsi_ruangan, kapasitas, luas) 
        VALUES ('$nama', $lantai, '$arah', '$fungsi', $kapasitas, $luas)");
    }
?>
<script>alert('Data Ruangan Baru Telah Tersimpan');window.location = 'form_ruang.php';</script>

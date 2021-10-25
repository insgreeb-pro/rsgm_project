<?php
    include 'connect.php';
    if (isset($_POST['submit'])){
        $ruangan = $_POST["ruangan"];
        $sensasi_termal = $_POST["sensasi_termal"];
        $kenyamanan_termal = $_POST["kenyamanan_termal"];
        $kenyamanan_visual = $_POST["kenyamanan_visual"];
        $kenyamanan_akustik = $_POST["kenyamanan_akustik"];
        $query= $conn->query("INSERT INTO rsgm.hasil_survey(ruangan_id, sensasi_termal, kenyamanan_termal, kenyamanan_visual, kenyamanan_akustik) VALUES ($ruangan,$sensasi_termal,$kenyamanan_termal,$kenyamanan_visual,$kenyamanan_akustik)");
    }
    
    

    
?>
<script>alert('Hasil Survey Telah Tersimpan');window.location = 'survey.php';</script>
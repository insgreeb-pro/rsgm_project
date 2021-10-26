<?php
session_start();
include 'connect.php';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $pass =$_POST['password'];
    $query = $conn ->prepare("SELECT email, pass FROM rsgm.user WHERE email =:email AND pass=:pass");
    $query->bindParam("email", $email);
    $query->bindParam("pass", $pass);
    $query->execute();
    $result = $query->fetch();
    if (! empty($result)){
        $_SESSION['email'] = $result['email'];
        header('location: ieq.php');
    }else{
        echo '<p> Kombinasi password dan email salah </p>';
        header('location: login.php') ;
        };
    }

?>
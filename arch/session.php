<?php 
session_start();
if(isset($_SESSION['page']) && !isset($_POST['page'])){
    echo $_SESSION['page'];
}

if(isset($_SESSION['page']) && isset($_POST['page'])){
    $_SESSION['page']= $_POST['page'];
}

if(!isset($_SESSION['page']) && isset($_POST['page'])){
    $_SESSION['page']= $_POST['page'];
}
if(!isset($_SESSION['page']) && !isset($_POST['page'])){
    $_SESSION['page']= 'page/inicio.php';
}
?>

<?php
session_start();
if (!isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] != 1) {
  header("location: login.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<meta charset="UTF-8">
<head>
  <?php
  include('dash/link.php');
  ?>
</head>
<body class="app sidebar-mini rtl">
  <!-- Navbar-->
  <?php
  include('dash/header.php');
  ?>
  <!-- Sidebar menu-->
  <?php
  include('dash/sidebar.php');
  ?>

  <main class="app-content">
   <div class="" id="div-results"></div>
 </main>
 <!-- Essential javascripts for application to work-->
 <?php
 include('dash/script.php');
 ?>


 <script>
  $(document).ready(function(){

    page('page/inicio.php');

  });
</script>

<!-- Google analytics script-->

</body>
</html>

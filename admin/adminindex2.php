<!DOCTYPE html>
<html>
  <?php  

  include('sessionprocess.php');
  include('adminpartials/head.php');  


  ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

 <?php
  include('adminpartials/header.php');
  include('adminpartials/aside.php');
   
  // if(isset($_SESSION['User'])){
  //   echo $_SESSION['User'];
  // }else{
  //   header('location:adminlogin.php'); 
  // }

 ?>
 <!-- Left side column. contains the logo and sidebar -->

 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
       <h1>Hello bro <?php echo $_SESSION['User'] ?> </h1>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
   include('adminpartials/footer.php')
  ?>
</body>
</html>

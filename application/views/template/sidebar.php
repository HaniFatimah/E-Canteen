<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>E-Canteen</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url()?>assets/template/css/sb-admin-2.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url('assets/fontawesome/css/all.min.css') ?>">


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['nama_user'];?> <sup></sup></div>
      </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('C_beranda');?>">
          <i class="fas fa-home"></i>
          <span>Home</span></a>
      </li>

      <!-- level 3 admin -->
      <?php if($_SESSION['level']==1){?>
            
      <hr class="sidebar-divider my-0">
        
        <hr class="sidebar-divider">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('C_user');?>">
            <i class="fas fa-edit"></i>
            <span>Data User</span></a>
        </li>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('C_produk');?>">
            <i class="fa fa-table"></i>
            <span>Data Product</span></a>
        </li>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
        <a class="nav-link" href="<?php echo site_url('C_transaksi/data_transaksi');?>">
            <i class="fa fa-table"></i>
            <span>Data Transaksi</span></a>
        </li>

      <?php }?>
      
      <!-- level 2 kasir -->
      <?php if($_SESSION['level']==2){?>
          <hr class="sidebar-divider my-0">

          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('C_transaksi/data_in');?>">
              <i class="fa fa-table""></i>
              <span>Pembayaran</span></a>
          </li>

          <hr class="sidebar-divider my-0">

          <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('C_transaksi/data_transaksi');?>">
              <i class="fa fa-table"></i>
              <span>Data Transaksi</span></a>
          </li>
      <?php }?>


      <!-- level 3 User -->
      <?php if($_SESSION['level']==3){?>
        <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('C_Transaksi');?>">
            <i class="fas fa-cash-register"></i>
            <span>Beli Product</span></a>
        </li>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('C_transaksi/keranjang');?>">
            <i class="fas fa-cash-register"></i>
            <span>Keranjang</span></a>
        </li>
      <?php }?>

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>
    
    <!-- Costum Font -->
    <link rel="stylesheet" href="<?= base_url('include/fontawesome/css/all.min.css'); ?>">

    <!-- Default Template CSS -->
    <link rel="stylesheet" href="<?= base_url('include/sb-admin-2.css'); ?>">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="<?= base_url('include/datatables/dataTables.bootstrap4.min.css') ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('include/bootstrap/css/bootstrap.css') ?>">

    <!-- Sweet Alert 2 CSS -->
    <link rel="stylesheet" href="<?= base_url('include/sweetAlert2/sweetAlert2.min.css') ?>">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="<?= base_url('include/JqueryUI/jquery-ui.css') ?>">
    
    <!-- Animated -->
    <link rel="stylesheet" href="<?= base_url('include/animate.css') ?>">

    <!-- Costum CSS -->
    <link rel="stylesheet" href="<?= base_url('include/costum-css/admin/dashboard-base-style.css') ?>">
    
    <?php if ($css == ''): ?>

    <?php else: ?>
        <link rel="stylesheet" href="<?= base_url('include/costum-css/admin/'.$css.'') ?>">
    <?php endif ?>

</head>
<body id="page-top">
    <!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('admin/dashboard') ?>">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3" id="judul-dashboard">Dashboard</div>
    </a>


        <!-- Divider -->
        <hr class="sidebar-divider">

        <!-- Heading -->
        <div class="sidebar-heading">
            Menu
        </div>

        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-plus-square"></i>
                <span>Tambah Data</span>
            </a>
            <div id="collapseTwo" class="collapse <?= $class_show; ?>" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Movie DB</h6>
                    <a class="collapse-item <?= $class_anime; ?>" data-link="anime" id="anime" href="<?= base_url('admin/PageAnime') ?>">Anime</a>
                    <a class="collapse-item <?= $class_film; ?>" data-link="film" id="film" href="<?= base_url('admin/PageFilm') ?>">Film</a>
                    <a class="collapse-item <?= $class_series; ?>" data-link="series" id="series" href="#">Film Series</a>
                </div>
            </div>
        </li>

        <!-- Nav Item - Utilities Collapse Menu -->
        <li class="nav-item">
            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                <i class="fas fa-fw fa-wrench"></i>
                <span>Posting</span>
            </a>
            <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Posting Data</h6>
                    <a class="collapse-item" href="">Loker</a>
                </div>
            </div>
        </li>


        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
    </ul>
    <!-- End of Sidebar -->

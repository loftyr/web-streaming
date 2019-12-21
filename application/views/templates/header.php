<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="google-site-verification" content="9hUTA893kDQlQwdcCM9b8twTAdlaOBGMH1u8zuB_isc" />
        <meta name="description" content="Anime Sub Indo, Anime Subtitle Indonesia, Nonton Full, Shiro Neko Web, Nonton Full Online, Anime Streaming, Streaming Anime Sub Indo">
        <meta name="author" content="Shiro Neko">
        <meta name="category" content="Anime, Movie, Film, Box Office">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?= base_url('include/bootstrap/css/bootstrap.css') ?>">
        <!-- Sweet Alert 2 CSS -->
        <link rel="stylesheet" href="<?= base_url('include/sweetAlert2/sweetalert2.min.css') ?>">
        <!-- Animate CSS -->
        <link rel="stylesheet" href="<?= base_url('include/animate.css') ?>">
        <!-- Fontawesome -->
        <link rel="stylesheet" href="<?= base_url('include/fontawesome/css/all.min.css') ?>">
        <!-- Costum CSS -->
        <link rel="stylesheet" href="<?= base_url('include/costum-css/base-style.css') ?>">
        <?php if ($css == ''): ?>

        <?php else: ?>
            <link rel="stylesheet" href="<?= base_url('include/costum-css/user/'.$css.'') ?>">
        <?php endif ?>
        

        <title><?= $judul ?></title>
        <link rel="icon" type="image/png" href="<?= base_url('file/app/icon.png') ?>">
    </head>
    <body>
        <!-- <div class="img-left">
            <img class="image" src="<?= base_url('file/app/left-img.png') ?>" alt="">
        </div>
        <div class="img-right">
            <img class="image" src="<?= base_url('file/app/right-img.png') ?>" alt="">
        </div> -->
        <?php  ?>
        <div class="container"> <!-- Awal container -->
            <div id="header" class="shadow"> <!-- Awal Header -->
                <div id="logo">
                    <a class="navbar-brand logo-btn" href="<?= base_url() ?>">&#10023; Nonton Full &#10023;</a>
                </div>
                <nav class="nav-menu"> 
                    <!-- <button type="button" data-target="#homenav">
                        <span class="">AA</span>
                    </button> -->

                    <div class="" id="homenav">
                        <ul class="">
                            <li class="<?= isset($css_anime) ? $css_anime : "" ; ?>">
                                <a class="" href="<?= base_url() ?>">Anime DB</a>
                            </li>
                            <li class="<?= isset($css_film) ? $css_film : "" ; ?>">
                                <a class="" href="<?= base_url('film') ?>">Film DB</a>
                            </li>
                            <li class="<?= isset($css_manga) ? $css_manga : "" ; ?>">
                                <a class="" href="<?= base_url('manga') ?>">Manga DB</a>
                            </li>
                            <li class="<?= isset($css_req) ? $css_req : "" ; ?>">
                                <a class="" href="<?= base_url('request') ?>">Request</a>
                            </li>
                            <div class="search">
                                <div class="search-box">
                                    <input type="text" class="search-txt" name="" placeholder="Input Search Key">
                                    <button class="search-btn"><span class="fas fa-search"></span></button>
                                </div>
                            </div>
                        </ul>
                        
                    </div>
                </nav> 
            </div> <!-- Akhir Header -->
            <div id="batas-header">
                
            </div>
        
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
        <link rel="stylesheet" href="<?= base_url('include/sweetAlert2/sweetAlert2.min.css') ?>">
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
        
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Medicio Bootstrap Template - Index</title>
    <link rel="icon" type="image/favicon" href="<?= base_url('assets/img/2.png') ?>">
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <!-- <link href="<?php //base_url('assets/img/favicon.png') ?>" rel="icon">
    <link href="<?php //base_url('assets/img/apple-touch-icon.png') ?>" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/animate.css/animate.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/aos/aos.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/boxicons/css/boxicons.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/glightbox/css/glightbox.min.css') ?>" rel="stylesheet">
    <link href="<?= base_url('assets/vendor/swiper/swiper-bundle.min.css') ?>" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url('assets/css/style.css" rel="stylesheet') ?>">

    <!-- =======================================================
  * Template Name: Medicio - v4.7.0
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body id="page-top">
    <!-- Navigation-->
    <div id="header" class="mb-5">
        <nav style="background-color: orange;" class="navbar navbar-expand-lg fixed-top" id="mainNav">
            <div style="height: 80px;" class="container">
                <a class="navbar-brand img-nospace" href="#page-top" style=" padding:0px;"><img style="width: 80px; height: 80px;" src="<?= base_url('assets/img/2.png') ?>" alt="..." /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul>
                        <li><a class="nav-link scrollto" href="<?= base_url('index.php/dashboard') ?>">Home</a></li>
                        <li><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>">Our Service</a></li>
                        <li><a href="<?= base_url('index.php/dashboard/ourproduct') ?>"><span>Our Product</span></a></li>
                        <li class="dropdown"><a class="nav-link scrollto" href="<?= base_url('index.php/home/') ?>">About <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#rs">About Us</a></li>
                                <li><a href="#kg">Contact Us</a></li>
                            </ul>
                        </li>
                        <li><a href="<?= base_url('index.php/dashboard/faq') ?>"><span>FAQ</span></a></li>
                    </ul>
                </div>

                <?php
                if ($this->session->has_userdata('USERNAME')) { ?>
                    <!-- Pakai foto default disamping username -->
                    <img style="border-radius: 100%; width:4%; margin-right: 3px;" src="<?= base_url('assets/img/testimonials/person.png') ?>" alt="">
                    <?php
                    echo '<p style="font-family: cursive; font-size:15px; margin:0px; padding: 0px;">'
                        . $this->session->userdata('USERNAME')
                        . '<br><span style="font-family: cursive; font-size: 10px;">' . $this->session->userdata('ROLE') . '</span>'
                        . '</p>';
                    ?>
                    <a href="<?= base_url('index.php/login/logout') ?>" class="appointment-btn scrollto">Logout</a>
                <?php
                } else {
                ?>
                    <a href="<?= base_url('index.php/login/') ?>" class="appointment-btn scrollto">Sign in</a>
                    <a href="<?= base_url('index.php/login/create') ?>" class="appointment-btn scrollto">Sign up</a>
                <?php }
                ?>
            </div>
        </nav>
    </div>
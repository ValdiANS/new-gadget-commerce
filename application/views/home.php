<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('partials/head') ?>
    <title><?= $title ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/styles/landing-page.css') ?>">
</head>

<body>
    <nav class="navbar navbar-expand-md navbar-light px-4 bg-transparent position-absolute top-0 w-100">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img src="<?= base_url('assets/img/G.png') ?>" alt="Logo G-Comm" />
                <h1>
                    Gadget
                    <br />
                    Commerce
                </h1>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= site_url('shop') ?>">Shop</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About
                        </a>

                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="<?= site_url('about/contact') ?>">
                                    Contact
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="<?= site_url('about') ?>">
                                    About Us
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <img src="<?= base_url('assets/') ?>img/laptop.png" alt="Laptop" class="laptop" />

    <main>
        <section>
            <h1>
                G-Commerce
                <br />
            </h1>

            <p>
                Penuhi kebutuhan gadget Anda.
            </p>

            <div class="links-container">
                <div class="login-and-register-container">
                    <a href="<?= site_url('auth/login') ?>" class="login">LOGIN</a>
                    <a href="<?= site_url('auth/register') ?>" class="register">REGISTER</a>
                </div>

                <a href="<?= site_url('shop') ?>" class="shop">GO SHOP</a>
            </div>
        </section>
    </main>
</body>

</html>
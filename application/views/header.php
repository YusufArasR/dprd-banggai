<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>

    <link rel="icon" type="image/x-icon" href="<?= base_url('') ?>/assets/img/favicon.ico">

    <!-- CSS -->
    <link href="<?= base_url('') ?>assets/style.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/fontawesome/css/all.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/owlcarousel/assets/owl.theme.default.min.css" rel="stylesheet">
    <link href="<?= base_url('') ?>assets/datatables/datatables.min.css" rel="stylesheet" type="text/css" />

    <!-- JS -->
    <script src="<?= base_url('') ?>assets/jquery-3.6.0.min.js"></script>
    <script src="<?= base_url('') ?>assets/owlcarousel/owl.carousel.min.js"></script>
    <script src="<?= base_url('') ?>assets/datatables/datatables.min.js"></script>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="<?= base_url() ?>">
                <img height="32" src="<?= base_url('') ?>/assets/img/Logo-Kabupaten-Banggai-Laut.png" alt="logo-banggai-laut">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link <?php if (!$this->uri->segment(1)) {
                                                echo 'active';
                                            } ?>" href="<?= base_url() ?>">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if ($this->uri->segment(1) == 'akd') {
                                                                echo 'active';
                                                            } ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">AKD</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(1) == 'akd' && !$this->uri->segment(2)) {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd">Alat Kelengkapan Dewan</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'badanAnggaran') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/badanAnggaran">Badan Anggaran</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'pimpinanDprd') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/pimpinanDprd">Pimpinan DPRD</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'badanMusyawarah') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/badanMusyawarah">Badan Musyawarah</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'bappeda') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/bappeda">BAPPEDA</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'komisi1') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/komisi1">Komisi I</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'komisi2') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/komisi2">Komisi II</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'komisi3') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/komisi3">Komisi III</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if ($this->uri->segment(2) == 'komisi4') {
                                                            echo 'active';
                                                        } ?>" href="<?= base_url('') ?>akd/komisi4">Komisi IV</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'news') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>news">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'eDocument') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>eDocument">e-Document</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'agenda') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>agenda">Agenda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'gallery') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>gallery">Gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'tentang') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($this->uri->segment(1) == 'contact') {
                                                echo 'active';
                                            } ?>" href="<?= base_url('') ?>contact">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
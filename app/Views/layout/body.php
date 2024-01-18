<?= $this->extend('layout/basic'); ?>

<?= $this->section('body'); ?>

<?php

$navbarMenu = array(
    ['text' => 'Home',     'url' => ''],
    ['text' => 'About',    'url' => 'about',   'down' => array(
        ['text' => 'Tentang Kami',    'url' => 'about/us'],
        ['text' => 'Sejarah',         'url' => 'about/histories'],
        ['text' => 'Visi dan Misi',   'url' => 'about/visi-misi'],
        ['text' => 'Pengalaman Kami', 'url' => 'about/experience'],
        ['text' => 'Mitra dan Klien', 'url' => 'about/mitra-client']
    )],
    ['text' => 'Services', 'url' => 'service', 'down' => array(
        ['text' => 'Our Services', 'url' => 'service/'],
        ['text' => 'Financial Lines', 'url' => 'service/'],
        ['text' => 'General Insurance', 'url' => 'service/'],
        ['text' => 'Surety Bond', 'url' => 'service/'],
        ['text' => 'Bank Garansi', 'url' => 'service/'],
        ['text' => 'Asuransi Kredit', 'url' => 'service/'],
        ['text' => 'Property All Risk', 'url' => 'service/'],
        ['text' => 'Contractor All Risk', 'url' => 'service/'],
        ['text' => 'General Liability', 'url' => 'service/'],
        ['text' => 'Motor Vehicle', 'url' => 'service/'],
        ['text' => 'Health Insurance', 'url' => 'service/'],
        ['text' => 'Personal Accident', 'url' => 'service/'],
        ['text' => 'Marine Cargo', 'url' => 'service/'],
        ['text' => 'Marine Hull', 'url' => 'service/'],
        ['text' => 'Aviation', 'url' => 'service/'],
        ['text' => 'Kredit Multi Guna', 'url' => 'service/'],
        ['text' => 'Asuransi Uang', 'url' => 'service/'],
        ['text' => 'Alat Berat', 'url' => 'service/'],
    )],
    ['text' => 'Team',     'url' => 'team',    'down' => array(
        ['text' => 'Manajemen',   'url' => 'team/manajemen'],
        ['text' => 'Tenaga Ahli', 'url' => 'team/ahli'],
        ['text' => 'Our Team',    'url' => 'team/employee']
    )],
    ['text' => 'Gallery',  'url' => 'gallery'],
    ['text' => 'Contact',  'url' => 'contact']
);

?>

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

        <a href="/" class="logo me-auto">
            <img src="/image/logo60.jpg">
        </a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul>
                <?php foreach ($navbarMenu as $nm) : ?>

                    <?php $dropdown = $nm['down'] ?? array(); ?>

                    <?php if (empty($dropdown)) : ?>

                        <li><a class="nav-link<?php if (url_is($nm['url'])) echo ' active'; ?>" href="/<?= $nm['url']; ?>"><?= $nm['text']; ?></a></li>

                    <?php else : ?>

                        <li class="dropdown">
                            <a <?php if (url_is($nm['url'] . '*')) echo 'class="active" '; ?>href="#"><?= $nm['text']; ?> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <?php foreach ($dropdown as $dd) : ?>
                                    <li><a <?php if (url_is($dd['url'])) echo 'class="active" '; ?>href="/<?= $dd['url']; ?>"><?= $dd['text']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </li>

                    <?php endif; ?>

                <?php endforeach; ?>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>

    </div>
</header>

<?= $this->renderSection('content'); ?>

<footer id="footer">

    <div class="footer-top">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6 footer-contact">
                    <h3>Presento<span>.</span></h3>
                    <p>
                        A108 Adam Street <br>
                        New York, NY 535022<br>
                        United States <br><br>
                        <strong>Phone:</strong> +1 5589 55488 55<br>
                        <strong>Email:</strong> info@example.com<br>
                    </p>
                </div>

                <div class="col-lg-2 col-md-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
                        <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 footer-newsletter">
                    <h4>Join Our Newsletter</h4>
                    <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    <form action="" method="post">
                        <input type="email" name="email"><input type="submit" value="Subscribe">
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="container d-md-flex py-4">

        <div class="me-md-auto text-center text-md-start">
            <div class="copyright">
                &copy; Copyright <strong><span>Presento</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
        <div class="social-links text-center text-md-end pt-3 pt-md-0">
            <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
            <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
            <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
            <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
            <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<?= $this->endSection(); ?>
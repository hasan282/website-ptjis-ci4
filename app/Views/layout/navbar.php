<?php

$navbarMenu = array(
    ['text' => 'Home',     'url' => ''],
    ['text' => 'About',    'url' => 'about',   'down' => array(
        ['text' => 'Tentang Kami',    'url' => 'about/about-us'],
        ['text' => 'Sejarah',         'url' => 'about/histories'],
        ['text' => 'Visi dan Misi',   'url' => 'about/visi-misi'],
        ['text' => 'Pengalaman Kami', 'url' => 'about/experience'],
        ['text' => 'Mitra dan Klien', 'url' => 'about/mitra-client']
    )],
    ['text' => 'Services', 'url' => 'service', 'down' => array(
        ['text' => 'Our Services',      'url' => 'service/'],
        ['text' => 'Financial Lines',   'url' => 'service/', 'down' => array(
            ['text' => 'Surety Bond',     'url' => 'service/'],
            ['text' => 'Bank Garansi',    'url' => 'service/'],
            ['text' => 'Asuransi Kredit', 'url' => 'service/']
        )],
        ['text' => 'General Insurance', 'url' => 'service/', 'down' => array(
            ['text' => 'Property All Risk',   'url' => 'service/'],
            ['text' => 'Contractor All Risk', 'url' => 'service/'],
            ['text' => 'General Liability',   'url' => 'service/'],
            ['text' => 'Motor Vehicle',       'url' => 'service/'],
            ['text' => 'Health Insurance',    'url' => 'service/'],
            ['text' => 'Personal Accident',   'url' => 'service/'],
            ['text' => 'Marine Cargo',        'url' => 'service/'],
            ['text' => 'Marine Hull',         'url' => 'service/'],
            ['text' => 'Aviation',            'url' => 'service/'],
            ['text' => 'Kredit Multi Guna',   'url' => 'service/'],
            ['text' => 'Asuransi Uang',       'url' => 'service/'],
            ['text' => 'Alat Berat',          'url' => 'service/']
        )]
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
            <img src="/image/icons/logo60.jpg">
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
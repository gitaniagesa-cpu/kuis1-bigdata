<?php
// layout_header.php - Navbar Atas (WellCare Style: Background Putih, Garis Tepi Emas, Gradasi Hijau)
if (!isset($active_menu)) {
    $active_menu = 'home';
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title><?php echo isset($page_title) ? $page_title : 'Pondok Muhammadiyah Akrom Kota Metro - Big Data'; ?></title>
    <style>
        <?php 
        $css_file = __DIR__ . '/style.css';
        if (file_exists($css_file)) {
            include $css_file;
        }
        ?>
    </style>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

<!-- 1. TOP NAVBAR -->
<header class="navbar">
    <div class="container navbar-inner">
        <a href="index.php" class="brand">
            <div class="brand-icon">&#127891;</div>
            <div class="brand-text">
                <h2>Pondok Muhammadiyah Akrom</h2>
                <span>Aplikasi Pendataan MHS &bull; Kota Metro</span>
            </div>
        </a>

        <nav class="nav-links">
            <a href="index.php" class="nav-link <?php echo ($active_menu == 'home') ? 'active' : ''; ?>">Home</a>
            <a href="viewmhsaja.php" class="nav-link <?php echo ($active_menu == 'datamhs') ? 'active' : ''; ?>">Data Mahasiswa</a>
            <a href="viewfilterwanita.php" class="nav-link <?php echo ($active_menu == 'wanita') ? 'active' : ''; ?>">Filter Wanita</a>
            <a href="me.php" class="nav-link <?php echo ($active_menu == 'about') ? 'active' : ''; ?>">About Pembuat</a>
            <a href="viewmhsall.php" class="nav-link <?php echo ($active_menu == 'all') ? 'active' : ''; ?>">Tabel Lengkap</a>
        </nav>

        <div class="nav-actions">
            <a href="me.php" class="btn-pill-primary">
                Fatkhul Umam &rarr;
            </a>
        </div>
    </div>
</header>

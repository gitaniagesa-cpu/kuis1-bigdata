<?php
// layout_header.php - Header dan Sidebar Navigasi Sesuai Rancangan Soal No. 8
if (!isset($active_menu)) {
    $active_menu = '';
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
    <title><?php echo isset($page_title) ? $page_title : 'Aplikasi Pendataan Mahasiswa'; ?></title>
    <!-- Include CSS secara langsung agar browser tidak memakai cache lama -->
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

<div class="app-container">
    <!-- Header Aplikasi Sesuai Rancangan -->
    <div class="app-header">
        <h1>APLIKASI PENDATAAN MHS PONDOK MUHAMMADIYAH XYZ KOTA METRO</h1>
    </div>

    <div class="app-body">
        <!-- Sidebar Menu Navigasi Sesuai Rancangan -->
        <div class="app-sidebar">
            <span class="sidebar-title">Menu Navigasi</span>
            
            <a href="index.php" class="nav-btn <?php echo ($active_menu == 'home') ? 'active' : ''; ?>">
                HOME
            </a>
            
            <a href="viewmhsall.php" class="nav-btn <?php echo ($active_menu == 'datamhs') ? 'active' : ''; ?>">
                DATA MHS
            </a>
            
            <a href="viewfilterwanita.php" class="nav-btn <?php echo ($active_menu == 'wanita') ? 'active' : ''; ?>">
                FILTER DATA MHS "WANITA"
            </a>
            
            <a href="me.php" class="nav-btn <?php echo ($active_menu == 'about') ? 'active' : ''; ?>">
                ABOUT PEMBUAT PROGRAM
            </a>
        </div>

        <!-- Konten Halaman -->
        <div class="app-content">

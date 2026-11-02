<?php
// me.php - Informasi Pembuat Program (ID Card Mahasiswa Resmi - Soal Kuis No. 7 & 8)
$page_title = "About Pembuat Program - Fatkhul Umam (24430121)";
$active_menu = "about";

include 'layout_header.php';
?>

<section class="section">
    <div class="container">
        <div class="data-section-box">
            <div class="content-header-bar">
                ABOUT PEMBUAT PROGRAM &bull; ID CARD MAHASISWA RESMI
            </div>

            <div class="info-box">
                <span>&#127891; <strong>Soal Kuis No. 7 (me.php):</strong> Kartu Identitas Mahasiswa Resmi Pembuat Program (NPM: <strong>24430121</strong>, Nama: <strong>Fatkhul Umam</strong>, Fakultas: <strong>Fakultas Ilmu Komputer</strong>, Foto Almamater).</span>
            </div>

            <!-- Tampilkan Komponen Luxury Student ID Card -->
            <?php include 'idcard_component.php'; ?>

            <div class="text-right-small">
                * localhost/bigdata/me.php &bull; Kartu Identitas Mahasiswa Terverifikasi: Fatkhul Umam (24430121)
            </div>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>

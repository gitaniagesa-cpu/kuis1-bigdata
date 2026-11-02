<?php
// me.php - Informasi Pembuat Program (Soal Kuis No. 7 & 8)
$page_title = "About Pembuat Program - Big Data";
$active_menu = "about";

include 'layout_header.php';
?>

<div class="content-header">
    ABOUT PEMBUAT PROGRAM
</div>

<!-- Kotak Teks Info - Gradasi Emas, Teks Putih, Garis Tepi Hijau -->
<div class="info-box">
    <span>🎓 <strong>Biodata Programmer:</strong> Informasi resmi mahasiswa pengembang aplikasi pendataan data mahasiswa Pondok Muhammadiyah XYZ Kota Metro.</span>
</div>

<div class="profile-card">
    <div class="profile-img-container">
        <!-- Foto Pembuat Program -->
        <img src="img/foto_profil.jpg" alt="Foto Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
    </div>
    <div class="profile-info">
        <table>
            <tr>
                <td>NPM</td>
                <td>: <strong>24430121</strong></td>
            </tr>
            <tr>
                <td>Nama Mahasiswa</td>
                <td>: <strong>Fatkhul Umam</strong></td>
            </tr>
            <tr>
                <td>Fakultas</td>
                <td>: <strong>Fakultas Ilmu Komputer</strong></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td>: Big Data (Praktikum)</td>
            </tr>
            <tr>
                <td>Dosen Pengampu</td>
                <td>: Arif Hidayat, S.T., M.Kom</td>
            </tr>
            <tr>
                <td>Tugas</td>
                <td>: KUIS 1 - Analisis, Database & Perancangan Antarmuka</td>
            </tr>
        </table>
    </div>
</div>

<!-- Teks Kecil Rata Kanan di Bawah Garis Kartu Profil -->
<div class="text-right-small">
    * localhost/bigdata/me.php &bull; Fatkhul Umam (24430121)
</div>

<?php include 'layout_footer.php'; ?>

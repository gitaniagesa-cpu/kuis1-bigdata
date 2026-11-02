<?php
// index.php - 1 Link All-in-One: Landing Page, Data Mhs, Filter Wanita & ID Card (Pondok Muhammadiyah Akrom - KAROMAH)
require_once 'koneksi.php';
require_once __DIR__ . '/logo_karomah.php';

$page_title = "Aplikasi Pendataan MHS - Pondok Muhammadiyah Akrom (KAROMAH) Kota Metro";
$active_menu = "home";

// Ambil seluruh data mahasiswa dari MySQL
$query = "SELECT id, npm, nama_mhs, tgl_lahir, jenis_kelamin,
          TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS usia 
          FROM mahasiswa4 ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);

$students = [];
$wanita_students = [];
if ($result && mysqli_num_rows($result) > 0) {
    while ($r = mysqli_fetch_assoc($result)) {
        if ($r['usia'] === null && !empty($r['tgl_lahir'])) {
            $r['usia'] = date_diff(date_create($r['tgl_lahir']), date_create('today'))->y;
        }
        $students[] = $r;
        if (strtolower($r['jenis_kelamin']) === 'wanita') {
            $wanita_students[] = $r;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <title><?php echo $page_title; ?></title>
    <style>
        <?php include __DIR__ . '/style.css'; ?>
        .page-view { display: none; animation: fadeInView 0.25s ease-out; }
        .page-view.active { display: block; }
        @keyframes fadeInView {
            from { opacity: 0; transform: translateY(6px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .nav-link { cursor: pointer; background: none; border: none; }
    </style>
</head>
<body>

<!-- 1. TOP NAVBAR (1 LINK NAVIGATION) -->
<header class="navbar">
    <div class="container navbar-inner">
        <a href="#home" onclick="switchPage('home'); return false;" class="brand">
            <div style="flex-shrink:0;"><?php echo renderLogoKaromah(46); ?></div>
            <div class="brand-text">
                <h2>Pondok Muhammadiyah Akrom</h2>
                <span>KAROMAH &bull; Aplikasi Pendataan MHS Kota Metro</span>
            </div>
        </a>

        <nav class="nav-links">
            <button type="button" id="nav-home" class="nav-link active" onclick="switchPage('home')">Home (Rancangan)</button>
            <button type="button" id="nav-datamhs" class="nav-link" onclick="switchPage('datamhs')">Data Mahasiswa (No. 3)</button>
            <button type="button" id="nav-wanita" class="nav-link" onclick="switchPage('wanita')">Filter Wanita (No. 5)</button>
            <button type="button" id="nav-about" class="nav-link" onclick="switchPage('about')">ID Card Pembuat (No. 7)</button>
        </nav>

        <div class="nav-actions">
            <button type="button" onclick="switchPage('about')" class="btn-pill-primary" style="cursor:pointer;">
                &#129706; ID Card Fatkhul Umam &rarr;
            </button>
        </div>
    </div>
</header>

<!-- ==================== VIEW 1: HOME (ALL-IN-ONE LANDING PAGE) ==================== -->
<div id="view-home" class="page-view active">
    <!-- HERO SECTION -->
    <section class="hero-section">
        <div class="container hero-grid">
            <div>
                <span class="hero-tag">&#10024; Kuis 1 Praktikum Big Data &bull; Halaman 19</span>
                <h1 class="hero-title">
                    Aplikasi Pendataan MHS
                    <span>Pondok Muhammadiyah Akrom Kota Metro</span>
                </h1>
                <p class="hero-desc">
                    Sistem informasi terpadu untuk mengelola basis data mahasiswa Pondok Muhammadiyah Akrom Kota Metro, menghitung usia secara otomatis dari tanggal lahir, serta memfilter data mahasiswi secara presisi dalam 1 link praktis.
                </p>
                <div class="hero-buttons">
                    <button type="button" onclick="switchPage('datamhs')" class="btn-pill-primary" style="cursor:pointer;">
                        &#128203; Lihat Data Mahasiswa &rarr;
                    </button>
                    <button type="button" onclick="switchPage('wanita')" class="btn-pill-outline" style="cursor:pointer;">
                        &#128105; Filter Mahasiswi "Wanita"
                    </button>
                </div>

                <div class="hero-trust-row">
                    <div class="trust-item">
                        <div class="trust-icon">&#128451;</div>
                        <div class="trust-text">
                            <strong>Tabel mahasiswa4</strong>
                            <span>MySQL Database Aktif</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">&#128101;</div>
                        <div class="trust-text">
                            <strong><?php echo count($students); ?> Mahasiswa</strong>
                            <span>3 Pria &amp; 2 Wanita</span>
                        </div>
                    </div>
                    <div class="trust-item">
                        <div class="trust-icon">&#127891;</div>
                        <div class="trust-text">
                            <strong>Fatkhul Umam</strong>
                            <span>NPM: 24430121 &bull; FIKOM</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="hero-visual">
                <div class="hero-blob">
                    <img src="img/foto_profil.jpg" alt="Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
                </div>
                <div class="floating-badge">
                    <div class="floating-badge-icon">&#10004;</div>
                    <div class="floating-badge-text">
                        <strong>Fatkhul Umam</strong>
                        <span>NPM: 24430121</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4-CARD FEATURE SECTION -->
    <section class="section">
        <div class="container">
            <div class="features-grid">
                <div class="feature-VisualCard">
                    <div>
                        <span class="hero-tag" style="background:#fff; margin-bottom:12px;">Rancangan No. 8</span>
                        <h3>Pondok Muhammadiyah Akrom Kota Metro</h3>
                        <p>Semua fitur soal Kuis 1 (No. 1 s/d No. 8) terintegrasi dalam 1 halaman praktis.</p>
                    </div>
                    <a href="#tabel-utama" class="btn-pill-outline" style="width:fit-content;">
                        Tabel Utama &darr;
                    </a>
                </div>

                <div class="feature-card">
                    <div>
                        <div class="feature-icon">&#128203;</div>
                        <h4>Data Mhs &amp; Usia</h4>
                        <span class="sub-cat">viewmhsaja.php &bull; Soal No. 3</span>
                        <p>Menampilkan kolom ID, NPM, Nama Mahasiswa, dan kalkulasi Usia otomatis dari tanggal lahir.</p>
                    </div>
                    <button type="button" onclick="switchPage('datamhs')" class="btn-card-link" style="cursor:pointer;">Buka viewmhsaja &rarr;</button>
                </div>

                <div class="feature-card">
                    <div>
                        <div class="feature-icon">&#128105;</div>
                        <h4>Filter Wanita</h4>
                        <span class="sub-cat">viewfilterwanita.php &bull; Soal No. 5</span>
                        <p>Menampilkan daftar mahasiswi khusus berjenis kelamin Wanita (Mujiyanti &amp; Fatimah).</p>
                    </div>
                    <button type="button" onclick="switchPage('wanita')" class="btn-card-link" style="cursor:pointer;">Buka Filter Wanita &rarr;</button>
                </div>

                <div class="feature-card">
                    <div>
                        <div class="feature-icon">&#127891;</div>
                        <h4>ID Card Pembuat</h4>
                        <span class="sub-cat">me.php &bull; Soal No. 7</span>
                        <p>Kartu Identitas Mahasiswa resmi: NPM 24430121, Fatkhul Umam, Fakultas Ilmu Komputer, dan Foto.</p>
                    </div>
                    <button type="button" onclick="switchPage('about')" class="btn-card-link" style="cursor:pointer;">Buka ID Card Me &rarr;</button>
                </div>
            </div>
        </div>
    </section>

    <!-- STUDENT PROFILE CARDS SECTION -->
    <section class="section" style="padding-top: 10px;">
        <div class="container">
            <div class="students-layout">
                <div class="section-intro">
                    <span class="category-tag" style="display:inline-block; margin-bottom:10px;">Record Database</span>
                    <h3>Daftar <span>Mahasiswa</span> Pondok Akrom</h3>
                    <p>Data diambil secara langsung dari tabel <code>mahasiswa4</code> pada server MySQL.</p>
                    <button type="button" onclick="switchPage('datamhs')" class="btn-pill-primary" style="cursor:pointer;">Lihat Detail Usia &rarr;</button>
                </div>

                <div class="student-cards-grid">
                    <?php foreach ($students as $mhs): 
                        $initials = strtoupper(substr($mhs['nama_mhs'], 0, 1));
                    ?>
                    <div class="student-card">
                        <div class="student-avatar"><?php echo $initials; ?></div>
                        <h5><?php echo htmlspecialchars($mhs['nama_mhs']); ?></h5>
                        <span class="npm-tag">NPM: <?php echo htmlspecialchars($mhs['npm']); ?></span>
                        <div class="meta-info">
                            &#128197; <?php echo htmlspecialchars($mhs['usia']); ?> Tahun &bull; <?php echo htmlspecialchars($mhs['jenis_kelamin']); ?>
                        </div>
                        <button type="button" onclick="switchPage('datamhs')" class="pill-mini" style="cursor:pointer;">ID #<?php echo $mhs['id']; ?> &rarr;</button>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- TABEL DATA LENGKAP -->
    <section class="section" id="tabel-utama" style="padding-top: 10px;">
        <div class="container">
            <div class="data-section-box">
                <div class="content-header-bar">
                    APLIKASI PENDATAAN MHS PONDOK MUHAMMADIYAH AKROM KOTA METRO
                </div>

                <div class="info-box">
                    <span>&#128204; <strong>Daftar Data Mahasiswa (No. 8):</strong> Menampilkan NO, NPM, NAMA MHS, dan USIA dengan hasil rata tengah, garis tepi emas, dan gradasi hijau.</span>
                </div>

                <div class="toolbar-row">
                    <span class="category-tag">Tabel Database: mahasiswa4</span>
                    <input type="text" class="search-input" placeholder="&#128269; Cari NPM atau Nama Mahasiswa..." onkeyup="filterTable(this)">
                </div>

                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width: 60px;">NO</th>
                                <th style="width: 140px;">NPM</th>
                                <th>NAMA MHS</th>
                                <th style="width: 120px;">USIA</th>
                                <th style="width: 140px;">JENIS KELAMIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no = 1; foreach ($students as $row): ?>
                            <tr>
                                <td><strong><?php echo $no++; ?></strong></td>
                                <td><span class="npm-pill"><?php echo htmlspecialchars($row['npm']); ?></span></td>
                                <td><strong><?php echo htmlspecialchars($row['nama_mhs']); ?></strong></td>
                                <td><span class="usia-pill"><?php echo htmlspecialchars($row['usia']); ?> Tahun</span></td>
                                <td>
                                    <span class="badge <?php echo ($row['jenis_kelamin'] == 'Wanita') ? 'badge-wanita' : 'badge-pria'; ?>">
                                        <?php echo htmlspecialchars($row['jenis_kelamin']); ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-right-small">
                    * Menampilkan total <?php echo count($students); ?> record mahasiswa Pondok Muhammadiyah Akrom Kota Metro
                </div>
            </div>
        </div>
    </section>

    <!-- SEKSI ID CARD MAHASISWA PEMBUAT PROGRAM -->
    <section class="section" style="padding-top: 10px;">
        <div class="container">
            <div class="data-section-box">
                <div class="content-header-bar">
                    ID CARD MAHASISWA RESMI &bull; PEMBUAT PROGRAM (ME.PHP)
                </div>
                <?php include 'idcard_component.php'; ?>
            </div>
        </div>
    </section>
</div>

<!-- ==================== VIEW 2: DATA MAHASISWA & USIA (viewmhsaja.php) ==================== -->
<div id="view-datamhs" class="page-view">
    <section class="section">
        <div class="container">
            <div class="data-section-box">
                <div class="content-header-bar">
                    DAFTAR DATA MHS &bull; PONDOK MUHAMMADIYAH AKROM KOTA METRO
                </div>

                <div class="info-box">
                    <span>&#128203; <strong>Soal Kuis No. 3 &amp; 4 (viewmhsaja.php):</strong> Menampilkan kolom <strong>ID, NPM, NAMA MHS,</strong> dan <strong>USIA</strong> yang dihitung otomatis dari tanggal lahir.</span>
                </div>

                <div class="toolbar-row">
                    <span class="category-tag">Kategori: Data Mahasiswa &amp; Usia</span>
                    <input type="text" class="search-input" placeholder="&#128269; Cari NPM atau Nama..." onkeyup="filterTable(this)">
                </div>

                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width: 60px;">ID</th>
                                <th style="width: 140px;">NPM</th>
                                <th>NAMA MHS</th>
                                <th style="width: 120px;">USIA</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($students as $row): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($row['id']); ?></strong></td>
                                <td><span class="npm-pill"><?php echo htmlspecialchars($row['npm']); ?></span></td>
                                <td><strong><?php echo htmlspecialchars($row['nama_mhs']); ?></strong></td>
                                <td><span class="usia-pill"><?php echo htmlspecialchars($row['usia']); ?> Tahun</span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-right-small">
                    * localhost/bigdata/viewmhsaja.php &bull; Total <?php echo count($students); ?> Record Mahasiswa
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ==================== VIEW 3: FILTER WANITA (viewfilterwanita.php) ==================== -->
<div id="view-wanita" class="page-view">
    <section class="section">
        <div class="container">
            <div class="data-section-box">
                <div class="content-header-bar">
                    DAFTAR DATA MAHASISWA "WANITA" &bull; PONDOK MUHAMMADIYAH AKROM KOTA METRO
                </div>

                <div class="info-box">
                    <span>&#128105; <strong>Soal Kuis No. 5 &amp; 6 (viewfilterwanita.php):</strong> Menampilkan hasil pemfilteran SQL <code>WHERE jenis_kelamin = 'Wanita'</code> pada kolom <strong>ID, NAMA MHS,</strong> dan <strong>JENIS KELAMIN</strong>.</span>
                </div>

                <div class="toolbar-row">
                    <span class="category-tag">Kategori: Filter Mahasiswi Wanita</span>
                    <input type="text" class="search-input" placeholder="&#128269; Cari Nama Mahasiswi..." onkeyup="filterTable(this)">
                </div>

                <div class="table-wrapper">
                    <table class="data-table">
                        <thead>
                            <tr>
                                <th style="width: 65px;">ID</th>
                                <th>NAMA MHS</th>
                                <th style="width: 170px;">JENIS KELAMIN</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($wanita_students as $row): ?>
                            <tr>
                                <td><strong><?php echo htmlspecialchars($row['id']); ?></strong></td>
                                <td><strong><?php echo htmlspecialchars($row['nama_mhs']); ?></strong></td>
                                <td><span class="badge badge-wanita"><?php echo htmlspecialchars($row['jenis_kelamin']); ?></span></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>

                <div class="text-right-small">
                    * localhost/bigdata/viewfilterwanita.php &bull; Terfilter <?php echo count($wanita_students); ?> Record Wanita
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ==================== VIEW 4: ID CARD PEMBUAT PROGRAM (me.php) ==================== -->
<div id="view-about" class="page-view">
    <section class="section">
        <div class="container">
            <div class="data-section-box">
                <div class="content-header-bar">
                    ABOUT PEMBUAT PROGRAM &bull; ID CARD MAHASISWA RESMI
                </div>

                <div class="info-box">
                    <span>&#127891; <strong>Soal Kuis No. 7 (me.php):</strong> Kartu Identitas Mahasiswa Resmi Pembuat Program (NPM: <strong>24430121</strong>, Nama: <strong>Fatkhul Umam</strong>, Fakultas: <strong>Fakultas Ilmu Komputer</strong>, Foto Almamater).</span>
                </div>

                <?php include 'idcard_component.php'; ?>

                <div class="text-right-small">
                    * localhost/bigdata/me.php &bull; Kartu Identitas Mahasiswa Terverifikasi: Fatkhul Umam (24430121)
                </div>
            </div>
        </div>
    </section>
</div>

<!-- BOTTOM BANNER SECTION -->
<div class="container">
    <div class="bottom-banner">
        <div class="banner-left">
            <div style="flex-shrink:0;"><?php echo renderLogoKaromah(58); ?></div>
            <div>
                <h3>Pondok Muhammadiyah Akrom (KAROMAH) Kota Metro</h3>
                <p>Aplikasi Pendataan Mahasiswa &bull; Dikembangkan untuk memenuhi tugas Kuis 1 Praktikum Big Data oleh Fatkhul Umam (NPM: 24430121), Fakultas Ilmu Komputer.</p>
            </div>
        </div>

        <div class="banner-form-card">
            <div class="form-grid">
                <div class="form-group">
                    <label>Nama Pembuat Program *</label>
                    <input type="text" class="form-control" value="Fatkhul Umam" readonly>
                </div>
                <div class="form-group">
                    <label>NPM Mahasiswa *</label>
                    <input type="text" class="form-control" value="24430121" readonly>
                </div>
                <div class="form-group">
                    <label>Fakultas *</label>
                    <input type="text" class="form-control" value="Fakultas Ilmu Komputer" readonly>
                </div>
                <div class="form-group">
                    <label>Dosen Pengampu *</label>
                    <input type="text" class="form-control" value="Arif Hidayat, S.T., M.Kom" readonly>
                </div>
            </div>
            <button type="button" onclick="switchPage('datamhs')" class="btn-pill-primary btn-full" style="cursor:pointer;">
                &#128203; Lihat Data Mahasiswa &amp; Usia (viewmhsaja) &rarr;
            </button>
        </div>
    </div>
</div>

<script>
function switchPage(pageId) {
    document.querySelectorAll('.page-view').forEach(function(el) {
        el.classList.remove('active');
    });
    document.querySelectorAll('.nav-link').forEach(function(el) {
        el.classList.remove('active');
    });
    var target = document.getElementById('view-' + pageId);
    if (target) target.classList.add('active');
    var navBtn = document.getElementById('nav-' + pageId);
    if (navBtn) navBtn.classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function filterTable(inputEl) {
    var filter = inputEl.value.toLowerCase();
    var table = inputEl.closest('.data-section-box').querySelector('.data-table');
    var rows = table.querySelectorAll('tbody tr');
    rows.forEach(function(row) {
        var text = row.textContent.toLowerCase();
        row.style.display = text.indexOf(filter) > -1 ? '' : 'none';
    });
}
</script>
</body>
</html>

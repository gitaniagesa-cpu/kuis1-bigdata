<?php
// index.php - Bento Portfolio Landing Page (Aarav Singh Style + Warna Putih, Garis Emas, Gradasi Hijau)
require_once 'koneksi.php';
require_once __DIR__ . '/logo_karomah.php';

$page_title = "Fatkhul Umam (24430121) - Aplikasi Pendataan MHS Pondok Santap Enak";
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
        .page-view { display: none; animation: fadeUpLuxury 0.4s cubic-bezier(0.22, 1, 0.36, 1) both; }
        .page-view.active { display: block; }
    </style>
</head>
<body>

<!-- ==================== 1. FLOATING PILL NAVBAR (SEPERTI AARAV SINGH) ==================== -->
<div class="navbar-pill-wrap">
    <div class="container">
        <div class="navbar-pill">
            <a href="#home" onclick="switchPage('home'); return false;" class="brand">
                <div style="flex-shrink:0;"><?php echo renderLogoKaromah(42); ?></div>
                <div class="brand-text">
                    <h2>Fatkhul Umam</h2>
                    <span>Pondok Santap Enak &bull; NPM 24430121</span>
                </div>
            </a>

            <div class="pill-nav-menu">
                <button type="button" id="nav-home" class="pill-nav-item active" onclick="switchPage('home')">Home</button>
                <button type="button" id="nav-datamhs" class="pill-nav-item" onclick="switchPage('datamhs')">Data Mhs</button>
                <button type="button" id="nav-wanita" class="pill-nav-item" onclick="switchPage('wanita')">Filter Wanita</button>
                <button type="button" id="nav-about" class="pill-nav-item" onclick="switchPage('about')">ID Card Me</button>
            </div>

            <div class="nav-actions">
                <button type="button" onclick="switchPage('about')" class="btn-pill-primary" style="cursor:pointer;">
                    Let's Talk &bull; ID Card &#8599;
                </button>
            </div>
        </div>
    </div>
</div>

<div class="bento-page-wrap">
    <div class="container">

        <!-- ==================== VIEW 1: HOME (BENTO PORTFOLIO LANDING PAGE) ==================== -->
        <div id="view-home" class="page-view active">

            <!-- SECTION 1: HERO BENTO CARD -->
            <div class="bento-section-card bento-hero">
                <div class="bento-hero-grid">
                    <div>
                        <span class="bento-hello">HELLO, I'M</span>
                        <h1 class="bento-hero-name">Fatkhul Umam</h1>
                        <div class="bento-hero-role">Aplikasi Pendataan MHS Pondok Santap Enak</div>
                        <p class="bento-hero-desc">
                            Mahasiswa Fakultas Ilmu Komputer (NPM: <strong>24430121</strong>). Merancang sistem basis data yang presisi, terstruktur, dan elegan untuk Kuis 1 Praktikum Big Data Kota Metro.
                        </p>

                        <div class="hero-buttons" style="margin-bottom: 0;">
                            <button type="button" onclick="switchPage('datamhs')" class="btn-pill-primary" style="cursor:pointer;">
                                View Data Mhs &#8599;
                            </button>
                            <button type="button" onclick="switchPage('wanita')" class="btn-pill-outline" style="cursor:pointer;">
                                Filter Wanita &#8595;
                            </button>
                        </div>

                        <div class="bento-trusted">
                            <small>Powered &amp; Verified by</small>
                            <div class="bento-logos-row">
                                <span>&#128451; MySQL Database</span>
                                <span>&#9881; PHP 8 Native</span>
                                <span>&#127869; Pondok Santap Enak</span>
                                <span>&#127891; FIKOM Metro</span>
                            </div>
                        </div>
                    </div>

                    <div class="bento-hero-visual">
                        <!-- Bingkai Miring di Belakang Foto -->
                        <div class="bento-tilted-frame"></div>

                        <!-- Foto Utuh Tanpa Crop & Ukuran Proporsional -->
                        <div class="bento-photo-box">
                            <img src="img/foto_profil.jpg" alt="Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
                        </div>

                        <!-- Floating Stat Kanan Atas (5+ Record) -->
                        <div class="bento-stat-float">
                            <strong><?php echo count($students); ?>+</strong>
                            <span>Record Data<br>Mahasiswa</span>
                        </div>

                        <!-- Floating Sparkle Orb Kiri Bawah -->
                        <div class="bento-sparkle-orb">&#10022;</div>

                        <!-- Floating Impact Graph Card Kanan Bawah -->
                        <div class="bento-chart-float">
                            <small>Database Impact</small>
                            <strong>+100% Akurat</strong>
                            <svg width="100%" height="26" viewBox="0 0 120 26" fill="none" xmlns="http://www.w3.org/2000/svg" style="margin-top:3px;">
                                <path d="M2 22L24 16L46 19L70 10L94 12L118 3" stroke="#15803d" stroke-width="2.5" stroke-linecap="round"/>
                                <circle cx="118" cy="3" r="3" fill="#d4af37"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SECTION 2: ABOUT ME & STATS -->
            <div class="bento-section-card">
                <div class="bento-about-grid">
                    <div>
                        <span class="bento-mini-tag">ABOUT ME &amp; SYSTEM</span>
                        <h3 class="bento-sec-title">Pendataan dengan Empati,<br>Dibangun dengan Presisi</h3>
                        <div class="bento-3stats">
                            <div class="bento-3stat-item">
                                <strong><?php echo count($students); ?>+</strong>
                                <span>Total Mahasiswa</span>
                            </div>
                            <div class="bento-3stat-item">
                                <strong>3+</strong>
                                <span>Mahasiswa Pria</span>
                            </div>
                            <div class="bento-3stat-item">
                                <strong><?php echo count($wanita_students); ?>+</strong>
                                <span>Mahasiswi Wanita</span>
                            </div>
                        </div>
                    </div>

                    <div>
                        <p style="font-size:0.86rem; color:#475569; margin-bottom:18px;">
                            Aplikasi Pendataan Mahasiswa <strong>Pondok Santap Enak Kota Metro</strong> ini dikembangkan oleh <strong>Fatkhul Umam (NPM: 24430121)</strong> dari <strong>Fakultas Ilmu Komputer</strong> di bawah bimbingan dosen pengampu <strong>Arif Hidayat, S.T., M.Kom</strong> untuk menyelesaikan seluruh instruksi Kuis 1 Big Data.
                        </p>
                        <button type="button" onclick="switchPage('about')" class="btn-pill-outline" style="cursor:pointer;">
                            More About Me (ID Card) &#8599;
                        </button>
                    </div>
                </div>
            </div>

            <!-- SECTION 3: WHAT I DO / MODUL KUIS 1 (4 BENTO CARDS) -->
            <div class="bento-section-card">
                <span class="bento-mini-tag">WHAT I DO &bull; KUIS 1</span>
                <h3 class="bento-sec-title">Modul Program yang Tersedia</h3>

                <div class="bento-4cards">
                    <div class="bento-service-card" onclick="document.getElementById('tabel-utama').scrollIntoView({behavior:'smooth'});">
                        <div class="bento-service-icon">&#128451;</div>
                        <h4>Tabel mahasiswa4</h4>
                        <p>Analisis tipe data SQL (INT, VARCHAR, DATE, ENUM) dan pengisian 5 record mahasiswa Pondok Santap Enak.</p>
                        <span class="bento-corner-arrow">&#8599;</span>
                    </div>

                    <div class="bento-service-card" onclick="switchPage('datamhs')">
                        <div class="bento-service-icon">&#128203;</div>
                        <h4>viewmhsaja.php</h4>
                        <p>Menampilkan ID, NPM, Nama Mahasiswa, dan kalkulasi Usia otomatis menggunakan fungsi tanggal SQL.</p>
                        <span class="bento-corner-arrow">&#8599;</span>
                    </div>

                    <div class="bento-service-card" onclick="switchPage('wanita')">
                        <div class="bento-service-icon">&#128105;</div>
                        <h4>viewfilterwanita.php</h4>
                        <p>Memfilter dan menampilkan data khusus mahasiswi berjenis kelamin Wanita (Mujiyanti &amp; Fatimah).</p>
                        <span class="bento-corner-arrow">&#8599;</span>
                    </div>

                    <div class="bento-service-card" onclick="switchPage('about')">
                        <div class="bento-service-icon">&#129706;</div>
                        <h4>me.php (ID Card)</h4>
                        <p>Holographic Glass ID Card pembuat program: Fatkhul Umam (NPM 24430121) dengan latar gedung mewah.</p>
                        <span class="bento-corner-arrow">&#8599;</span>
                    </div>
                </div>
            </div>

            <!-- SECTION 4: TOOLS & SKILLS / TECHNOLOGIES I USE -->
            <div class="bento-section-card">
                <span class="bento-mini-tag">TOOLS &amp; SKILLS</span>
                <h3 class="bento-sec-title">Teknologi yang Digunakan</h3>

                <div class="bento-tech-grid">
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">PHP</div>
                        <span>PHP 8.2</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">SQL</div>
                        <span>MySQL DB</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">XMP</div>
                        <span>XAMPP</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">DDL</div>
                        <span>mahasiswa4</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">AGE</div>
                        <span>TIMESTAMPDIFF</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">CSS</div>
                        <span>Glass &amp; Gold</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">SVG</div>
                        <span>Gourmet Logo</span>
                    </div>
                    <div class="bento-tech-item">
                        <div class="bento-tech-badge">GIT</div>
                        <span>GitHub Pages</span>
                    </div>
                </div>
            </div>

            <!-- SECTION 5: SELECTED WORK / TABEL UTAMA RANCANGAN NO. 8 -->
            <div class="bento-section-card" id="tabel-utama">
                <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:14px; flex-wrap:wrap; gap:10px;">
                    <div>
                        <span class="bento-mini-tag">FEATURED DATABASE TABLE &bull; SOAL NO. 8</span>
                        <h3 class="bento-sec-title" style="margin-bottom:0;">APLIKASI PENDATAAN MHS PONDOK SANTAP ENAK KOTA METRO</h3>
                    </div>
                    <button type="button" onclick="switchPage('datamhs')" class="btn-pill-outline" style="cursor:pointer;">
                        Buka viewmhsaja.php &#8599;
                    </button>
                </div>

                <div class="info-box">
                    <span>&#128204; <strong>Daftar Data Mahasiswa:</strong> Hasil tampil di tengah, teks kategori kecil yang nyaman, garis tepi emas, dan gradasi hijau.</span>
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
                    * Menampilkan total <?php echo count($students); ?> record mahasiswa Pondok Santap Enak Kota Metro
                </div>
            </div>

            <!-- SECTION 6: MY PROCESS / TAHAPAN PENGERJAAN (01 - 05) -->
            <div class="bento-section-card">
                <span class="bento-mini-tag">MY PROCESS</span>
                <h3 class="bento-sec-title">Alur Pengerjaan Kuis 1 Big Data</h3>

                <div class="bento-process-grid">
                    <div class="bento-process-card">
                        <div class="bento-process-num"><span>01</span> <span>&#128269;</span></div>
                        <h5>Analisa Tabel</h5>
                        <p>Merancang struktur tipe data tabel <code>mahasiswa4</code> di database MySQL.</p>
                    </div>
                    <div class="bento-process-card">
                        <div class="bento-process-num"><span>02</span> <span>&#128229;</span></div>
                        <h5>Insert Record</h5>
                        <p>Mengisi 5 baris data mahasiswa kelahiran tahun 2004 secara akurat.</p>
                    </div>
                    <div class="bento-process-card">
                        <div class="bento-process-num"><span>03</span> <span>&#128203;</span></div>
                        <h5>View Usia</h5>
                        <p>Membuat <code>viewmhsaja.php</code> untuk menampilkan ID, NPM, Nama &amp; Usia.</p>
                    </div>
                    <div class="bento-process-card">
                        <div class="bento-process-num"><span>04</span> <span>&#128105;</span></div>
                        <h5>Filter Wanita</h5>
                        <p>Membuat <code>viewfilterwanita.php</code> khusus mahasiswi wanita.</p>
                    </div>
                    <div class="bento-process-card">
                        <div class="bento-process-num"><span>05</span> <span>&#129706;</span></div>
                        <h5>ID Card &amp; UI</h5>
                        <p>Membangun <code>me.php</code> dan menyatukan seluruh rancangan dalam 1 link.</p>
                    </div>
                </div>
            </div>

            <!-- SECTION 7: HOLOGRAPHIC GLASS ID CARD OVER LUXURY BUILDING -->
            <div class="bento-section-card">
                <span class="bento-mini-tag">DEVELOPER IDENTITY CARD &bull; SOAL NO. 7</span>
                <h3 class="bento-sec-title">Holographic ID Card &ndash; Fatkhul Umam</h3>
                <?php include 'idcard_component.php'; ?>
            </div>

        </div>

        <!-- ==================== VIEW 2: DATA MAHASISWA & USIA (viewmhsaja.php) ==================== -->
        <div id="view-datamhs" class="page-view">
            <div class="bento-section-card">
                <div class="content-header-bar">
                    DAFTAR DATA MHS &bull; PONDOK SANTAP ENAK KOTA METRO
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

        <!-- ==================== VIEW 3: FILTER WANITA (viewfilterwanita.php) ==================== -->
        <div id="view-wanita" class="page-view">
            <div class="bento-section-card">
                <div class="content-header-bar">
                    DAFTAR DATA MAHASISWA "WANITA" &bull; PONDOK SANTAP ENAK KOTA METRO
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

        <!-- ==================== VIEW 4: ID CARD PEMBUAT PROGRAM (me.php) ==================== -->
        <div id="view-about" class="page-view">
            <div class="bento-section-card">
                <div class="content-header-bar">
                    ABOUT PEMBUAT PROGRAM &bull; HOLOGRAPHIC ID CARD (ME.PHP)
                </div>

                <div class="info-box">
                    <span>&#127891; <strong>Soal Kuis No. 7 (me.php):</strong> Kartu Identitas Mahasiswa Pembuat Program (NPM: <strong>24430121</strong>, Nama: <strong>Fatkhul Umam</strong>, Fakultas: <strong>Fakultas Ilmu Komputer</strong>, Foto Almamater).</span>
                </div>

                <?php include 'idcard_component.php'; ?>

                <div class="text-right-small">
                    * localhost/bigdata/me.php &bull; Fatkhul Umam (24430121)
                </div>
            </div>
        </div>

        <!-- SECTION 8: LET'S CONNECT / BOTTOM BANNER -->
        <div class="bottom-banner" style="margin-bottom:0;">
            <div class="banner-left">
                <div style="flex-shrink:0;"><?php echo renderLogoKaromah(58); ?></div>
                <div>
                    <span style="font-size:0.68rem; font-weight:800; letter-spacing:1.2px; color:#fef08a; text-transform:uppercase;">LET'S CONNECT</span>
                    <h3>Pondok Santap Enak Kota Metro</h3>
                    <p>Dikembangkan oleh <strong>Fatkhul Umam (NPM: 24430121)</strong> &bull; Fakultas Ilmu Komputer &bull; Dosen Pengampu: Arif Hidayat, S.T., M.Kom.</p>
                </div>
            </div>

            <div class="banner-form-card">
                <div class="form-grid">
                    <div class="form-group">
                        <label>Your Name</label>
                        <input type="text" class="form-control" value="Fatkhul Umam" readonly>
                    </div>
                    <div class="form-group">
                        <label>Student NPM</label>
                        <input type="text" class="form-control" value="24430121" readonly>
                    </div>
                    <div class="form-group">
                        <label>Faculty</label>
                        <input type="text" class="form-control" value="Fakultas Ilmu Komputer" readonly>
                    </div>
                    <div class="form-group">
                        <label>Course Lecturer</label>
                        <input type="text" class="form-control" value="Arif Hidayat, S.T., M.Kom" readonly>
                    </div>
                </div>
                <button type="button" onclick="switchPage('datamhs')" class="btn-pill-primary btn-full" style="cursor:pointer;">
                    &#128203; Lihat Data Mahasiswa &amp; Usia (viewmhsaja) &#8599;
                </button>
            </div>
        </div>

    </div>
</div>

<script>
function switchPage(pageId) {
    document.querySelectorAll('.page-view').forEach(function(el) {
        el.classList.remove('active');
    });
    document.querySelectorAll('.pill-nav-item').forEach(function(el) {
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
    var container = inputEl.closest('.bento-section-card, .data-section-box');
    var table = container.querySelector('.data-table');
    var rows = table.querySelectorAll('tbody tr');
    rows.forEach(function(row) {
        var text = row.textContent.toLowerCase();
        row.style.display = text.indexOf(filter) > -1 ? '' : 'none';
    });
}
</script>
</body>
</html>

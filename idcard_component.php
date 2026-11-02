<?php require_once __DIR__ . '/logo_karomah.php'; ?>
<!-- idcard_component.php - Kartu Tanda Mahasiswa (Model KTP Resmi) - Foto Utuh Tanpa Crop -->
<div class="idcard-wrapper">
    <div class="ktp-card">
        <!-- Watermark Logo Karomah di Tengah Latar KTP -->
        <div class="ktp-watermark">
            <?php echo renderLogoKaromah(230); ?>
        </div>

        <!-- HEADER KTP / KTM -->
        <div class="ktp-header">
            <div class="ktp-header-logo">
                <?php echo renderLogoKaromah(58); ?>
            </div>
            <div class="ktp-header-title">
                <h2>PROVINSI LAMPUNG &bull; KOTA METRO</h2>
                <h3>PONDOK MUHAMMADIYAH AKROM (KAROMAH)</h3>
                <span>KARTU TANDA MAHASISWA &ndash; FAKULTAS ILMU KOMPUTER</span>
            </div>
            <div class="ktp-verified-badge">
                &#128274; E-KTM RESMI
            </div>
        </div>

        <!-- GARIS EMAS PEMBATAS HEADER KTP -->
        <div class="ktp-divider"></div>

        <!-- BODY KTP: KIRI BIODATA SEJAJAR, KANAN FOTO UTUH TANPA CROP + TANDA TANGAN -->
        <div class="ktp-body">
            <!-- Sisi Kiri: Data seperti KTP -->
            <div class="ktp-info">
                <div class="ktp-nik-row">
                    <span class="ktp-nik-label">NPM / NIK</span>
                    <span class="ktp-nik-colon">:</span>
                    <span class="ktp-nik-value">24430121</span>
                </div>

                <table class="ktp-table">
                    <tr>
                        <td class="ktp-label">Nama</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val"><strong>FATKHUL UMAM</strong></td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Jenis Kelamin</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">LAKI-LAKI &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <strong>Status :</strong> MAHASISWA AKTIF</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Fakultas</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val"><strong>FAKULTAS ILMU KOMPUTER</strong></td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Pondok / Asrama</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">PONDOK MUHAMMADIYAH AKROM (KAROMAH)</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">&nbsp;&nbsp;&nbsp;&nbsp;Kel/Desa &amp; Kota</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">KOTA METRO &ndash; PROVINSI LAMPUNG</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">&nbsp;&nbsp;&nbsp;&nbsp;Agama</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">ISLAM (MUHAMMADIYAH)</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Mata Kuliah</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">PRAKTIKUM BIG DATA (KUIS 1 &ndash; TABEL MAHASISWA4)</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Dosen Pengampu</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">ARIF HIDAYAT, S.T., M.KOM</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Kewarganegaraan</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val">WNI</td>
                    </tr>
                    <tr>
                        <td class="ktp-label">Berlaku Hingga</td>
                        <td class="ktp-colon">:</td>
                        <td class="ktp-val"><strong>SEUMUR HIDUP / SELAMA MAHASISWA</strong></td>
                    </tr>
                </table>

                <!-- Barcode & Chip KTP di Kiri Bawah -->
                <div class="ktp-bottom-meta">
                    <div class="ktp-chip">
                        <div class="ktp-chip-line"></div>
                        <div class="ktp-chip-line"></div>
                    </div>
                    <div class="ktp-barcode-wrap">
                        <svg width="190" height="28" viewBox="0 0 185 36" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="3" height="32" fill="#064e3b"/>
                            <rect x="8" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="12" y="2" width="4" height="32" fill="#064e3b"/>
                            <rect x="19" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="24" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="29" y="2" width="5" height="32" fill="#064e3b"/>
                            <rect x="37" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="42" y="2" width="3" height="32" fill="#064e3b"/>
                            <rect x="48" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="53" y="2" width="4" height="32" fill="#064e3b"/>
                            <rect x="60" y="2" width="2.5" height="32" fill="#064e3b"/>
                            <rect x="65" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="70" y="2" width="4.5" height="32" fill="#064e3b"/>
                            <rect x="78" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="83" y="2" width="3.5" height="32" fill="#064e3b"/>
                            <rect x="90" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="95" y="2" width="4" height="32" fill="#064e3b"/>
                            <rect x="102" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="107" y="2" width="5" height="32" fill="#0f172a"/>
                            <rect x="115" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="120" y="2" width="3" height="32" fill="#064e3b"/>
                            <rect x="126" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="131" y="2" width="4" height="32" fill="#064e3b"/>
                            <rect x="138" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="143" y="2" width="3.5" height="32" fill="#064e3b"/>
                            <rect x="150" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="155" y="2" width="4.5" height="32" fill="#064e3b"/>
                            <rect x="163" y="2" width="1.5" height="32" fill="#064e3b"/>
                            <rect x="168" y="2" width="3" height="32" fill="#064e3b"/>
                            <rect x="174" y="2" width="2" height="32" fill="#064e3b"/>
                            <rect x="179" y="2" width="4" height="32" fill="#064e3b"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Sisi Kanan: Pas Foto UTUH (Tanpa Crop) + Kota, Tanggal & Tanda Tangan seperti KTP -->
            <div class="ktp-photo-column">
                <div class="ktp-photo-frame">
                    <img src="img/foto_profil.jpg" alt="Foto Utuh Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
                </div>
                <div class="ktp-sign-area">
                    <div class="ktp-city-date">KOTA METRO</div>
                    <div class="ktp-issue-date">01-11-2026</div>
                    <svg class="ktp-signature-svg" width="125" height="34" viewBox="0 0 150 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15 28C25 10 35 6 38 18C40 26 28 32 34 22C42 12 52 14 55 24C58 29 66 15 74 14C80 13 78 27 86 24C95 21 104 10 115 16C122 20 118 28 135 20" stroke="#064e3b" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    <div class="ktp-sign-name">FATKHUL UMAM</div>
                </div>
            </div>
        </div>

        <!-- FOOTER KTP -->
        <div class="ktp-footer">
            PONDOK MUHAMMADIYAH AKROM (KAROMAH) &nbsp;&bull;&nbsp; FAKULTAS ILMU KOMPUTER &nbsp;&bull;&nbsp; NPM 24430121
        </div>
    </div>
</div>

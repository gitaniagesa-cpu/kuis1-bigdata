<?php require_once __DIR__ . '/logo_karomah.php'; ?>
<!-- idcard_component.php - Komponen ID Card Mahasiswa Resmi Pondok Muhammadiyah Akrom (KAROMAH) -->
<div class="idcard-wrapper">
    <div class="idcard">
        <!-- Lubang Gantungan ID Card (Lanyard Slot) -->
        <div class="idcard-slot"></div>

        <!-- Header ID Card -->
        <div class="idcard-header">
            <div class="idcard-org">
                <div class="idcard-crest" style="background:none; border:none; box-shadow:none; width:auto; height:auto;">
                    <?php echo renderLogoKaromah(68); ?>
                </div>
                <div class="idcard-org-text">
                    <h2>PONDOK MUHAMMADIYAH AKROM</h2>
                    <h4>KAROMAH &bull; FAKULTAS ILMU KOMPUTER KOTA METRO</h4>
                    <p>Keluarga Besar Pondok Muhammadiyah Akrom (KAROMAH) &ndash; Building the Future</p>
                </div>
            </div>

            <div class="idcard-verified">
                <div class="idcard-verified-icon">&#128274;</div>
                <div class="idcard-verified-text">
                    KAROMAH<br>VERIFIED ID
                </div>
            </div>
        </div>

        <!-- Body ID Card -->
        <div class="idcard-body">
            <!-- Kiri: Foto & Barcode NPM -->
            <div class="idcard-left">
                <div class="idcard-photo-wrap">
                    <div class="idcard-photo">
                        <img src="img/foto_profil.jpg" alt="Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
                    </div>
                </div>

                <div class="idcard-npm-box">
                    <div class="idcard-npm-label">STUDENT ID / NPM</div>
                    <div class="idcard-npm-number">24430121</div>
                    <div class="idcard-barcode">
                        <!-- Realistic Barcode SVG -->
                        <svg width="185" height="36" viewBox="0 0 185 36" xmlns="http://www.w3.org/2000/svg">
                            <rect x="2" y="2" width="3" height="32" fill="#0f172a"/>
                            <rect x="8" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="12" y="2" width="4" height="32" fill="#0f172a"/>
                            <rect x="19" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="24" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="29" y="2" width="5" height="32" fill="#0f172a"/>
                            <rect x="37" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="42" y="2" width="3" height="32" fill="#0f172a"/>
                            <rect x="48" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="53" y="2" width="4" height="32" fill="#0f172a"/>
                            <rect x="60" y="2" width="2.5" height="32" fill="#0f172a"/>
                            <rect x="65" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="70" y="2" width="4.5" height="32" fill="#0f172a"/>
                            <rect x="78" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="83" y="2" width="3.5" height="32" fill="#0f172a"/>
                            <rect x="90" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="95" y="2" width="4" height="32" fill="#0f172a"/>
                            <rect x="102" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="107" y="2" width="5" height="32" fill="#0f172a"/>
                            <rect x="115" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="120" y="2" width="3" height="32" fill="#0f172a"/>
                            <rect x="126" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="131" y="2" width="4" height="32" fill="#0f172a"/>
                            <rect x="138" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="143" y="2" width="3.5" height="32" fill="#0f172a"/>
                            <rect x="150" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="155" y="2" width="4.5" height="32" fill="#0f172a"/>
                            <rect x="163" y="2" width="1.5" height="32" fill="#0f172a"/>
                            <rect x="168" y="2" width="3" height="32" fill="#0f172a"/>
                            <rect x="174" y="2" width="2" height="32" fill="#0f172a"/>
                            <rect x="179" y="2" width="4" height="32" fill="#0f172a"/>
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Kanan: Informasi Mahasiswa, Signature, Issue Date, QR -->
            <div class="idcard-right">
                <!-- Watermark Logo Karomah Halus di Latar Kanan -->
                <div style="position:absolute; right:18px; top:18px; opacity:0.08; pointer-events:none;">
                    <?php echo renderLogoKaromah(150); ?>
                </div>

                <div>
                    <div class="idcard-name">FATKHUL UMAM</div>
                    <div class="idcard-role">MAHASISWA &ndash; PONDOK MUHAMMADIYAH AKROM (KAROMAH)</div>

                    <div class="idcard-details">
                        <div class="idcard-detail-item">
                            <div class="idcard-detail-icon">&#128100;</div>
                            <div class="idcard-detail-text">
                                <strong>INSTITUTION &amp; FAKULTAS</strong>
                                <span>Fakultas Ilmu Komputer &bull; Pondok Muhammadiyah Akrom (Karomah) Kota Metro</span>
                            </div>
                        </div>

                        <div class="idcard-detail-item">
                            <div class="idcard-detail-icon">&#128737;</div>
                            <div class="idcard-detail-text">
                                <strong>AUTHORITY &amp; PROJECT</strong>
                                <span>Lead Developer Aplikasi Pendataan Mahasiswa (Database MySQL Tabel <code>mahasiswa4</code>)</span>
                            </div>
                        </div>

                        <div class="idcard-detail-item">
                            <div class="idcard-detail-icon">&#128202;</div>
                            <div class="idcard-detail-text">
                                <strong>ACADEMIC SUPERVISOR / DOSEN PENGAMPU</strong>
                                <span>Arif Hidayat, S.T., M.Kom &ndash; Praktikum Big Data (Kuis 1)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris Bawah: Tanda Tangan, Tanggal, QR Code -->
                <div class="idcard-bottom-row">
                    <div class="idcard-sign-box">
                        <svg class="idcard-sign-svg" width="150" height="38" viewBox="0 0 150 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 28C25 10 35 6 38 18C40 26 28 32 34 22C42 12 52 14 55 24C58 29 66 15 74 14C80 13 78 27 86 24C95 21 104 10 115 16C122 20 118 28 135 20" stroke="#064e3b" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                        <div class="idcard-sign-line">AUTHORIZED SIGNATURE</div>
                    </div>

                    <div class="idcard-date-box">
                        <small>ISSUE DATE</small>
                        <strong>01 NOV 2026</strong>
                    </div>

                    <div class="idcard-qr-box">
                        <div class="idcard-qr-frame">
                            <svg width="68" height="68" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="2" y="2" width="18" height="18" stroke="#064e3b" stroke-width="3"/>
                                <rect x="7" y="7" width="8" height="8" fill="#064e3b"/>
                                <rect x="48" y="2" width="18" height="18" stroke="#064e3b" stroke-width="3"/>
                                <rect x="53" y="7" width="8" height="8" fill="#064e3b"/>
                                <rect x="2" y="48" width="18" height="18" stroke="#064e3b" stroke-width="3"/>
                                <rect x="7" y="53" width="8" height="8" fill="#064e3b"/>
                                <rect x="26" y="4" width="5" height="5" fill="#064e3b"/>
                                <rect x="35" y="4" width="6" height="5" fill="#064e3b"/>
                                <rect x="26" y="13" width="6" height="6" fill="#064e3b"/>
                                <rect x="36" y="14" width="5" height="10" fill="#064e3b"/>
                                <rect x="4" y="26" width="6" height="6" fill="#064e3b"/>
                                <rect x="14" y="26" width="8" height="5" fill="#064e3b"/>
                                <rect x="26" y="26" width="16" height="16" stroke="#064e3b" stroke-width="2.5"/>
                                <rect x="31" y="31" width="6" height="6" fill="#eab308"/>
                                <rect x="48" y="26" width="6" height="6" fill="#064e3b"/>
                                <rect x="58" y="26" width="6" height="10" fill="#064e3b"/>
                                <rect x="4" y="36" width="10" height="6" fill="#064e3b"/>
                                <rect x="26" y="48" width="6" height="6" fill="#064e3b"/>
                                <rect x="36" y="48" width="8" height="6" fill="#064e3b"/>
                                <rect x="48" y="44" width="6" height="12" fill="#064e3b"/>
                                <rect x="58" y="48" width="6" height="6" fill="#064e3b"/>
                                <rect x="26" y="58" width="12" height="6" fill="#064e3b"/>
                                <rect x="44" y="58" width="10" height="6" fill="#064e3b"/>
                                <rect x="58" y="58" width="6" height="6" fill="#064e3b"/>
                            </svg>
                        </div>
                        <span class="idcard-qr-label">SCAN TO VERIFY</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Strip ID Card -->
        <div class="idcard-footer">
            KAROMAH &nbsp;&bull;&nbsp; INTEGRITY &nbsp;&bull;&nbsp; EXCELLENCE &nbsp;&bull;&nbsp; TRUST
        </div>
    </div>
</div>

<?php require_once __DIR__ . '/logo_karomah.php'; ?>
<!-- idcard_component.php - Holographic Glassmorphism ID Card di Atas Background Gedung Mewah -->
<div class="luxury-stage">
    <!-- Ornamen Cahaya & Siluet Arsitektur Gedung Mewah -->
    <div class="luxury-building-bg"></div>
    <div class="luxury-light-orb orb-1"></div>
    <div class="luxury-light-orb orb-2"></div>

    <!-- KARTU KACA TRANSPARAN HOLOGRAFIK (SEPERTI GAMBAR REFERENSI) -->
    <div class="glass-card-container">
        <div class="holo-glass-card">
            <!-- Kilau Cahaya Kaca Diagonal -->
            <div class="glass-sheen"></div>

            <!-- 1. Ikon / Logo Bersinar di Atas -->
            <div class="holo-top-logo">
                <?php echo renderLogoKaromah(62); ?>
            </div>

            <!-- 2. Header Teks di Atas Foto -->
            <div class="holo-id-label">STUDENT ID &bull; NPM 24430121</div>
            <h2 class="holo-main-title">Fatkhul Umam</h2>
            <div class="holo-sub-role">Fakultas Ilmu Komputer &bull; Pondok Santap Enak</div>

            <!-- 3. Bingkai Foto Tengah Bersinar (Utuh Tanpa Crop & Proporsional) -->
            <div class="holo-avatar-ring">
                <img src="img/foto_profil.jpg" alt="Fatkhul Umam" onerror="this.onerror=null; this.src='img/foto.png';">
            </div>

            <!-- 4. Nama & Verified Checkmark + Deskripsi -->
            <div class="holo-verified-name">
                <span>Fatkhul Umam</span>
                <span class="holo-check-badge" title="Terverifikasi">&#10004;</span>
            </div>

            <p class="holo-bio-text">
                Pondok Santap Enak Kota Metro<br>
                Praktikum Big Data &bull; Dosen: Arif Hidayat, S.T., M.Kom<br>
                <span class="holo-link-text">localhost/bigdata/me.php</span>
            </p>

            <!-- 5. Tiga Tombol Pill Transparan (Seperti Join | Channel | Message Me) -->
            <div class="holo-pills-row">
                <button type="button" class="holo-pill-btn" onclick="if(window.switchPage) switchPage('datamhs'); else window.location.href='viewmhsaja.php';">
                    Data Mhs
                </button>
                <button type="button" class="holo-pill-btn" onclick="if(window.switchPage) switchPage('wanita'); else window.location.href='viewfilterwanita.php';">
                    Filter Wanita
                </button>
                <button type="button" class="holo-pill-btn" onclick="if(window.switchPage) switchPage('home'); else window.location.href='index.php';">
                    NPM 24430121
                </button>
            </div>

            <!-- 6. Bar Bawah Bersinar (QR Code | Ikon Tengah | Ikon ID Card) -->
            <div class="holo-bottom-bar">
                <!-- QR Code Putih Bersih -->
                <div class="holo-qr">
                    <svg width="48" height="48" viewBox="0 0 68 68" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="2" y="2" width="18" height="18" stroke="#ffffff" stroke-width="3.5"/>
                        <rect x="7" y="7" width="8" height="8" fill="#ffffff"/>
                        <rect x="48" y="2" width="18" height="18" stroke="#ffffff" stroke-width="3.5"/>
                        <rect x="53" y="7" width="8" height="8" fill="#ffffff"/>
                        <rect x="2" y="48" width="18" height="18" stroke="#ffffff" stroke-width="3.5"/>
                        <rect x="7" y="53" width="8" height="8" fill="#ffffff"/>
                        <rect x="26" y="4" width="6" height="6" fill="#ffffff"/>
                        <rect x="36" y="14" width="6" height="10" fill="#ffffff"/>
                        <rect x="26" y="26" width="16" height="16" stroke="#ffffff" stroke-width="3"/>
                        <rect x="31" y="31" width="6" height="6" fill="#fef08a"/>
                        <rect x="48" y="26" width="6" height="6" fill="#ffffff"/>
                        <rect x="58" y="26" width="6" height="10" fill="#ffffff"/>
                        <rect x="4" y="36" width="10" height="6" fill="#ffffff"/>
                        <rect x="26" y="48" width="8" height="6" fill="#ffffff"/>
                        <rect x="48" y="44" width="6" height="12" fill="#ffffff"/>
                        <rect x="26" y="58" width="14" height="6" fill="#ffffff"/>
                        <rect x="56" y="56" width="8" height="8" fill="#ffffff"/>
                    </svg>
                </div>

                <!-- Ikon Pesawat Kertas / Telegram Style Glowing di Tengah -->
                <div class="holo-center-icon">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M21.5 2.5L2.5 10.5L9.5 13.5L18.5 6.5L11.5 15.5L14.5 21.5L21.5 2.5Z" fill="#ffffff" stroke="#fef08a" stroke-width="1.2" stroke-linejoin="round"/>
                    </svg>
                </div>

                <!-- Ikon ID Card di Kanan -->
                <div class="holo-id-icon">
                    <svg width="42" height="42" viewBox="0 0 28 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="1.5" y="2.5" width="25" height="19" rx="3.5" stroke="#ffffff" stroke-width="2"/>
                        <circle cx="9" cy="10" r="2.8" fill="#ffffff"/>
                        <path d="M4.5 17.5C4.5 15 6.5 14 9 14C11.5 14 13.5 15 13.5 17.5" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                        <line x1="16.5" y1="9" x2="22.5" y2="9" stroke="#fef08a" stroke-width="2" stroke-linecap="round"/>
                        <line x1="16.5" y1="13" x2="22.5" y2="13" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                        <line x1="16.5" y1="17" x2="20.5" y2="17" stroke="#ffffff" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Pantulan Cahaya Neon di Lantai Bawah Kartu -->
        <div class="holo-floor-reflection"></div>
    </div>
</div>

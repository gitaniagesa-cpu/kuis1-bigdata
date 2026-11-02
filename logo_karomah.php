<?php
// logo_karomah.php - Logo Makanan Mewah (Fine Dining Gourmet) Pondok Santap Enak
function renderLogoKaromah($size = 48) {
    return '
    <svg width="' . $size . '" height="' . $size . '" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;">
        <defs>
            <linearGradient id="luxGold" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#FFF7B2"/>
                <stop offset="35%" stop-color="#FACC15"/>
                <stop offset="70%" stop-color="#D4AF37"/>
                <stop offset="100%" stop-color="#854D0E"/>
            </linearGradient>
            <linearGradient id="luxDark" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#064E3B"/>
                <stop offset="50%" stop-color="#022C22"/>
                <stop offset="100%" stop-color="#090D16"/>
            </linearGradient>
            <linearGradient id="dishGarnish" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#F59E0B"/>
                <stop offset="50%" stop-color="#B45309"/>
                <stop offset="100%" stop-color="#78350F"/>
            </linearGradient>
        </defs>

        <!-- Bingkai Perisai Lingkaran Emas Berlapis Fine Dining -->
        <circle cx="60" cy="60" r="56" fill="url(#luxDark)" stroke="url(#luxGold)" stroke-width="4.2"/>
        <circle cx="60" cy="60" r="50" fill="none" stroke="#FEF08A" stroke-width="1" stroke-dasharray="4 2"/>

        <!-- 5 Bintang Kuliner Bintang Lima (Michelin / Fine Dining Stars) -->
        <polygon points="60,11 61.8,15 66,15.3 62.8,18 63.8,22 60,19.8 56.2,22 57.2,18 54,15.3 58.2,15" fill="#FEF08A"/>
        <polygon points="44,15 45.3,18 48.5,18.2 46,20.2 46.8,23.2 44,21.5 41.2,23.2 42,20.2 39.5,18.2 42.7,18" fill="url(#luxGold)"/>
        <polygon points="76,15 77.3,18 80.5,18.2 78,20.2 78.8,23.2 76,21.5 73.2,23.2 74,20.2 71.5,18.2 74.7,18" fill="url(#luxGold)"/>
        <circle cx="32" cy="23" r="2" fill="#FACC15"/>
        <circle cx="88" cy="23" r="2" fill="#FACC15"/>

        <!-- Sendok & Garpu Emas Menyilang di Sisi Kiri & Kanan -->
        <!-- Garpu Kiri -->
        <g stroke="url(#luxGold)" stroke-width="2.2" stroke-linecap="round">
            <line x1="23" y1="34" x2="23" y2="43"/>
            <line x1="27" y1="33" x2="27" y2="43"/>
            <line x1="31" y1="34" x2="31" y2="43"/>
            <path d="M23 43 C23 47, 31 47, 31 43" fill="none"/>
            <line x1="27" y1="46" x2="27" y2="74"/>
        </g>
        <!-- Sendok Kanan -->
        <g fill="url(#luxGold)" stroke="url(#luxGold)">
            <ellipse cx="93" cy="39" rx="4.5" ry="6.5" stroke-width="1.5"/>
            <line x1="93" y1="45.5" x2="93" y2="74" stroke-width="2.4" stroke-linecap="round"/>
        </g>

        <!-- Uap Aroma Hidangan Mewah -->
        <path d="M49 38 C47 33, 52 30, 50 25" stroke="#FEF08A" stroke-width="2" stroke-linecap="round" opacity="0.9"/>
        <path d="M60 36 C58 30, 63 27, 60 22" stroke="#FFFFFF" stroke-width="2.3" stroke-linecap="round"/>
        <path d="M71 38 C69 33, 74 30, 72 25" stroke="#FEF08A" stroke-width="2" stroke-linecap="round" opacity="0.9"/>

        <!-- Hidangan Utama Fine Dining (Gourmet Steak / Roast Crown & Garnish di Atas Piring Emas) -->
        <!-- Tudung Cloche Terbuka Sebagian / Mahkota Kuliner -->
        <path d="M36 62 C36 45, 47 39, 60 39 C73 39, 84 45, 84 62 Z" fill="url(#dishGarnish)" stroke="url(#luxGold)" stroke-width="2"/>
        <!-- Saus Glaze & Tekstur Panggang Mewah -->
        <path d="M43 55 C48 46, 56 45, 62 49 C68 45, 74 48, 77 55" stroke="#FEF08A" stroke-width="2" stroke-linecap="round" fill="none"/>
        <!-- Daun Garnish Mint/Rosemary di Puncak Hidangan -->
        <ellipse cx="56" cy="41" rx="5" ry="2.5" transform="rotate(-25 56 41)" fill="#10B981" stroke="#FEF08A" stroke-width="0.8"/>
        <ellipse cx="64" cy="41" rx="5" ry="2.5" transform="rotate(25 64 41)" fill="#10B981" stroke="#FEF08A" stroke-width="0.8"/>
        <circle cx="60" cy="42" r="2.2" fill="#EF4444"/>

        <!-- Piring Porselen Putih & Rim Emas Fine Dining -->
        <ellipse cx="60" cy="64" rx="29" ry="5.5" fill="#FFFFFF" stroke="url(#luxGold)" stroke-width="2.2"/>
        <ellipse cx="60" cy="64" rx="22" ry="3" fill="none" stroke="#D4AF37" stroke-width="1"/>

        <!-- Pita Bawah Mewah Bertuliskan SANTAP ENAK -->
        <rect x="16" y="79" width="88" height="17" rx="8.5" fill="url(#luxGold)" stroke="#022C22" stroke-width="1.8"/>
        <text x="60" y="90.5" text-anchor="middle" fill="#022C22" font-family="Plus Jakarta Sans, Arial, sans-serif" font-weight="900" font-size="8.8" letter-spacing="1.1">SANTAP ENAK</text>
    </svg>';
}
?>

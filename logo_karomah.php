<?php
// logo_karomah.php - Emblem Resmi Pondok Santap Enak Kota Metro
function renderLogoKaromah($size = 48) {
    return '
    <svg width="' . $size . '" height="' . $size . '" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg" style="display:block;">
        <defs>
            <linearGradient id="goldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#FEF08A"/>
                <stop offset="50%" stop-color="#D4AF37"/>
                <stop offset="100%" stop-color="#996515"/>
            </linearGradient>
            <linearGradient id="greenGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                <stop offset="0%" stop-color="#065F46"/>
                <stop offset="55%" stop-color="#15803D"/>
                <stop offset="100%" stop-color="#042F2E"/>
            </linearGradient>
        </defs>

        <!-- Bingkai Lingkaran Emas Luar -->
        <circle cx="60" cy="60" r="56" fill="url(#greenGrad)" stroke="url(#goldGrad)" stroke-width="4"/>
        <circle cx="60" cy="60" r="49" fill="none" stroke="#FEF08A" stroke-width="1.2" stroke-dasharray="3 2"/>

        <!-- Bintang Mahkota Kuliner / Keunggulan di Atas -->
        <circle cx="60" cy="21" r="3.5" fill="#FEF08A"/>
        <circle cx="46" cy="24" r="2.5" fill="url(#goldGrad)"/>
        <circle cx="74" cy="24" r="2.5" fill="url(#goldGrad)"/>

        <!-- Untaian Daun Emas (Kiri & Kanan) -->
        <path d="M28 80 C18 63, 20 40, 35 28" stroke="url(#goldGrad)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <path d="M92 80 C102 63, 100 40, 85 28" stroke="url(#goldGrad)" stroke-width="2.5" fill="none" stroke-linecap="round"/>

        <!-- Kubah / Tudung Saji Mewah Emas (Simbol Pondok Santap Enak) -->
        <path d="M35 60 C35 40, 46 31, 60 31 C74 31, 85 40, 85 60 Z" fill="url(#goldGrad)"/>
        <circle cx="60" cy="28" r="4" fill="#FEF08A"/>
        <!-- Garis Piring Saji -->
        <rect x="30" y="61" width="60" height="5" rx="2.5" fill="#FFFFFF" stroke="url(#goldGrad)" stroke-width="1.5"/>

        <!-- Uap Aroma Hangat di Atas -->
        <path d="M52 44 C50 39, 54 36, 52 33" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M60 42 C58 37, 62 34, 60 31" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>
        <path d="M68 44 C66 39, 70 36, 68 33" stroke="#FFFFFF" stroke-width="1.8" stroke-linecap="round"/>

        <!-- Pita Bawah Bertuliskan SANTAP ENAK -->
        <rect x="18" y="81" width="84" height="16" rx="8" fill="url(#goldGrad)" stroke="#042F2E" stroke-width="1.5"/>
        <text x="60" y="92" text-anchor="middle" fill="#042F2E" font-family="Plus Jakarta Sans, Arial, sans-serif" font-weight="900" font-size="8.5" letter-spacing="0.9">SANTAP ENAK</text>
    </svg>';
}
?>

<?php
// logo_karomah.php - Emblem Resmi Pondok Muhammadiyah Akrom (KAROMAH) Kota Metro
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

        <!-- Bingkai Perisai Segi Delapan / Lingkaran Emas Luar -->
        <circle cx="60" cy="60" r="56" fill="url(#greenGrad)" stroke="url(#goldGrad)" stroke-width="4"/>
        <circle cx="60" cy="60" r="49" fill="none" stroke="#FEF08A" stroke-width="1.2" stroke-dasharray="3 2"/>

        <!-- 12 Sinar Matahari Muhammadiyah / Karomah -->
        <g stroke="url(#goldGrad)" stroke-width="2.6" stroke-linecap="round">
            <line x1="60" y1="14" x2="60" y2="24"/>
            <line x1="60" y1="96" x2="60" y2="106"/>
            <line x1="14" y1="60" x2="24" y2="60"/>
            <line x1="96" y1="60" x2="106" y2="60"/>
            <line x1="27.5" y1="27.5" x2="34.5" y2="34.5"/>
            <line x1="85.5" y1="85.5" x2="92.5" y2="92.5"/>
            <line x1="92.5" y1="27.5" x2="85.5" y2="34.5"/>
            <line x1="34.5" y1="85.5" x2="27.5" y2="92.5"/>
            <line x1="42" y1="17.5" x2="46" y2="26.5"/>
            <line x1="78" y1="17.5" x2="74" y2="26.5"/>
            <line x1="17.5" y1="42" x2="26.5" y2="46"/>
            <line x1="102.5" y1="42" x2="93.5" y2="46"/>
        </g>

        <!-- Untaian Daun Emas Karomah (Kiri & Kanan) -->
        <path d="M30 82 C20 65, 22 42, 36 30" stroke="url(#goldGrad)" stroke-width="2.5" fill="none" stroke-linecap="round"/>
        <path d="M90 82 C100 65, 98 42, 84 30" stroke="url(#goldGrad)" stroke-width="2.5" fill="none" stroke-linecap="round"/>

        <!-- Kubah Masjid Pondok Akrom -->
        <path d="M40 58 C40 42, 60 32, 60 28 C60 32, 80 42, 80 58 Z" fill="url(#goldGrad)"/>
        <!-- Bulan Sabit Puncak Kubah -->
        <circle cx="60" cy="24" r="3" fill="#FEF08A"/>

        <!-- Kitab Terbuka (Al-Quran & Ilmu Pengetahuan) -->
        <path d="M36 62 L58 66 L58 80 L36 75 Z" fill="#FFFFFF" stroke="url(#goldGrad)" stroke-width="1.5"/>
        <path d="M84 62 L62 66 L62 80 L84 75 Z" fill="#FFFFFF" stroke="url(#goldGrad)" stroke-width="1.5"/>

        <!-- Pita Bawah Bertuliskan KAROMAH -->
        <rect x="26" y="83" width="68" height="15" rx="7.5" fill="url(#goldGrad)" stroke="#042F2E" stroke-width="1.5"/>
        <text x="60" y="93.5" text-anchor="middle" fill="#042F2E" font-family="Plus Jakarta Sans, Arial, sans-serif" font-weight="900" font-size="9.5" letter-spacing="1.2">KAROMAH</text>
    </svg>';
}
?>

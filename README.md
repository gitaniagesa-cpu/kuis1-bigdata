# KUIS 1 - Praktikum Big Data
### Aplikasi Pendataan Mahasiswa Pondok Muhammadiyah XYZ Kota Metro

Proyek ini dibuat untuk memenuhi tugas **KUIS 1 Praktikum Big Data** oleh:
- **Nama** : Fatkhul Umam
- **NPM** : 24430121
- **Fakultas** : Fakultas Ilmu Komputer
- **Dosen Pengampu** : Arif Hidayat, S.T., M.Kom

---

## 🌐 Akses Langsung (1 Link Demo Online)
Aplikasi ini dapat langsung dibuka dan dicoba secara interaktif melalui GitHub Pages:  
👉 **[https://gitaniagesa-cpu.github.io/kuis1-bigdata/](https://gitaniagesa-cpu.github.io/kuis1-bigdata/)**

---

## 📋 Fitur & Halaman Kuis 1

| Halaman | File PHP | File Demo HTML | Deskripsi |
| :--- | :--- | :--- | :--- |
| **Home** | `index.php` | `index.html` | Antarmuka utama sesuai rancangan Soal No. 8 |
| **Data Mahasiswa & Usia** | `viewmhsaja.php` | `viewmhsaja.html` | Soal No. 3 & 4 (Menampilkan ID, NPM, Nama, dan Usia) |
| **Filter Data Mahasiswi Wanita** | `viewfilterwanita.php` | `viewfilterwanita.html` | Soal No. 5 & 6 (Filter jenis kelamin Wanita) |
| **Profil Pembuat Program** | `me.php` | `me.html` | Soal No. 7 (Biodata Fatkhul Umam & Foto Almamater) |
| **Daftar Data Mahasiswa (All)** | `viewmhsall.php` | `viewmhsall.html` | Tautan menu DATA MHS pada rancangan No. 8 |

---

## 🗄️ Struktur Database (`mahasiswa4`)

### 1. DDL (Data Definition Language)
```sql
CREATE DATABASE IF NOT EXISTS bigdata;
USE bigdata;

CREATE TABLE mahasiswa4 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    npm VARCHAR(20) NOT NULL,
    nama_mhs VARCHAR(100) NOT NULL,
    tgl_lahir DATE NOT NULL,
    jenis_kelamin ENUM('Pria', 'Wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
```

### 2. DML (Data Manipulation Language)
```sql
INSERT INTO mahasiswa4 (id, npm, nama_mhs, tgl_lahir, jenis_kelamin) VALUES
(1, '25510001', 'Agus Salim', '2004-05-01', 'Pria'),
(2, '25510002', 'Wendiyanto', '2004-04-11', 'Pria'),
(3, '25510003', 'Mujiyanti', '2004-03-05', 'Wanita'),
(4, '25510004', 'Fatimah', '2004-07-11', 'Wanita'),
(5, '25510005', 'Andri Hakim', '2004-04-29', 'Pria');
```

---

## 🎨 Tema Antarmuka
- **Warna Dasar**: Gradasi Emas (*Gold Gradient*)
- **Garis Tepi (*Border*)**: Hijau (*Emerald Green*)
- **Warna Teks**: Putih Bersih dengan bayangan teks lembut
- **Penyelarasan Data**: Seluruh hasil data di tengah (*centered*), teks kategori berukuran kecil & proporsional, serta catatan rata kanan di bawah tabel.

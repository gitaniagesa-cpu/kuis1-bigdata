-- ========================================================
-- KUIS 1 BIG DATA - PRAKTIKUM
-- Nama       : Fatkhul Umam
-- NPM        : 24430121
-- Fakultas   : Ilmu Komputer
-- Dosen      : Arif Hidayat, S.T., M.Kom
-- ========================================================

CREATE DATABASE IF NOT EXISTS bigdata;
USE bigdata;

-- 1) Analisa & Pembuatan Tabel mahasiswa4
-- Kolom:
-- - id: INT AUTO_INCREMENT PRIMARY KEY
-- - npm: VARCHAR(20) NOT NULL
-- - nama_mhs: VARCHAR(100) NOT NULL
-- - tgl_lahir: DATE NOT NULL
-- - jenis_kelamin: ENUM('Pria', 'Wanita') NOT NULL

DROP TABLE IF EXISTS mahasiswa4;
CREATE TABLE mahasiswa4 (
    id INT AUTO_INCREMENT PRIMARY KEY,
    npm VARCHAR(20) NOT NULL,
    nama_mhs VARCHAR(100) NOT NULL,
    tgl_lahir DATE NOT NULL,
    jenis_kelamin ENUM('Pria', 'Wanita') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- 2) Pengisian Record Data mahasiswa4
INSERT INTO mahasiswa4 (id, npm, nama_mhs, tgl_lahir, jenis_kelamin) VALUES
(1, '25510001', 'Agus Salim', '2004-05-01', 'Pria'),
(2, '25510002', 'Wendiyanto', '2004-04-11', 'Pria'),
(3, '25510003', 'Mujiyanti', '2004-03-05', 'Wanita'),
(4, '25510004', 'Fatimah', '2004-07-11', 'Wanita'),
(5, '25510005', 'Andri Hakim', '2004-04-29', 'Pria');

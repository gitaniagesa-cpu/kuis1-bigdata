<?php
// viewmhsall.php - Menampilkan Daftar Data Mahasiswa (Sesuai Rancangan No. 8)
require_once 'koneksi.php';

$page_title = "Daftar Data Mahasiswa - Pondok Muhammadiyah Akrom Kota Metro";
$active_menu = "all";

$query = "SELECT id, npm, nama_mhs, tgl_lahir, 
          TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS usia 
          FROM mahasiswa4 ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);

include 'layout_header.php';
?>

<section class="section">
    <div class="container">
        <div class="data-section-box">
            <div class="content-header-bar">
                DAFTAR DATA MHS &bull; PONDOK MUHAMMADIYAH AKROM KOTA METRO
            </div>

            <div class="info-box">
                <span>&#128202; <strong>Rancangan No. 8 (viewmhsall.php):</strong> Menampilkan seluruh arsip data mahasiswa Pondok Muhammadiyah Akrom Kota Metro beserta nomor pokok dan usia.</span>
            </div>

            <div class="toolbar-row">
                <span class="category-tag">Kategori: Semua Data Mahasiswa</span>
                <input type="text" class="search-input" placeholder="&#128269; Cari NPM atau Nama..." onkeyup="filterTable(this)">
            </div>

            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th style="width: 60px;">NO</th>
                            <th style="width: 140px;">NPM</th>
                            <th>NAMA MHS</th>
                            <th style="width: 120px;">USIA</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result && mysqli_num_rows($result) > 0) {
                            $no = 1;
                            while ($row = mysqli_fetch_assoc($result)) {
                                $usia = $row['usia'];
                                if ($usia === null && !empty($row['tgl_lahir'])) {
                                    $diff = date_diff(date_create($row['tgl_lahir']), date_create('today'));
                                    $usia = $diff->y;
                                }
                                ?>
                                <tr>
                                    <td><strong><?php echo $no++; ?></strong></td>
                                    <td><span class="npm-pill"><?php echo htmlspecialchars($row['npm']); ?></span></td>
                                    <td><strong><?php echo htmlspecialchars($row['nama_mhs']); ?></strong></td>
                                    <td><span class="usia-pill"><?php echo htmlspecialchars($usia); ?> Tahun</span></td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo '<tr><td colspan="4">Data mahasiswa tidak ditemukan.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="text-right-small">
                * localhost/bigdata/viewmhsall.php &bull; Total <?php echo mysqli_num_rows($result); ?> Record Mahasiswa
            </div>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>

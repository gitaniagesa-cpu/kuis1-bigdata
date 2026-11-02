<?php
// viewmhsaja.php - Menampilkan id, npm, nama_mhs, usia (Soal Kuis No. 3 & 4)
require_once 'koneksi.php';

$page_title = "Data Mahasiswa & Usia - Pondok Muhammadiyah Akrom Kota Metro";
$active_menu = "datamhs";

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
                <span>&#128203; <strong>Soal Kuis No. 3 &amp; 4 (viewmhsaja.php):</strong> Menampilkan kolom <strong>ID, NPM, NAMA MHS,</strong> dan <strong>USIA</strong> yang dihitung otomatis dari tanggal lahir pada tabel <code>mahasiswa4</code>.</span>
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
                        <?php
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                $usia = $row['usia'];
                                if ($usia === null && !empty($row['tgl_lahir'])) {
                                    $diff = date_diff(date_create($row['tgl_lahir']), date_create('today'));
                                    $usia = $diff->y;
                                }
                                ?>
                                <tr>
                                    <td><strong><?php echo htmlspecialchars($row['id']); ?></strong></td>
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
                * localhost/bigdata/viewmhsaja.php &bull; Total <?php echo mysqli_num_rows($result); ?> Record Mahasiswa
            </div>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>

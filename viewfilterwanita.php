<?php
// viewfilterwanita.php - Menampilkan id, nama_mhs, jenis_kelamin (wanita) (Soal Kuis No. 5 & 6)
require_once 'koneksi.php';

$page_title = "Filter Data Mahasiswa Wanita - Pondok Santap Enak Kota Metro";
$active_menu = "wanita";

$query = "SELECT id, nama_mhs, jenis_kelamin 
          FROM mahasiswa4 
          WHERE jenis_kelamin = 'Wanita' 
          ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);

include 'layout_header.php';
?>

<section class="section">
    <div class="container">
        <div class="data-section-box">
            <div class="content-header-bar">
                DAFTAR DATA MAHASISWA "WANITA" &bull; PONDOK SANTAP ENAK KOTA METRO
            </div>

            <div class="info-box">
                <span>&#128105; <strong>Soal Kuis No. 5 &amp; 6 (viewfilterwanita.php):</strong> Menampilkan hasil pemfilteran SQL <code>WHERE jenis_kelamin = 'Wanita'</code> pada kolom <strong>ID, NAMA MHS,</strong> dan <strong>JENIS KELAMIN</strong>.</span>
            </div>

            <div class="toolbar-row">
                <span class="category-tag">Kategori: Filter Mahasiswi Wanita</span>
                <input type="text" class="search-input" placeholder="&#128269; Cari Nama Mahasiswi..." onkeyup="filterTable(this)">
            </div>

            <div class="table-wrapper">
                <table class="data-table">
                    <thead>
                        <tr>
                            <th style="width: 65px;">ID</th>
                            <th>NAMA MHS</th>
                            <th style="width: 170px;">JENIS KELAMIN</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td><strong><?php echo htmlspecialchars($row['id']); ?></strong></td>
                                    <td><strong><?php echo htmlspecialchars($row['nama_mhs']); ?></strong></td>
                                    <td>
                                        <span class="badge badge-wanita"><?php echo htmlspecialchars($row['jenis_kelamin']); ?></span>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            echo '<tr><td colspan="3">Data mahasiswa wanita tidak ditemukan.</td></tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <div class="text-right-small">
                * localhost/bigdata/viewfilterwanita.php &bull; Terfilter <?php echo mysqli_num_rows($result); ?> Record Wanita
            </div>
        </div>
    </div>
</section>

<?php include 'layout_footer.php'; ?>

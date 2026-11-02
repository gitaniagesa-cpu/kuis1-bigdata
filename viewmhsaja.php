<?php
// viewmhsaja.php - Menampilkan id, npm, nama_mhs, usia (Soal Kuis No. 3)
require_once 'koneksi.php';

$page_title = "Data Mahasiswa - Big Data";
$active_menu = "datamhs";

// Query mengambil data mahasiswa dan menghitung usia berdasarkan tgl_lahir
$query = "SELECT id, npm, nama_mhs, tgl_lahir, 
          TIMESTAMPDIFF(YEAR, tgl_lahir, CURDATE()) AS usia 
          FROM mahasiswa4 ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);

include 'layout_header.php';
?>

<div class="content-header">
    DAFTAR DATA MHS
</div>

<!-- Kotak Teks Info - Gradasi Emas, Teks Putih, Garis Tepi Hijau -->
<div class="info-box">
    <span>📋 <strong>Kuis 1 No. 3:</strong> Menampilkan ID, NPM, NAMA MHS, dan kalkulasi USIA otomatis dari tanggal lahir.</span>
</div>

<div class="table-wrapper">
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 50px;">ID</th>
                <th style="width: 120px;">NPM</th>
                <th>NAMA MHS</th>
                <th style="width: 90px;">USIA</th>
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
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['npm']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama_mhs']); ?></td>
                        <td><?php echo htmlspecialchars($usia); ?> Tahun</td>
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

<!-- Teks Kecil Rata Kanan di Bawah Garis Tabel -->
<div class="text-right-small">
    * localhost/bigdata/viewmhsaja.php &bull; <?php echo mysqli_num_rows($result); ?> Record
</div>

<?php include 'layout_footer.php'; ?>

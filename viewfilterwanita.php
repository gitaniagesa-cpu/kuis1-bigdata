<?php
// viewfilterwanita.php - Menampilkan id, nama_mhs, jenis_kelamin (wanita) (Soal Kuis No. 5)
require_once 'koneksi.php';

$page_title = "Filter Data Mahasiswa Wanita - Big Data";
$active_menu = "wanita";

// Query mengambil data mahasiswa berjenis kelamin Wanita
$query = "SELECT id, nama_mhs, jenis_kelamin 
          FROM mahasiswa4 
          WHERE jenis_kelamin = 'Wanita' 
          ORDER BY id ASC";
$result = mysqli_query($koneksi, $query);

include 'layout_header.php';
?>

<div class="content-header">
    DAFTAR DATA MAHASISWA "WANITA"
</div>

<!-- Kotak Teks Info - Gradasi Emas, Teks Putih, Garis Tepi Hijau -->
<div class="info-box">
    <span>👩 <strong>Kuis 1 No. 5:</strong> Menampilkan hasil filter data khusus mahasiswi berjenis kelamin <strong>Wanita</strong>.</span>
</div>

<div class="table-wrapper">
    <table class="data-table">
        <thead>
            <tr>
                <th style="width: 60px;">ID</th>
                <th>NAMA MHS</th>
                <th style="width: 160px;">JENIS KELAMIN</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['nama_mhs']); ?></td>
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

<!-- Teks Kecil Rata Kanan di Bawah Garis Tabel -->
<div class="text-right-small">
    * localhost/bigdata/viewfilterwanita.php &bull; Terfilter <?php echo mysqli_num_rows($result); ?> Record Wanita
</div>

<?php include 'layout_footer.php'; ?>

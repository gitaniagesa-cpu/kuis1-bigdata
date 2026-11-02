<!-- 6. BOTTOM BANNER SECTION -->
<div class="container">
    <div class="bottom-banner">
        <div class="banner-left">
            <div class="banner-icon">&#128187;</div>
            <div>
                <h3>Pondok Santap Enak Kota Metro</h3>
                <p>Aplikasi Pendataan Mahasiswa &bull; Dikembangkan untuk memenuhi tugas Kuis 1 Praktikum Big Data oleh Fatkhul Umam (NPM: 24430121), Fakultas Ilmu Komputer.</p>
            </div>
        </div>

        <div class="banner-form-card">
            <div class="form-grid">
                <div class="form-group">
                    <label>Nama Pembuat Program *</label>
                    <input type="text" class="form-control" value="Fatkhul Umam" readonly>
                </div>
                <div class="form-group">
                    <label>NPM Mahasiswa *</label>
                    <input type="text" class="form-control" value="24430121" readonly>
                </div>
                <div class="form-group">
                    <label>Fakultas *</label>
                    <input type="text" class="form-control" value="Fakultas Ilmu Komputer" readonly>
                </div>
                <div class="form-group">
                    <label>Dosen Pengampu *</label>
                    <input type="text" class="form-control" value="Arif Hidayat, S.T., M.Kom" readonly>
                </div>
            </div>
            <a href="viewmhsaja.php" class="btn-pill-primary btn-full">
                &#128203; Lihat Data Mahasiswa &amp; Usia (viewmhsaja.php) &rarr;
            </a>
        </div>
    </div>
</div>

<script>
function filterTable(inputEl) {
    var filter = inputEl.value.toLowerCase();
    var rows = document.querySelectorAll('.data-table tbody tr');
    rows.forEach(function(row) {
        var text = row.textContent.toLowerCase();
        row.style.display = text.indexOf(filter) > -1 ? '' : 'none';
    });
}
</script>
</body>
</html>

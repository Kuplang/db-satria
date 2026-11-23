<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Siswa</title>
</head>
<body>
    <h2>Tambah Data Siswa</h2>
    <form action="simpan.php" method="POST">
        <label>NIS:</label><br>
        <input type="text" name="nis" required><br>
        <label>Nama Lengkap:</label><br>
        <input type="text" name="nama" required><br>
        <label>Jurusan:</label><br>
        <input type="text" name="jurusan" required><br><br>
        <button type="submit">Simpan Data</button>
    </form>
</body>
</html>

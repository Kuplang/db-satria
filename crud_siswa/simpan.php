+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++uire 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];

    $sql = "INSERT INTO siswa (nis, nama, jurusan) VALUES ('$nis', '$nama', '$jurusan')";
    
    if (mysqli_query($koneksi, $sql)) {
        echo "<script>alert('Data berhasil disimpan!'); window.location.href='tampil.php';</script>";
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($koneksi);
    }
}
?>

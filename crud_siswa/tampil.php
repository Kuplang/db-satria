<?php require 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Daftar Siswa</title>
</head>
<body>
    <h2>Daftar Siswa Terdaftar</h2>
    <a href="index.php">Tambah Siswa Baru</a><br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        
        <tr>
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Jurusan</th>
        </tr>
        <?php
        $sql = "SELECT * FROM siswa ORDER BY id ASC";
        $result = mysqli_query($koneksi, $sql);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$no}</td>
                    <td>{$row['nis']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jurusan']}</td>
                  </tr>";
            $no++;
        }
        ?>
    </table>
</body>
</html>

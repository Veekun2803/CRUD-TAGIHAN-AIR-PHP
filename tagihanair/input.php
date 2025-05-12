<head>
    <title>Tagihan Air</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<form action="proses.php" method="post">
    No. Pelanggan: <input type="text" name="no_pelanggan" required><br>
    Nama: <input type="text" name="nama" required><br>
    Alamat: <textarea name="alamat" required></textarea><br>
    Bulan: <input type="text" name="bulan" required><br>
    Meter Awal: <input type="number" name="meter_awal" required><br>
    Meter Akhir: <input type="number" name="meter_akhir" required><br>
    <input type="submit" value="Simpan">
    <a href="tampil.php"><button type="button">Kembali</button></a>
</form>
<br><br>


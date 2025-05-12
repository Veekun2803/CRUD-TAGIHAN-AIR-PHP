<head>
    <title>Tagihan Air</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php
include "config.php";
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM pelanggan WHERE no_pelanggan='$id'")->fetch_assoc();
?>

<form action="update.php" method="post">
    <input type="hidden" name="no_pelanggan" value="<?= $data['no_pelanggan'] ?>">
    Nama: <input type="text" name="nama" value="<?= $data['nama'] ?>"><br>
    Alamat: <textarea name="alamat"><?= $data['alamat'] ?></textarea><br>
    Bulan: <input type="text" name="bulan" value="<?= $data['bulan'] ?>"><br>
    Meter Awal: <input type="number" name="meter_awal" value="<?= $data['meter_awal'] ?>"><br>
    Meter Akhir: <input type="number" name="meter_akhir" value="<?= $data['meter_akhir'] ?>"><br>
    <input type="submit" value="Update">
    <a href="tampil.php"><button type="button">Kembali</button></a>
</form>

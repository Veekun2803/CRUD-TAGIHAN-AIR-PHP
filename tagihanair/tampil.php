<head>
     <script>
        function printPage() {
            window.print();
        }
    </script>
    <title>Tagihan Air</title>
    <link rel="stylesheet" type="text/css" href="style.css">
     <button onclick="printPage()">Print Halaman Ini</button>

</head>

<?php
include "config.php";
echo "<h2>Data Pelanggan</h2>";
echo "<a href='input.php'>Tambah Data</a><br><br>";

$result = $conn->query("SELECT * FROM pelanggan");

echo "<table border='1' cellpadding='5'>
<tr>
<th>No</th><th>Nama</th><th>Bulan</th><th>Pemakaian</th><th>Tagihan</th><th>Aksi</th>
</tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr>
        <td>".$row['no_pelanggan']."</td>
        <td>".$row['nama']."</td>
        <td>".$row['bulan']."</td>
        <td>".$row['pemakaian']." m³</td>
        <td>Rp ".number_format($row['total_tagihan'], 0, ',', '.')."</td>
        <td>
            <a href='edit.php?id=".$row['no_pelanggan']."'>Edit</a> | 
            <a href='delete.php?id=".$row['no_pelanggan']."' onclick=\"return confirm('Yakin?')\">Hapus</a>
        </td>
    </tr>";
}
echo "</table>";

?>

<?php
include "config.php";

$no = $_POST['no_pelanggan'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$bulan = $_POST['bulan'];
$awal = $_POST['meter_awal'];
$akhir = $_POST['meter_akhir'];
$pemakaian = $akhir - $awal;

function hitungTagihan($pemakaian) {
    if ($pemakaian <= 10) return $pemakaian * 2500;
    elseif ($pemakaian <= 20) return 10*2500 + ($pemakaian - 10)*5000;
    elseif ($pemakaian <= 30) return 10*2500 + 10*5000 + ($pemakaian - 20)*7000;
    else return 10*2500 + 10*5000 + 10*7000 + ($pemakaian - 30)*10000;
}

$tagihan = hitungTagihan($pemakaian);

$sql = "UPDATE pelanggan SET 
    nama='$nama', alamat='$alamat', bulan='$bulan',
    meter_awal=$awal, meter_akhir=$akhir, pemakaian=$pemakaian, total_tagihan=$tagihan
    WHERE no_pelanggan='$no'";

$conn->query($sql);

header("Location: tampil.php");
?>

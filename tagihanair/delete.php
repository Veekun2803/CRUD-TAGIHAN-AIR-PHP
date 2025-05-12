<?php
include "config.php";
$id = $_GET['id'];
$conn->query("DELETE FROM pelanggan WHERE no_pelanggan='$id'");
header("Location: tampil.php");
?>

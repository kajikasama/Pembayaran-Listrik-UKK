<?php
session_start();
if(isset($_SESSION['Admin']) || isset($_SESSION['Petugas']) || isset($_SESSION['Pelanggan']))
{
include '../koneksi.php';
$KodeTagihan = $_POST['KodeTagihan'];
$TglBayar = $_POST['TglBayar'];
$JumlahTagihan = $_POST['JumlahTagihan'];
$BuktiPembayaran = $_POST['BuktiPembayaran'];
$Status = "Belum";

$simpan = query("insert into tbpembayaran values('','$KodeTagihan','$TglBayar','$JumlahTagihan','$BuktiPembayaran','$Status')");

if($simpan)
{
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='index.php';
    </script>";
}
else
{
    echo "<script>
    alert('Data GAGAL Disimpan');
    location.href='index.php';
    </script>";

}
}
else
{
    echo"<script>
    alert('Anda Tidak Boleh Masuk');
    location.href='../home.php';
    </script>";
}
?>
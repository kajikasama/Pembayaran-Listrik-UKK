<?php
session_start();
if(isset($_SESSION['Admin']) || isset($_SESSION['Petugas']))
{
include '../koneksi.php';
$Daya = $_POST['Daya'];
$TarifPerKwh = $_POST['TarifPerKwh'];
$Beban = $_POST['Beban'];
$simpan = query("insert into tbtarif values('','$Daya','$TarifPerKwh','$Beban')");
if($simpan)
{
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='tampil-tarif.php';
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
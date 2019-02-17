<?php
session_start();
if(isset($_SESSION['Admin']) || isset($_SESSION['Petugas']))
{
include '../koneksi.php';
$No = "10";
$NoPelanggan = sprintf($No . rand(100,999));
$NoMeter = $_POST['NoMeter'];
$KodeTarif = $_POST['KodeTarif'];
$NamaLengkap = $_POST['NamaLengkap'];
$Telp = $_POST['Telp'];
$Alamat = $_POST['Alamat'];
$simpan = query("insert into tbpelanggan values('','$NoPelanggan','$NoMeter','$KodeTarif','$NamaLengkap','$Telp','$Alamat')");
if($simpan)
{
    $Username = $NoPelanggan;
    $Password = $NoPelanggan;
    $Level = "Pelanggan";
    query("insert into tblogin values('','$Username','$Password','$NamaLengkap','$Level')");
    echo "<script>
    alert('Data Berhasil Disimpan');
    location.href='tampil-pelanggan.php';
    </script>";
}
else
{
    echo "<script>
    alert('Data GAGAL Disimpan');
    location.href='tampil-pelanggan.php';
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
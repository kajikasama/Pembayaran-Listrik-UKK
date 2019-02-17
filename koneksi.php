<?php

mysql_connect('localhost','root','');
mysql_select_db('listrik');

function query($sql){
    $query = mysql_query($sql);
    return $query;
}
function jadiArray($query){
    $hasil = mysql_fetch_array($query);
    return $hasil;
}
function hitungBaris($query){
    $cek = mysql_num_rows($query);
    return $cek;
}

        function hitungBarisTarif(){
    $sql = "select * from tbtarif";
    $query = mysql_query($sql);
    $hitung = mysql_num_rows($query);
    return $hitung;
    }
        function hitungBaristagihan(){
    $sql = "select * from tbtagihan";
    $query = mysql_query($sql);
    $hitung = mysql_num_rows($query);
    return $hitung;
    }
        function hitungBarispelanggan(){
    $sql = "select * from tbpelanggan";
    $query = mysql_query($sql);
    $hitung = mysql_num_rows($query);
    return $hitung;
    }
        function hitungBarispetugas(){
    $sql = "select * from tblogin where Level<>'Pelanggan'";
    $query = mysql_query($sql);
    $hitung = mysql_num_rows($query);
    return $hitung;
    }
        function hitungBarispembayaran(){
    $sql = "select * from tbpembayaran";
    $query = mysql_query($sql);
    $hitung = mysql_num_rows($query);
    return $hitung;
    }


?>
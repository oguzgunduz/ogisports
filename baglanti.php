<?php
$vt_sunucu="localhost";
$vt_kullanici="root"; 
$vt_sifre="oguz12345";
$vt_adi="ogisports";
$baglan=mysqli_connect($vt_sunucu, $vt_kullanici, $vt_sifre, $vt_adi);
if(!$baglan)
{
    die("Bağlantı Başarısız.".mysqli_connect_error());

}
?>
<?
include("baglanti.php");



$sql=" insert into musteri values('','".$_POST['ad']."','".$_POST['soyad']."',".
" '".$_POST['firma']."','".$_POST['eposta']."' , '".$_POST['telefon']."')";


mysql_query($sql);

header('location:otomasyon.php?s=musteri');


?>
<?
include("baglanti.php");

$sql=" update kategori set kat_adi='".$_POST['kategori']."' where kat_id='".$_GET['gun_id']."' ";


mysql_query($sql);

header('location:otomasyon.php?s=kategori');

?>
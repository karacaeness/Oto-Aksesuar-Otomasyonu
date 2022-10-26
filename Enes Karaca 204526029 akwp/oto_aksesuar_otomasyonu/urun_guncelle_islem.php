<?
include("baglanti.php");

$sql=" update urun set u_kat_id='".$_POST['kat']."', u_adi='".$_POST['ad']."', ".
" u_fiyati='".$_POST['fiyat']."' where u_id='".$_GET['gun_id']."' ";


mysql_query($sql);

header('location:otomasyon.php?s=urun');

?>
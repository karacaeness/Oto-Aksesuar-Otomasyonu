<?
include("baglanti.php");

$sql=" update musteri set m_adi='".$_POST['ad']."', m_soyadi='".$_POST['soyad']."' "." m_firma='".$_POST['firma']."' , m_mail='".$_POST['eposta']."', m_telefon='".$_POST['telefon']."' ".
" where m_id='".$_GET['gun_id']."' ";

mysql_query($sql);

header('location:otomasyon.php?s=musteri');

?>
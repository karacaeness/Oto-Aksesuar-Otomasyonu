<?
include("baglanti.php");

//echo $_GET['m_id']." - ".$_GET['urn_id']." - ".$_POST['adet'];

$sql=" insert into satis values('','".$_GET['m_id']."','".$_GET['urn_id']."','".$_POST['adet']."','".date("y-m-d")."') ";

mysql_query($sql);

header('location:otomasyon.php?s=satislar');
?>
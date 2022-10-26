<?
session_start();

include("guvenlik.php");

include("baglanti.php");

if(isset($_GET['s']))//s=musteri
{
	$sayfa=$_GET['s'];
}
else
{
	$sayfa="ana";
}



?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Otomasyon php</title>
<link href="css/otomasyon.css" type="text/css" rel="stylesheet"/>	
</head>

<body>
	
	
	<div class="otomasyon_ana_divim">
		<div class="banner"><img src="otomasyon_php_images/banner_logom.png" width="1200px" height="200px"></div>
		<div class="hizalama_bitir"></div>
		<div class="menulerimm_govde">
			<a href="otomasyon.php"><div class="menulerimiz_sol">
				<img src="otomasyon_php_images/ana_sayfa_resim (2).png" width="50px" height="50px"/>
				<br><br>Ana Sayfa</div></a>
			<a href="otomasyon.php?s=kullanici"><div class="menulerimiz_sag">
				<img src="otomasyon_php_images/kullanici_islmeleri.png" width="50px" height="50px"/><br><br>Kullanıcı<br>İşlemleri</div></a>
			<div class="hizalama_bitir"></div>
			<a href="otomasyon.php?s=musteri"><div class="menulerimiz_sol">
				<img src="otomasyon_php_images/musteri.png" width="50px" height="50px"/>
				<br><br>Müşteri<br>İşlemleri</div></a>
			<a href="otomasyon.php?s=kategori"><div class="menulerimiz_sag">
				<img src="otomasyon_php_images/kategori (3).png" width="50px" height="50px"/>
				<br><br>Kategori<br>İşlemleri</div></a>
			<div class="hizalama_bitir"></div>
			<a href="otomasyon.php?s=urun"><div class="menulerimiz_sol">
				<img src="otomasyon_php_images/urun.png" width="50px" height="50px"/>
				<br><br>Ürün<br>İşlemleri</div></a>
			<a href="otomasyon.php?s=satislar"><div class="menulerimiz_sag">
				<img src="otomasyon_php_images/satis (2).png"width="50px" height="50px"/>
				<br><br>Satış<br>İşlemleri</div></a>
			<a href="cikis.php"><div class="cikiss">
				<img src="otomasyon_php_images/cikis (2).png" width="50px" height="50px"/></div></a>
		</div>
		
		

		
		<div class="body">
		<? 
			include($sayfa.".php");
		?>
		</div>
	
	</div>
	
	
	
</body>
</html>
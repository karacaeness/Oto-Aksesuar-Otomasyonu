
<?

echo $_GET['hata']."-".$_GET['a']."-".$_GET['k'];
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/admin_giris.css" type="text/css" rel="stylesheet"/>
<title>Untitled Document</title>
</head>

<body>
	<div class="body_resim_gecisli">
<form id="form1" name="form1" method="post" action="giris_kontrol.php">
  <div>
	
		<div class="giris_ana_divim">
			
<div class="admin_giris_ekrani_logom"><img src="otomasyon_php_images/giris_logo.png" width="80px" height="80px"></div>
	<div class="hizalama_bitir"></div>				
				<div class="giris_yapin">OTO AKSESUARA HOŞGELDİNİZ</div>
			
	<div class="hizalama_bitir"></div>	
			<div>
				<?
            if(isset($_GET['hata']))
			{
				if($_GET['hata']==1)
				{
					echo 'Girilen Bilgiler Yanlış';
				}
				else
				{
					echo  'Eksik Bilgi Girildi';
				}
			}
			?>
			</div>
	<div class="hizalama_bitir"></div>
			
		<div class="kullanici_girisi"><input type="text" name="kadi" class="e_mail"  
		 placeholder="Kullanıcı Adı"/></div>
			
	<div class="hizalama_bitir"></div>		
			
		<div class="sifre_girisi"><input type="password" name="ksifre" class="sifre"  
		 placeholder="Şifre"/></div>	
			
	<div class="hizalama_bitir"></div>		
		
		<div class="giris_dugme">
			<input type="submit" name="button" id="button" value="GİRİŞ" />
		</div>
			
		</div>
	
	
	</div>
</form>
</div>
</body>
</html>
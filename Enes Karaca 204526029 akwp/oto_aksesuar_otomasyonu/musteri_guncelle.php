<?

$sql=" SELECT * FROM  musteri WHERE m_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
	
?>


<div>
	
	
<form name="form1" method="post" action="musteri_kayit.php">
	
	
<link href="css/musteri.css" type="text/css" rel="stylesheet"/>
	
<div class="kullanici_ana_div">
  <div class="musteri_bilgi_ic_kutu_div">
	<div class="musteri_bilgisi">Muşteri Bilgileri</div>
<div class="hizalama_bitir"></div>	
	<div class="musteri_adi">Muşteri Adı:</div>
	<div><input class="musteri_adi_input" type="text" name="ad" id="textfield0" value="<? echo $kayit['m_adi'];?>"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="musteri_soyadi">Muşteri Soyadı:</div>
	<div><input class="musteri_soyadim_input" type="text" name="soyad" id="textfield1" value="<? echo $kayit['m_soyadi'];?>">
	</div>
<div class="hizalama_bitir"></div>	
	<div class="firma_adi">Firma Adı:</div>
	<div><input class="firma_adi_input" type="text" name="firma" id="textfield2" value="<? echo $kayit['m_firma'];?>"></div>
<div class="hizalama_bitir"></div>	
	<div class="e_posta">E Posta:</div>
	<div><input class="e_posta_adi_input" type="text" name="eposta" id="textfield3" value="<? echo $kayit['m_mail'];?>"></div>
<div class="hizalama_bitir"></div>	
	<div class="telefon">Telefon:</div>
	<div><input class="telefon_adi_input" type="text" name="telefon" id="textfield4" value="<? echo $kayit['m_tel'];?>"></div>
<div class="hizalama_bitir"></div>	
	<div class="kaydet"><input class="kaydetmek_input" type="submit" name="button" id="button" value="KAYDET" ></div>
<div class="hizalama_bitir"></div>
  </div>
</div>
	
	
</form>
	
<div class="hizalama_bitir"></div>

</div>

      <? 
	  	} 
	  ?>







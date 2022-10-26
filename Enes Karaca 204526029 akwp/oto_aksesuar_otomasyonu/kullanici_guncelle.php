<?

$sql=" SELECT * FROM  kullanici WHERE k_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
	
?>

<div>
	
<form name="form1" method="post" action="kullanici_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
<div class="kullanici_bilgisi_ana_div">
	
	<div class="kullanici_bilgisi">Kullanıcı Bilgileri</div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_adimiz">Kullanıcı Adı:</div>
	<div><label for="textfield"></label>
        <input class="kullanici_adi_input" type="text" name="kadi" id="textfield" value="<? echo $kayit['k_adi'];?>"></div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_sifre">Kullanıcı Şifre:</div>
	<div><input class="kullanici_sifrem_input" type="text" name="ksifre" id="textfield2" value="<? echo $kayit['k_sifre'];?>"></div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_durumum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="aktif_pasif_olayi_input" name="kdurum" id="select">
          	<option value="1" <? if($kayit['k_durum']==1){ echo "selected";}?>>Aktif</option>
            <option value="0" <? if($kayit['k_durum']==0){ echo "selected";}?>>Pasif</option>
        </select>
	</div>
<div class="hizalama_bitir"></div>
	<div class="kaydetmek"><input class="kaydetmek_input"type="submit" name="button" id="button" value="GÜNCELLE"></div>
</div>
<div class="hizalama_bitir"></div>
</form>
</div>
<? }?>




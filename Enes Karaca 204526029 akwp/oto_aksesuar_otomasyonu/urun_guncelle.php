<?

$sql=" SELECT * FROM  urun WHERE u_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
	
?>

<form name="form1" method="post" action="urun_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
	
<link href="css/urun.css" type="text/css" rel="stylesheet"/>
	
<div class="u_bilgileri_govde">
		
	<div class="urun_bilgilerim">Ürün Bilgileri</div>
		
<div class="hizalama_bitir"></div>
		
	<div class="urun_kategori">Kategori</div>
	<div>
		<select class="urun_kategori_input" name="kat" id="select">
            	<?
					$sql="select * from kategori order by kat_adi asc";
					$sql_cls=mysql_query($sql);
					while($veri=mysql_fetch_assoc($sql_cls))
					{
                ?>
                	<option value="<? echo $veri['kat_id'];?>" <? if($kayit['u_kat_id']==$veri['kat_id']){ echo 'selected';}?>><? echo $veri['kat_adi'];?></option> 
                <?
					}
                ?>
            </select>
	</div>	

<div class="hizalama_bitir"></div>
	
	<div class="urun_adi">Ürün Adı</div>
	<div>
		<label for="textfield"></label>
        <input class="urun_adi_input" type="text" name="ad" id="textfield" value="<? echo $kayit['u_adi'];?>">
	</div>	
	
<div class="hizalama_bitir"></div>
		
	<div class="urun_fiyat">Ürün Fiyatı</div>	
	<div><input class="urun_fiyat_input" type="text" name="fiyat" id="textfield2" value="<? echo $kayit['u_fiyati'];?>"></div>	

<div class="hizalama_bitir"></div>
	
	<div class="urun_kaydet"><input class="kaydet" type="submit" name="button" id="button" value="GÜNCELLE"></div>
	
</div>	
</form>	
<? }?>
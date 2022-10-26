<div class="body_kategorim">
<div class="body_urun_ana">
   <div class="urun_bilgisi_ana">
<form name="form1" method="post" action="urun_ekle_islem.php">
	
<link href="css/urun.css" type="text/css" rel="stylesheet"/>
	
<div class="urun_genel_div">
		
	<div class="urun_bilgilerim">Ürün Bilgileri</div>
		
<div class="hizalama_bitir"></div>
		
	<div class="urun_kategori">Kategori:</div>
	<div>  
		<select class="urun_kategori_input" name="kat" id="select">
            	<?
					$sql="select * from kategori order by kat_adi asc";
					$sql_cls=mysql_query($sql);
					while($veri=mysql_fetch_assoc($sql_cls))
					{
                ?>
                	<option value="<? echo $veri['kat_id'];?>"><? echo $veri['kat_adi'];?></option>
                <?
					}
                ?>
            </select>
	</div>	

<div class="hizalama_bitir"></div>
	
	<div class="urun_adi">Ürün Adı:</div>
	<div>
		<label for="textfield"></label>
        <input class="urun_adi_input" type="text" name="ad" id="textfield">
	</div>	
	
<div class="hizalama_bitir"></div>
		
	<div class="urun_fiyat">Ürün Fiyatı:</div>	
	<div><input class="urun_fiyat_input" type="text" name="fiyat" id="textfield2"></div>	

<div class="hizalama_bitir"></div>
	
	<div class="urun_kaydet"><input class="kaydet" type="submit" name="button" id="button" value="KAYDET"></div>
<div class="hizalama_bitir"></div>	
</div>	
</form>	
	
<div class="hizalama_bitir"></div>
	
<div class="alt_govdem">
	<div class="urunlerimiz">
        <div class="urun_kod">Ürün Kodu</div>
        <div class="kategori_adi">Kategori Adı</div>
        <div class="urun_adim">Ürün Adı</div>
        <div class="urun_fiyatim">Ürün Fiyatı</div>
        <div class="urun_kodu_islemim">İşlemler</div>
	</div>
</div>
	
		
<div class="hizalama_bitir"></div>	
		
<tr>
    <td>
		
		<table width="700"  border="1" cellspacing="1" cellpadding="1">
      
      <style>
	  	.satir1{background-color:#d2d2d2;}
		.satir2{background-color:#777474;}
	  </style>
      <? 
	  $i=0;
	  	$sql= " SELECT * FROM urun ".
			  " left join kategori on urun.u_kat_id=kategori.kat_id ".
			  " order by u_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayitlar=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$cls="satir1";}
			else
			{$cls="satir2";}
	  ?>
      <tr class="<? echo $cls;?>">
        
        <td style="width: 40px; height: 35px; text-align: center;"><? echo $kayitlar['u_id'];?></td>
        <td style="width: 70px; text-align: center;"><? echo $kayitlar['kat_adi'];?></td>
        <td style="width: 80px; text-align: center;"><? echo $kayitlar['u_adi'];?></td>
        <td style="width: 50px; text-align: center;"><? echo $kayitlar['u_fiyati']." TL";?></td>
        <td style="width: 40px; text-align: center;">
			<a href="urun_sil.php?sil_id=<? echo $kayitlar['u_id'];?>">Sil</a>&nbsp; 
			<a href="otomasyon.php?s=urun_guncelle&g_id=<? echo $kayitlar['u_id'];?>">Güncelle</a></td> 
      </tr>
      <? }?>
    </table>
  </td>
</tr>
		
	 
   </div>
</div>
</div>
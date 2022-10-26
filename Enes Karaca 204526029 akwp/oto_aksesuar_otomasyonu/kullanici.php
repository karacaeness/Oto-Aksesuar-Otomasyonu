
<div>
	
	
<form name="form1" method="post" action="kullanici_kayit.php">
	
	
<link href="css/kullanici.css" type="text/css" rel="stylesheet"/>
	
<div class="kullanici_bilgisi_ana_div">	
  <div class="kullanici_ana_div">
	<div class="kullanici_bilgisi">Kullanıcı Bilgileri</div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_adimiz">Kullanıcı Adı:</div>
	<div><input class="kullanici_adi_input" type="text" name="kadi" id="textfield"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_sifre">Kullanıcı Şifre:</div>
	<div><input class="kullanici_sifrem_input" type="text" name="ksifre" id="textfield2"></div>
<div class="hizalama_bitir"></div>	
	<div class="kullanici_durumum">Kullanıcı Durum:</div>
	<div><label for="select"></label>
		<select class="aktif_pasif_olayi_input" name="kdurum" id="select">
          	<option value="1">Aktif</option>
            <option value="0">Pasif</option>
        </select>
	</div>
<div class="hizalama_bitir"></div>
	<div class="kaydetmek"><input class="kaydetmek_input" type="submit" name="button" id="button" value="KAYDET"></div>

<div class="hizalama_bitir"></div>
  </div>
</div>
	
	
</form>
	<div class="kullanici_govde">
		<div class="kullanici_baslik">
			<div class="k_no">Kullanıcı No</div>
			<div class="k_adi">Kullanıcı Adı</div>
			<div class="k_durum">Kullanıcı Durum</div>
			<div class="k_islem">İşlemler</div>
		</div>
	</div>
<div class="hizalama_bitir"></div>


<tr>
  <td>
     <table width="700" align="center" border="1" cellspacing="0" cellpadding="5">
<?
	  $i=0;
	  	$sql=" select * from kullanici order by k_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#b2b2b2";}
			else
			{$renk="#d2d2d2";}

 
			
      ?>
      <tr bgcolor="<? echo $renk;?>">
        <td style="width: 70px; text-align: center;" ><? echo $i;?></td>
        <td style="width: 70px; text-align: center;"><? echo $kayit['k_adi']?></td>
        <td style="width: 70px; text-align: center;"><? if($kayit['k_durum']==1){?><span style="color:#740909">Aktif</span><? }else{?><span style="color:#140C57">Pasif</span><? }?></td>
        <td style="width: 70px; text-align: center;"><a href="kullanici_sil.php?sil_id=<? echo $kayit['k_id'];?>">Sil</a>&nbsp; <a href="otomasyon.php?s=kullanici_guncelle&g_id=<? echo $kayit['k_id'];?>">Güncelle</a></td>
      </tr>
      <? 
	  	} 
	  ?>
   </table>	
  </td>
</tr>
<div class="hizalama_bitir"></div>


</div>







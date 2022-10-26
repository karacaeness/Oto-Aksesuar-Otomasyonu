
<div>
	
	
<form name="form1" method="post" action="musteri_kayit.php">
	
	
<link href="css/musteri.css" type="text/css" rel="stylesheet"/>

<div class="musteri_bilgisi_ana_div">
  <div class="kullanici_ana_div">
	<div class="musteri_bilgisi">Muşteri Bilgileri</div>
<div class="hizalama_bitir"></div>	
	<div class="musteri_adi">Muşteri Adı:</div>
	<div><input class="musteri_adi_input" type="text" name="ad" id="textfield"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="musteri_soyadi">Muşteri Soyadı:</div>
	<div><input class="musteri_soyadim_input" type="text" name="soyad" id="textfield1"></div>
<div class="hizalama_bitir"></div>	
	<div class="firma_adi">Firma Adı:</div>
	<div><input class="firma_adi_input" type="text" name="firma" id="textfield2"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="e_posta">E Posta:</div>
	<div><input class="e_posta_adi_input" type="text" name="eposta" id="textfield3"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="telefon">Telefon:</div>
	<div><input class="telefon_adi_input" type="text" name="telefon" id="textfield4"></td></div>
<div class="hizalama_bitir"></div>	
	<div class="kaydet"><input class="kaydetmek_input" type="submit" name="button" id="button" value="KAYDET"></div>
<div class="hizalama_bitir"></div>
  </div>
</div>
	
	
</form>
<div class="hizalama_bitir"></div>


<tr>
  <td>
     <table width="700" align="center" border="1" cellspacing="0" cellpadding="7">
	 <tr>
	  <tr style="color: #FFFFFF;">
      	<td width="78" align="center">Müşteri No</td> 
        <td width="80" align="center">Müşteri Ad</td>
        <td width="108" align="center">Müşteri Soyad</td>
        <td width="77" align="center">Firma Adı</td>
        <td width="63" align="center">E-Posta</td>
		<td width="93" align="center">Telefon</td>
        <td width="93" align="center">İşlemler</td>
	  </tr>
    </tr> 
		 
<?
	  $i=0;
	  	$sql=" select * from musteri order by m_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayit=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#d2d2d2";}
			else
			{$renk="#777474";}

 
			
      ?>
      <tr bgcolor="<? echo $renk;?>">
          <td style="width: 70px; text-align: center;" ><? echo $i;?></td>
          <td style="width: 70px; text-align: center;"><? echo $kayit['m_adi']?></td>
		  <td style="width: 70px; text-align: center;"><? echo $kayit['m_soyadi']?></td>
		  <td style="width: 70px; text-align: center;"><? echo $kayit['m_firma']?></td>
		  <td style="width: 70px; text-align: center;"><? echo $kayit['m_mail']?></td>
		  <td style="width: 70px; text-align: center;"><? echo $kayit['m_tel']?></td>	  
        <td style="width: 70px; text-align: center;"><a href="musteri_sil.php?sil_id=<? echo $kayit['m_id'];?>">Sil</a>&nbsp; <a href="otomasyon.php?s=musteri_guncelle&g_id=<? echo $kayit['m_id'];?>">Güncelle</a></td>
      </tr>
      <? 
	  	} 
	  ?>
   </table>	
  </td>
</tr>
</div>







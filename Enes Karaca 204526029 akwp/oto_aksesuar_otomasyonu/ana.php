<link href="css/kategori.css" type="text/css" rel="stylesheet"/>



<div class="oto_aksesuara_hosgeldiniz">OTO AKSESUARA HOŞGELDİNİZ</div>
<div class="hizalama_bitir"></div>
	  
	  <div class="kategori_govde">
		<div class="kullanici_baslik">
			<div class="kategori_no_k">Kategori No</div>
			<div class="kategori_k">Kategori Adı</div>
			<div class="kategori_islem_k">İşlemler</div>
		</div>
	</div>
	<div class="hizalama_bitir"></div>
	  
	  
	  
	  <tr>
  <td>
     <table width="700" align="center" border="1" cellspacing="0" cellpadding="5">
<?
	  $i=0;
	  	$sql=" select * from kategori order by kat_adi asc ";
		$sql_cls=mysql_query($sql);
		while($kayitlar=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#ccc";}
			else
			{$renk="#fff";}
	
      ?>
        <tr bgcolor="<? echo $renk;?>">
        <td style="width: 70px; text-align: center;"><? echo $kayitlar['kat_id']?></td>
		<td style="width: 70px; text-align: center;"><? echo $kayitlar['kat_adi']?></td>
        <td style="width: 70px; text-align: center;"><a href="kategori_sil.php?sil_id=<? echo $kayitlar['kat_id'];?>">Sil</a>&nbsp; <a href="otomasyon.php?s=kategori_guncelle&g_id=<? echo $kayitlar['kat_id'];?>">Güncelle</a></td>
      </tr>
      <? 
	  	} 
	  ?>
   </table>	
  </td>
</tr>
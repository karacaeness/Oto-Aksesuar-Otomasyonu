
  <div class="body_kategorim">
    <div class="kategori_bilgisi_ana">
		<form id="form1" name="form1" method="post" action="kategori_kayit_islem.php">
		<link href="css/kategori.css" type="text/css" rel="stylesheet"/>
      
        <div class="kategori_divi">
              <div class="kategori_bilgileri_yazi">Kategori Bilgileri </div>
			  <? if($_GET['msg']==1)
{?><div class="kayit_islemi">Kayıt İşlemi Gerçekleştirildi</div><? }?>
        
			
			
        <div>
          <div class="kategori_adi">Kategori Adı:</div>
          <div><label for="textfield"></label>
            <input class="kategori_adi_input"type="text" name="kategori" id="textfield" /></div>
        </div>
		  
        <div class="hizalama_bitir">     
         <div class="kaydet_yazi"><input class="kaydet_input" type="submit" name="button" id="button" value="KAYDET" /></div>
        </div>
			
	</div>
      
    </form>
		</div>
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
	  	$sql=" select * from kategori order by kat_id desc ";
		$sql_cls=mysql_query($sql);
		while($kayitlar=mysql_fetch_assoc($sql_cls))
		{
			$i++;
			if($i%2==1)
			{$renk="#d2d2d2";}
			else
			{$renk="#777474";}
	
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
	  
	  
  </div>
  
 

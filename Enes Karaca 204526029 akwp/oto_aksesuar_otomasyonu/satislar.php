
<link href="css/satislar.css" type="text/css" rel="stylesheet"/>



  
    <div class="satis_yazi"><a href="otomasyon.php?s=satis_mus">Satış Yapınız</a></div>
  
<table width="700"  border="1" cellspacing="1" cellpadding="1">
    <tr style="color: #FFFFFF;">
		<td width="78" align="center">Satış No</td> 
      	<td width="78" align="center">Müşteri Firma</td> 
        <td width="80" align="center">Müşteri Adı</td>
        <td width="108" align="center">Müşteri Soyad</td>
        <td width="77" align="center">Kategori Adı</td>
        <td width="63" align="center">Ürün Adı</td>
		<td width="93" align="center">Satış Adet</td>
        <td width="93" align="center">Ürün Fiyat</td>
		<td width="93" align="center">Ürün Tutarı</td>
		<td width="93" align="center">Satış Tarih</td>
		<td width="93" align="center">İşlemler</td>
    </tr> 
      <style>
	  	.satir1{background-color:#d2d2d2;}
		.satir2{background-color:#777474;}
	  </style>
      <? 
	  $i=0;
	  $toplam=0;
	  
	  	$sql= " SELECT * FROM satis ".
			  " left join musteri on satis.s_mus_id=musteri.m_id ".
			  " left join urun on satis.s_urun_id=urun.u_id ".
			  " left join kategori on urun.u_kat_id=kategori.kat_id ".
			  " order by s_id desc";
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
        <td style="width: 200px; text-align: center;"><? echo $i;?></td>
        <td style="width: 270px; text-align: center;"><? echo $kayitlar['m_firma'];?></td>
		<td style="width: 270px; text-align: center;"><? echo $kayitlar['m_adi'];?></td>
		<td style="width: 270px; text-align: center;"><? echo $kayitlar['m_soyadi'];?></td>
        <td style="width: 270px; text-align: center;"><? echo $kayitlar['kat_adi'];?></td>
		<td style="width: 270px; text-align: center;"><? echo $kayitlar['u_adi'];?></td>
		<td style="width: 270px; text-align: center;"><? echo $kayitlar['s_adet'];?></td>
		<td style="width: 270px; text-align: center;"><? echo $kayitlar['u_fiyati'];?></td>
        <td style="width: 270px; text-align: center;">
			<? echo $toplam=$kayitlar['u_fiyati']*$kayitlar['s_adet'];?></td>
        <td style="width: 270px; text-align: center;">
		<? echo substr($kayitlar['s_tarih'],2,2),"/";?>
		<? echo substr($kayitlar['s_tarih'],5,2),"/";?>
			<? echo substr($kayitlar['s_tarih'],0,4),"/";?></td>
			<td style="width: 120px; text-align: center;">
				<a href="satis_sil.php?sil_id=<? echo $kayitlar['s_id'];?>">Sil</a></td>  
			
      </tr>
      <? }?>
    </table>
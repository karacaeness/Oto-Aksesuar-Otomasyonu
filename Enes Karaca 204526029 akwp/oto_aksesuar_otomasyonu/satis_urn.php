<table width="700" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr style="text-align:center;">
    <td style="color: #FFFFFF;">Urn.No</td>
    <td style="color: #FFFFFF;">Ürün Kategori</td>
    <td style="color: #FFFFFF;">Ürün Adı</td>
    <td style="color: #FFFFFF;">Ürün Fiyatı</td>
    <td style="color: #FFFFFF;"><a href="otomasyon.php?s=satis_mus">
		<img src="otomasyon_php_images/geri_icon.png" width="30px" height="27px"/></a></td>
  </tr>
  <?
  	$sql=" select * from urun  ".
		" left join kategori on urun.u_kat_id=kategori.kat_id ".
		" order by kat_id desc ";
	$sql_cls=mysql_query($sql)or die(mysql_error());
	while($veri=mysql_fetch_assoc($sql_cls))
	{
  ?>
  <tr>
    <td width="100" align="center"><? echo $veri['u_id'];?></td>
    <td width="100" align="center"><? echo $veri['kat_adi'];?></td>
    <td width="100" align="center"><? echo $veri['u_adi'];?></td>
    <td width="100" align="center"><? echo $veri['u_fiyati'];?></td>
    <td width="100" align="center"><a href="otomasyon.php?s=satis_adet&m_id=<? echo $_GET['m_id'];?>&urn_id=<? echo $veri['u_id'];?>">
		<img src="otomasyon_php_images/ileri_icon.png" width="30px" height="27px"/></a></td>
  </tr>
  <?
	}
  ?>
</table>

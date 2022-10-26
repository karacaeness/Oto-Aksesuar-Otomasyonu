<table width="700" border="1" align="center" cellpadding="1" cellspacing="1">
  <tr style="text-align:center;">
    <td style="color: #FFFFFF;" >M. No</td>
    <td style="color: #FFFFFF;">Firma Adı</td>
    <td style="color: #FFFFFF;">Adı</td>
    <td style="color: #FFFFFF;">Soyadı</td>
	<td style="color: #FFFFFF;">E-Posta</td>
	<td style="color: #FFFFFF;">Telefon</td>
    <td style="color: #FFFFFF;"><a href="otomasyon.php?s=satislar">
		<img src="otomasyon_php_images/geri_icon.png" width="30px" height="27px"/></a></td>
  </tr>
  <?
  $sql="select * from musteri order by m_firma asc";
  $sql_cls=mysql_query($sql)or die(mysql_error());
  while($kayit=mysql_fetch_assoc($sql_cls))
  {
  ?>
  <tr>
    <td width="100" align="center"><? echo $kayit['m_id'];?></td>
    <td width="100" align="center"><? echo $kayit['m_firma'];?></td>
    <td width="100" align="center"><? echo $kayit['m_adi'];?></td>
    <td width="100" align="center"><? echo $kayit['m_soyadi'];?></td>
	<td width="100" align="center"><? echo $kayit['m_mail'];?></td>
	<td width="100" align="center"><? echo $kayit['m_tel'];?></td>
    <td width="100" align="center"><a href="otomasyon.php?s=satis_urn&m_id=<? echo $kayit['m_id']?>">&nbsp;&nbsp;
		<img src="otomasyon_php_images/ileri_icon.png" width="30px" height="27px"/></a></td>
  </tr>
  <?
  }
  ?>
  
</table>

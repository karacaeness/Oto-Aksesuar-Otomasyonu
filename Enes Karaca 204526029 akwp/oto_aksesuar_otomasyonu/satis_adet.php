
<link href="css/satislar.css" type="text/css" rel="stylesheet"/>

<div class="adet_govde">
   <div class="adet_yazim">Adet:</div>	
	
<form name="form1" method="post" action="satis_yap.php?m_id=<? echo $_GET['m_id'];?>&urn_id=<? echo $_GET['urn_id']?>">
  <label for="textfield"></label>
  
  <input class="metin_input" type="text" name="adet" id="textfield">
  <input class="buton_yeri" type="submit" name="button" id="button" value="Satış Yap">
	<a href="otomasyon.php?s=satis_urn"><div class="adet_gerim"><img src="otomasyon_php_images/geri_icon.png" width="30px" height="27px"/></div></a>
</form>

</div>
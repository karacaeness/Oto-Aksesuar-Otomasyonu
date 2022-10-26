<?

$sql=" SELECT * FROM  kategori WHERE kat_id ='".$_GET['g_id']."' ";
$sql_cls=mysql_query($sql);
while($kayit=mysql_fetch_assoc($sql_cls))
{
	
?>

<form id="form1" name="form1" method="post" action="kategori_guncelle_islem.php?gun_id=<? echo $_GET['g_id'];?>">
		<link href="css/kategori.css" type="text/css" rel="stylesheet"/>
      
        <div class="kategori_div">
			<div class="kategori_govde_ic_kutu">
          <div class="kategori_bilgileri_yazi">Kategori Bilgileri 
			  <? if($_GET['msg']==1){?><div style="color:#F00">Kayıt İşlemi Gerçekleştirildi</div><? }?></div>
          
        <div>
          <div class="kategori_adi">Kategori Adı:</div>
          <div><label for="textfield"></label>
            <input class="kategori_adi_input" type="text" name="kategori" id="textfield" value="<? echo $kayit['kat_adi'];?>" /></div>
        </div>
		  <div class="hizalama_bitir"> </div> 
            
         <div class="kaydet_yazi"><input class="kaydet_input" type="submit" name="button" id="button" value="GÜNCELLE" /></div>
			</div>
			</div>
        
      
    </form>

<? }?>
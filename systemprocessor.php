<?php

// disini tempatnya fungsi untuk proses data
$getformsdata=$getformsdata2=$Namafile=$tmpName=$berat=$tipedata="";
if ((!empty($_REQUEST["formname"]))&&($_REQUEST["formname"]!=""))
  {$getformsdata=$_REQUEST["formname"];$getformsdata2=$getformsdata."file";
  if (!empty($_FILES[$getformsdata2]))
  {$Namafile = $_FILES[$getformsdata2]["name"];
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];}
  $getformsdata=str_replace("'", "&#39;", @$_POST[$getformsdata]); //mengantisipasi pelamaran tanda petik satu agar tidak error saat menyimpan ke database atau fungsi lainnya
  };
$buatiddatabasepenyimpanandata="";
if ((empty($judulweb))||(empty($_REQUEST["docommand"])))
{header("location:./");die();} //proteksi file
switch ($_REQUEST["docommand"]) {



   case "loadisianchat":
   if (@$deweedysaghakey1=="")
    {die();}
if (empty($_REQUEST["selectz"]))
{die();}

$querysql="select * from tipicitch4t where (tou5er='".@$_REQUEST["selectz"]."' and fromu5er='".@$deweedysaghakey1."') or (fromu5er='".@$_REQUEST["selectz"]."' and tou5er='".@$deweedysaghakey1."')  ";
$muatdetails2="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ echo "<div onclick='actfornotfocusforchatbox();' onmouseover='actfornotfocusforchatbox();' onmouseout='actforonfocus();' id='chatboxfor".$tampilkanperkolomdata["m4inl0gk3y"]."' class='rootbox' style='".($tampilkanperkolomdata["fromu5er"]===@$_REQUEST["selectz"]?"text-align:right;":"")."'><div style='opacity:0 !important;display:inline !important;'><input type='text' id='focusonchatboxfor".$tampilkanperkolomdata["m4inl0gk3y"]."' style='opacity:0;width:100%;height:1px !important;max-height:1px !important;min-height:1px !important;'/><br/></div>";
if ($tampilkanperkolomdata["r3plyofmsg"]!="")
  {echo "<span style='background:var(--purpletrans90);padding:3px 5px;font-size:64%;cursor:pointer;color:#fff;' onclick=\"thisreplyfor('".$tampilkanperkolomdata["r3plyofmsg"]."');\">double click to view replies for</span><br/>";}
echo "<div id='showtempeof".$tampilkanperkolomdata["m4inl0gk3y"]."'>".@$tampilkanperkolomdata["msgnya"]."</div>";
if (($tampilkanperkolomdata["tou5er"]==@$deweedysaghakey1)&&($tampilkanperkolomdata["onst4tuz"]=="send"))
{ $waktunye=@date("Y-m-d ".@$_REQUEST["tameng"]);
@queryuniverse("update `tipicitch4t` set onst4tuz='read', beberkanpostedat='".$waktunye."' where m4inl0gk3y='".$tampilkanperkolomdata["m4inl0gk3y"]."' ");}
else
{$waktunye=$tampilkanperkolomdata["beberkanpostedat"];}
echo "<div class='littlenotifs'>read (".date("d F Y - H:i:s",@strtotime($waktunye)).") <br/><span style='cursor:pointer;' onclick=\"dorepling('".$tampilkanperkolomdata["m4inl0gk3y"]."');\">double click to reply this</span></div>";
echo "</div>";
}
}
else
{echo "No Message saved";}

die();

   case "cekwhoisonoff":
   if (@$deweedysaghakey1=="")
      {die();}
   if (@$deweedysaghakey1=="")
    {die();}
if (@$_REQUEST["metodz"]=="")
{@queryuniverse("update `deweedysaghal0gg3r` set onst4tuz='offline' where m4inl0gk3y='".@$deweedysaghakey1."' ");}
else
{@queryuniverse("update `deweedysaghal0gg3r` set onst4tuz='online' where m4inl0gk3y='".@$deweedysaghakey1."' ");}
if (@$_REQUEST["metodz"]!="loadforselect")
{echo @intval(@lihatisikolomtertentu("","","","counted","select count(`onst4tuz`) as counted from deweedysaghal0gg3r where onst4tuz='online' and l0gst4tuz='log1n' and m4inl0gk3y!='".@$deweedysaghakey1."' "))."&nbsp;";}
else
{
$querysql="select * from deweedysaghal0gg3r where onst4tuz='online' and l0gst4tuz='log1n' and m4inl0gk3y!='".@$deweedysaghakey1."'  ";
$muatdetails2="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ echo "<option value='".$tampilkanperkolomdata["m4inl0gk3y"]."' ".($tampilkanperkolomdata["m4inl0gk3y"]===@$_REQUEST["selectz"]?"selected":"").">".($tampilkanperkolomdata["m4inl0gk3y"]==="a76abed3772b96cd47deccbc4d937cbc"?"Super Admin":@ucwords(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["m4inl0gk3y"],"nama_lengkap_pioneer")))."</option>";
}

}
else
{echo "<option value=''>No One Is Online</option>";}
?>
<script type="text/javascript">
  jQuery(document).ready(function() {
    loadtochitchatbox();
  })
</script>
<?php
}
die();
  break;

   case "savechatbro":
    if (@$deweedysaghakey1=="")
      {die();}
   if (empty($_REQUEST["formname"]))
    {die("");}
  if (empty($_REQUEST["tameng"]))
{die();}
$waktunye=@date("Y-m-d ".@$_REQUEST["tameng"]);
@queryuniverse("INSERT INTO `tipicitch4t` (`m4inl0gk3y`, `msgnya`, `r3plyofmsg`, `fromu5er`, `tou5er`, `onst4tuz`, `beberkanpostedat`) VALUES
('".md5(md5($waktunye).md5(@$deweedysaghakey1).md5(@$getformsdata[3]))."', '".@$getformsdata[0]."', '".@$getformsdata[1]."', '".@$getformsdata[2]."', '".@$getformsdata[3]."', 'send', '".$waktunye."'); ");
  break;
   case "dicaridicari":
   if (empty($_POST["searchingboxes"]))
    {die("");}
?>

<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
        <th width="1px">no</th>
        <th width="50%">Nama Anggota</th>
        <th width="25%" class="extrasetfordatatables">No NIK KTP</th>
        <th width="1px" class="extrasetfordatatables">JK</th>
        <th width="1px" class="extrasetfordatatables">Telp</th>
        <th width="7%">aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$querysql="select * from data_pioneerweb where nama_lengkap_pioneer like '%".@$_POST["searchingboxes"]."%' order by dibuatsaat desc";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>"><?php echo $tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>
        <td width="25%" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["username"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["gender_pioneer"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["nomor_telpon_pioneer"]; ?></td>
        <td width="7%"><?php echo "<span class='small'><a href=\"".$lokasiweb."getokin3.php?lihat=".@$tampilkanperkolomdata["username"]."\" target='_blank'><i class='fas fa-print' style='cursor:pointer;' title='Cetak Bagian Depan Kartu'></i></a> <a style='color:#1F1A17;' href=\"".$lokasiweb."getokin3.php?lihat=".@$tampilkanperkolomdata["username"]."&belakang=ya\" target='_blank'><i class='fas fa-print' style='cursor:pointer;' title='Cetak Bagian Belakang Kartu'></i></a></span><br/><span class='small'><a style='color:#1F1A17;' href=\"".$lokasiweb."?page=anggota&lihat=".@$tampilkanperkolomdata["username"]."\"><i class='fas fa-search' style='cursor:pointer;' title='lihat data anggota'></i></a> </span>"; ?></td>
      </tr>

<?php
}
}
else
{echo '<tr><td colspan="8">Tidak Ada Data</td></tr>';}
?>

    </tbody>
  </table>
</div>
  <?php
  break;

case "detectbeforesave":

if ((empty($_REQUEST["faceme"]))||(empty($_REQUEST["faceme2"])))
  {die("");}   

$nilaifotoz=@lihatisikolomtertentu("cek123cheese","rizkameilira",@expimpd(@$_REQUEST["faceme"],"||",","),"rizkameilira");

if ($nilaifotoz!="")
  {$nilaifotoz="kurangvalid";}
else
  {$nilaifotoz="validgambarnya";}
?>
<script>
jQuery(document).ready(function(){
donextboxdari<?php echo @$_REQUEST["faceme2"]; ?>="<?php echo $nilaifotoz; ?>";
jQuery("#dumbtempe<?php echo @$_REQUEST["faceme2"]; ?>").val("<?php echo (@$nilaifotoz==="kurangvalid"?"":@expimpd(@$_REQUEST["faceme"],"||",",")); ?>"); 
document.getElementById('convergence<?php echo @$_REQUEST["faceme2"]; ?>').innerHTML = "<?php echo (@$nilaifotoz==="kurangvalid"?"Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.":"Wajah Terdeteksi"); ?>";
<?php if (@$nilaifotoz=="kurangvalid") { ?>
jQuery("#dumbtempe<?php echo @$_REQUEST["faceme2"]; ?>").val("");
document.getElementById('convergence<?php echo @$_REQUEST["faceme2"]; ?>').innerHTML = "Foto Gambar yang Anda pilih sudah tersimpan dengan user lain, pastikan Anda memakai foto yang benar-benar Anda.";
<?php }; ?>
ctrack<?php echo @$_REQUEST["faceme2"]; ?>.stop();
})
</script>
<?php
die();
break;

   case "loginbro":
      
   if (empty($_REQUEST["formname"]))
    {die("");}
  if ((@$getformsdata[0]=="zuperadmin4piqr")&&(@$getformsdata[1]==$alamatemail))
    {$deweedysaghakey1="a76abed3772b96cd47deccbc4d937cbc";
   $deweedysaghakey3=@mengacakstring(@$getformsdata[1],5);
   $deweedysaghakey2=@$getformsdata[0]; 
@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `onst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', 'online', '".date("Y-m-d H:i:s")."'); ");

die("Selamat datang kembali >> Administrator << "); }
$querysql="select * from data_pioneerweb where username='".@$getformsdata[0]."' and password_untuk_login='".@mengacakstring(@$getformsdata[1],5)."' ";
$muatdetails2="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ if ($tampilkanperkolomdata["status_pioneer"]!="tidak-aktif")
  {
    $deweedysaghakey1=$tampilkanperkolomdata["dataidutama_pioneer"];
   $deweedysaghakey3=@mengacakstring(@$getformsdata[1],5);
   $deweedysaghakey2=$tampilkanperkolomdata["level_akun"]; 

@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `onst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', 'online', '".date("Y-m-d H:i:s")."'); ");

die("Selamat datang kembali >> ".$tampilkanperkolomdata["nama_lengkap_pioneer"]." << "); 
}
else
{hapussemuasessi(); die("Mohon Maaf, Akun yang bernama >> ".$tampilkanperkolomdata["nama_lengkap_pioneer"]." << sudah tidak aktif, harap hubungi tim Admin ".@$namapt); }
} }
else
{die("");}
break;
   case "doeditberitanya":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$tabletarget="beberkanlisting"; $loadfromiddata="";
if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{die("");}
?>

    <script type="text/javascript">
        
        function lakukaneosaver() { 
if (jQuery("#boxforpassz").val()=="")
jQuery("#boxforpassz").val(jQuery("#oldpassbox").val());
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doberitaansaver&formname=inputandataeoarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=donasiku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosaver(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="beberkanlisting"; 

$source6indo="beberkanurut||Judul Berita||Isi Berita||Jadikan Headline Hingga||beberkanpostedat||beberkanpostedby||beberkanmainimages";

$iloopform=0; $formsource=@explode("||",@$source3); $formsource=@explode("||",@$source6); $formsource2=@explode("||",@$source6indo);  $sourceukuran=@explode("||",@$sourceukuran6); $setformdisp="";
$iloopformend=@intval(@count($formsource))-3;
if ($formsource!="")
{ ?>
<div>
<label >Foto Berita *</label><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataeoarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanurut"); echo ($proideas===""?"-":$proideas); ?>" />
<?php $setstatfoto="required";
$proideas=@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanmainimages");
$proideas=($proideas===""?"-":$proideas);
$forbayar="box/beberkan/".@$proideas;
if (($forbayar!="")&&(file_exists($forbayar)))
{ $setstatfoto=""; ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php };  ?> 
<input type="file" <?php echo $setstatfoto; ?> class="deweedycustom validate[required]" placeholder="" name="inputandataeoareafile" /><br/>
</div>
<?php for ($iloopform=1;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{ $dosetattr="beritaan||".$loadfromiddata."||".$formsource[$iloopform];$dosetattr2="beritaan__".$loadfromiddata."__".$formsource[$iloopform];
?>
<iframe id="editorboxfornews<?php echo $getpartz1; ?>" src="<?php echo $lokasiweb."plugins/summernoteindo/summernoteloader.php?"; ?>editfor=<?php echo $dosetattr; ?>" frameborder="0" style="border:0;width:100%;height: 324px !important;"></iframe>
<textarea id="maintextarea<?php echo @$dosetattr2; ?>" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{ if ($formsource[$iloopform]=="beberkanisiheadhingga")
{  ?>
<input type="date" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>"  >
<?php }
else
{ ?>
<input type="text" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}
if ($proideas!="-")
{ ?>
<div>
<label >Di Update Pada: <?php echo @date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu($tabletarget,"beberkanurut",$loadfromiddata,"beberkanpostedat"))); ?></label><br/>
</div>
<?php }; ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo date("Y-m-d H:i:s"); ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="administrator" >
</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;
case "dosomethingunholyberita":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$pesannya="";
$tabletarget="beberkanlisting"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(((@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="beberkanlisting"; 
$tjngmbr="box/beberkan/".@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanmainimages");
if ((@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanurut")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$_REQUEST["loadfromdata"],"beberkanjudul");

$querysql="delete from beberkanlisting where beberkanurut='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data berita: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data berita: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "doberitaansaver":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$pesannya="";
$tabletarget="beberkanlisting"; $loadfromiddata="";
$loadfromiddata=@$getformsdata[0];
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{die("");}
$tabletarget="beberkanlisting"; 
$iloopform=0; $formsource=@explode("||",@$source6); $formsource=@explode("||",@$source6); $sourceukuran=@explode("||",@$sourceukuran6); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{
$setidtosave=@lihatisikolomtertentu("beberkanlisting","beberkanurut",@$getformsdata[0],"beberkanmainimages");
 if (@$tmpName!="")
{
$tjngmbrold="box/beberkan/".@$setidtosave;
$setidtosave=@mengacakstring(md5($getformsdata[1]).md5($getformsdata[3]).md5(date("Y-m-d H:i:s")),5).".jpg";}
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$setidtosave."' where ".$formsource[0]."='".@$getformsdata[0]."'";
}
else
{ $setidtosave=@mengacakstring(md5($getformsdata[1]).md5($getformsdata[3]).md5(date("Y-m-d H:i:s")),5).".jpg";
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `beberkanmainimages`) VALUES ( ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$setidtosave."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Berita";
 $tjngmbr="box/beberkan/".@$setidtosave;
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
if (@file_exists(@$tjngmbrold))
{@unlink($tjngmbrold);}
 if (@move_uploaded_file($tmpName, $tjngmbr))
{@compresszz($tjngmbr, $tjngmbr, 45,500,0);
  $pesannya=$pesannya." dan Foto Berita berhasil disimpan\n";}
 }
}
else
{ if (@$getformsdata[3]!=@$oldcat)
 {@rename($tjngmbrold,$tjngmbr);}
}
}
else
{$pesannya="Gagal Menyimpan Data Berita";}
}
die($pesannya);
break;
case "dosomethingunholyevent":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$pesannya="";
$tabletarget="mediaeo"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Event||Tagline Event||Lokasi Event||Waktu Event||Durasi Hari (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud dan Tujuan||Sasaran Target||Manfaat||waktuupdate";
$tjngmbr="box/evegate/".@$_REQUEST["loadfromdata"].".jpg";
if ((@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"kodeventz")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"coresupplyby"),"nama_lengkap_pioneer");
$namapioneer=@lihatisikolomtertentu("mediaeo","kodeventz",@$_REQUEST["loadfromdata"],"namaeventz")." yang diselenggarakan oleh: ".($namapioneer===""?@$namapt:$namapioneer);

$querysql="delete from vouchermubukanvoucherku where kodeventz='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);

$querysql="delete from mediaeo where kodeventz='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{
  $pathzp = "box/evegatelokasi/"; $countzlain=$countzbox=0;
  $isi_dirzp = @opendir($pathzp) or die("Folder $pathzp tidak bisa dibuka");
  while ($filezp = readdir($isi_dirzp)) {
  $gettodelete=substr($filezp, 0, 2);
  if (($filezp=="index.php")||($filezp=="..")||($filezp==".")||($filezp==".DS_Store")||($gettodelete=="._"))
  {continue;};
  if (count(explode("~~",$filezp))<2)
  {continue;}
  $validasi=explode("~~",$filezp);
  if ($validasi[0]!=@$_REQUEST["loadfromdata"])
  {continue;}
  @unlink($pathzp.$filezp);
  }

  $pesannya="Berhasil Menghapus data kegiatan respon cepat: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data kegiatan respon cepat: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "dosomethingunholyvoucher":
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{die("");}
$pesannya="";
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata="";
$loadfromiddata=@$_REQUEST["loadfromdata"];
$namapioneer=@$_REQUEST["loadfromdata"];
$querysql="delete from vouchermubukanvoucherku where beberkankodevoucher='".@$_REQUEST["loadfromdata"]."' ";
$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data voucher: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data voucher: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;
case "doeosaver":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$pesannya="";
$tabletarget="mediaeo"; $loadfromiddata="";

$loadfromiddata=@$getformsdata[0];

if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Event||Tagline Event||Lokasi Event||Waktu Event||Durasi Hari (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud dan Tujuan||Sasaran Target||Manfaat||waktuupdate";

$iloopform=0; $formsource=@explode("||",@$source4); $formsource=@explode("||",@$source4); $formsource2=@explode("||",@$source4indo);  $sourceukuran=@explode("||",@$sourceukuran3); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ if (($getformsdata[0]!="")&&($getformsdata[0]!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform].(@$formsource[$iloopform]==="taglineeventz"?"||".@$_POST["inputandataeoareasubtag"]:"")."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
}
else
{ $setidtosave=mengacakstring(md5($getformsdata[2]).md5($getformsdata[3]).md5($getformsdata[4]).md5($getformsdata[5]).md5(date("Y-m-d H:i:s")),5);
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=0;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `waktuupdate`) VALUES ( '".$setidtosave."', ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform].(@$formsource[$iloopform]==="taglineeventz"?"||".@$_POST["inputandataeoareasubtag"]:"")."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
  $pesannya="Berhasil Menyimpan Data Kegiatan";
   $tjngmbr="box/evegate/".@$setidtosave.".jpg";
  $tjngmbrold="box/evegate/".@$setidtosave.".jpg";
  if (@$tmpName!="")
  {  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
  { 
  if (@file_exists(@$tjngmbrold))
  {@unlink($tjngmbrold);}
   if (@move_uploaded_file($tmpName, $tjngmbr))
  {@compresszz($tjngmbr, $tjngmbr, 45,500,0);
    $pesannya=$pesannya." dan Foto Kegiatan berhasil disimpan\n";}
   }
  }
  else
  { if (@$getformsdata[3]!=@$oldcat)
   {@rename($tjngmbrold,$tjngmbr);}
  }

  $proideas=$setidtosave;
  $hitungdisimpan=0;
  $getformsdata2="fotomultifile";
  $pathzp2="./box/evegatelokasi/";
  if (count($_FILES[$getformsdata2])>1)
  { for ($loop=0;$loop<count($_FILES[$getformsdata2]['name']);$loop++)
  { if (!empty($_FILES[$getformsdata2]['name'][$loop]))
    { $Namafile = $_FILES[$getformsdata2]["name"][$loop];
        $tmpName  = $_FILES[$getformsdata2]["tmp_name"][$loop];
        $berat = $_FILES[$getformsdata2]["size"][$loop];
        $tipedata = $_FILES[$getformsdata2]["type"][$loop];

      $setidtosave=$setidtosave."~~".md5(md5($waktusebenernyawib).$Namafile).".jpg";
       $tjngmbr=$pathzp2.@$setidtosave;
      if (@$tmpName!="")
      {  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
          {  if (@move_uploaded_file($tmpName, $tjngmbr))
            {@compresszz($tjngmbr, $tjngmbr, 45,500,0);
            $hitungdisimpan=$hitungdisimpan+1;
            }
       }
      }
    }
  }
  }
  else
  {$loop=0;
      if (!empty($_FILES[$getformsdata2]['name'][$loop]))
      { $Namafile = $_FILES[$getformsdata2]["name"][$loop];
        $tmpName  = $_FILES[$getformsdata2]["tmp_name"][$loop];
        $berat = $_FILES[$getformsdata2]["size"][$loop];
        $tipedata = $_FILES[$getformsdata2]["type"][$loop];
        $setidtosave=$setidtosave."~~".md5(md5($waktusebenernyawib).$Namafile).".jpg";
       $tjngmbr=$pathzp2.@$setidtosave;
      if (@$tmpName!="")
      {  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
      {  if (@move_uploaded_file($tmpName, $tjngmbr))
          {@compresszz($tjngmbr, $tjngmbr, 45,500,0);
          $hitungdisimpan=$hitungdisimpan+1;
          }
       }
      }
      }
  }
  if ($hitungdisimpan>1)
  {$pesannya=$pesannya." dan Foto Produk berhasil disimpan\n";}
  if (@$_POST["ygdihapusdarilist"]!="")
  { $datatohapusz=@explode("||",@$_POST["ygdihapusdarilist"]);
      for ($loop=1;$loop<count($datatohapusz);$loop++)
      {
          @unlink($pathzp2.$datatohapusz[$loop]);
      }
      $pesannya=$pesannya." dan Foto dalam list penghapusan berhasil dihapus\n";
  }

}
else
{$pesannya="Gagal Menyimpan Data Kegiatan";}
}
die($pesannya);
break;

   case "doeonya":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}

$tabletarget="mediaeo"; $loadfromiddata="";

if (empty($_REQUEST["loadfromdata"]))
{$loadfromiddata="-";}
else
{$loadfromiddata=@$_REQUEST["loadfromdata"];}


if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(((@lihatisikolomtertentu("mediaeo","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}

?>

    <script type="text/javascript">
        
        function lakukaneosaver() { 
if (jQuery("#boxforpassz").val()=="")
jQuery("#boxforpassz").val(jQuery("#oldpassbox").val());
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doeosaver&formname=inputandataeoarea",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=donasiku';
            return false;
            },
        });

return false;
}

    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosaver(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<?php
$tabletarget="mediaeo"; 
$source4indo="kodeventz||Nama Kegiatan||Tagline Kegiatan||Lokasi Pengumpulan Donasi||Kegiatan dimulai||Waktu Pengumpulan (apabila hanya di hari yang sama, isi dengan angka 0)||Detail Event||Maksud Kegiatan||Tujuan Donasi||Manfaat||waktuupdate";

$iloopform=0; $formsource=@explode("||",@$source3); $formsource=@explode("||",@$source4); $formsource2=@explode("||",@$source4indo);  $sourceukuran=@explode("||",@$sourceukuran4); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ ?>
<div>
<label >Foto Kegiatan Respon Cepat *</label><br/>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" name="inputandataeoarea[]" value="<?php $proideas=@lihatisikolomtertentu($tabletarget,"kodeventz",$loadfromiddata,"kodeventz"); echo ($proideas===""?"-":$proideas); ?>" />
<?php $setstatfoto="required";
$forbayar="box/evegate/".@$proideas.".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{ $setstatfoto=""; ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php };  ?> 
<input type="file" <?php echo $setstatfoto; ?> class="deweedycustom validate[required]" placeholder="" name="inputandataeoareafile" /><br/>
</div>
<?php for ($iloopform=1;$iloopform<$iloopformend;$iloopform++)
{ if (($iloopform==0))
{$setformdisp='style="display: none;" readonly';}
else
{$setformdisp=' required dochangeattr="form" ';
if (($iloopform>1)&&($iloopform<9))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.($iloopform+6).'" ';}
}
?>

<div <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?> *</label><br/>
<?php
$ukuranforms=@intval($sourceukuran[$iloopform]);
if ($ukuranforms>255)
{ $dosetattr="event||".$loadfromiddata."||".$formsource[$iloopform];$dosetattr2="event__".$loadfromiddata."__".$formsource[$iloopform];
?>
<iframe id="editorboxfornews<?php echo $getpartz1; ?>" src="<?php echo $lokasiweb."plugins/summernoteindo/summernoteloader.php?"; ?>editfor=<?php echo $dosetattr; ?>" frameborder="0" style="border:0;width:100%;height: 324px !important;"></iframe>
<textarea id="maintextarea<?php echo @$dosetattr2; ?>" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<?php
}
else
{ if ($formsource[$iloopform]=="waktueventz")
{  ?>
<input type="date" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>"  >
<?php }
else if ($formsource[$iloopform]=="taglineeventz")
{  ?>
<select class="deweedycustom validate[required]" required name="inputandataeoarea[]" >
<?php 
for ($iloop=0;$iloop<count($dataofcats);$iloop++)
{ echo '<option value="'.$dataofcats[$iloop].'" '.(@expimpd(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]),"||","","0x")===$dataofcats[$iloop]?"selected":"").'>'.@ucwords(expimpd($dataofcats[$iloop],"-"," ")).'</option>'; }
?>
</select>
<br/>
<label>Sub Tagline</label><br/>
<input type="text" class="deweedycustom validate[required]" placeholder="Sub Tagline" name="inputandataeoareasubtag" value="<?php echo @expimpd(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]),"||","","1x"); ?>"  >
<?php }
else
{ ?>
<input type="text" <?php echo @$setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputandataeoarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>" >
<?php
};
}
?>
</div>
<?php
}
}
if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))
{ ?>
<div style="display: none;">
<label >Di Selengarakan Oleh: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"kodeventz",$loadfromiddata,"coresupplyby");
 ?> 
<select class="deweedycustom validate[required]" name="inputandataeoarea[]">
<?php echo '<option value="superuser" >'.$namapt.'</option>';
$querysql="select * from data_pioneerweb where level_akun!='donor' ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["dataidutama_pioneer"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["dataidutama_pioneer"]?"selected":"").'>'.$tampilkanperkolomdata["nama_lengkap_pioneer"].'</option>'; }
}
?>
</select>
</div>
<?php }
else
{ ?>
 <input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo (@$deweedysaghakey1===mengacakstring("zuperadmin4piqr",5)?"superuser":@$deweedysaghakey1); ?>" >    
<?php } ; ?>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandataeoarea[]" value="<?php echo date("Y-m-d H:i:s"); ?>" >
</div>

<br/><label>Foto Kegiatan Lainnya</label><br/>
<style>
.blockvideolist {display: inline-flex;width: 28.5%;min-height: 10px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(218,37,28,0.9);}
.blockvideolist * {position: relative;width: 100%;display: block;font-size: 100%;}
.blockvideolist iframe {width:100% !important;height: calc(100vh / 2.3);}
.blockvideolist isi div {font-size: 93%;padding: 6px 7px 6px 9px;width: 96%;}
.blockvideolist h2 {text-align: center;}
.blockvideolist h3 {text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.blockvideolist .readmore, .postfoot {margin: 13px 0 7px 7px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
        @media (min-width: 901px) and (max-width: 930px) {
             .blockvideolist {width: 28.3% !important;}
        }
        @media (min-width: 861px) and (max-width: 900px) {
             .blockvideolist {width: 28% !important;}
        }
        @media (min-width: 841px) and (max-width: 860px) {
             .blockvideolist {width: 27.5% !important;}
        }
        @media (min-width: 761px) and (max-width: 840px) {
            .blockvideolist {width: 44% !important;}
        }
        @media (min-width: 701px) and (max-width: 760px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.5);} .blockvideolist {width: 43% !important;}
        }
        @media (min-width: 661px) and (max-width: 700px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.5);} .blockvideolist {width: 43% !important;}
        }
        @media (min-width: 621px) and (max-width: 660px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 42.5% !important;}
        }
        @media (min-width: 581px) and (max-width: 620px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 42% !important;}
        }
        @media (min-width: 561px) and (max-width: 580px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.);} .blockvideolist {width: 41.5% !important;}
        }
        @media (min-width: 451px) and (max-width: 560px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 41% !important;}
        }
        @media (min-width: 0px) and (max-width: 450px) {
            .blockvideolist iframe {width:100% !important;height: calc(100vh / 2.7);} .blockvideolist {width: 93% !important;} 
        }

        .blockvideowidth {display: inline-flex;width: 47%;min-height: 100px; padding: 4px 3px;margin: 12px 10px 20px 9px;vertical-align: top;}
        .addspans {cursor: pointer;}
</style>
<input type="text" style="display:none !important;" readonly class="deweedycustom validate[required]" id="ygdihapusdarilist" name="ygdihapusdarilist" value="" />

<script type="text/javascript">
function doundophotos(fileberikutnya="",bloknya="") {
var dapatnyafile2nya=jQuery("#ygdihapusdarilist").val();
dapatnyafile2nya=jexpimp(dapatnyafile2nya,"||"+fileberikutnya,"");
jQuery("#ygdihapusdarilist").val(dapatnyafile2nya);
jQuery("#undoblocks"+bloknya).hide();
jQuery("#blockfotoran"+bloknya).show("slow");
return false;
}
function doremovalphotos(fileberikutnya="",bloknya="") {
var dapatnyafile2nya=jQuery("#ygdihapusdarilist").val();
dapatnyafile2nya=dapatnyafile2nya+"||"+fileberikutnya;
jQuery("#ygdihapusdarilist").val(dapatnyafile2nya);
jQuery("#blockfotoran"+bloknya).hide("slow");
jQuery("#undoblocks"+bloknya).show();
return false;
}
var uruttotalboxup=0;
function pertambahanforoaspirasi() {

    jQuery(".addspans").eq(uruttotalboxup).append('<div class="addspans"><span class="caleveact" style="padding:4px 5px !important;width: auto !important;" onclick="pertambahanforoaspirasi();"><i class="fas fa-plus"></i></span> <span class="calactdanger" style="padding:4px 5px !important;width: auto !important;" onclick="penguranganforoaspirasi();"><i class="fas fa-minus"></i></span>&nbsp;<input type="file" multiple class="deweedycustom validate[required]" placeholder="" accept="image/jpeg" name="fotomultifile[]" style="width:81% !important;"/></div>');
    jQuery(".addspans").eq(uruttotalboxup).children(".calactdanger").hide();
    jQuery(".addspans").eq(uruttotalboxup).children(".caleveact").hide();
    uruttotalboxup=uruttotalboxup+1;
}
function penguranganforoaspirasi() {
    jQuery(".addspans").eq(uruttotalboxup).remove();
    uruttotalboxup=uruttotalboxup-1;
    jQuery(".addspans").eq(uruttotalboxup).children(".calactdanger").show();
    jQuery(".addspans").eq(uruttotalboxup).children(".caleveact").show();
}
</script>

<div style="position:relative !important;display: block !important;">
<?php $setstatfoto="required";
$loopforceks=0;
$pathzp2="./box/evegatelokasi/";
$isi_dirzp2 = @opendir($pathzp2) or die("Folder $pathzp2 tidak bisa dibuka");
$objects = urutberdasarkanwaktu($pathzp2); 
foreach ($objects as $filezp2) { 
$gettodelete=substr($filezp2, 0, 2);
if (($filezp2=="index.php")||($filezp2=="resizer.php")||($filezp2=="..")||($filezp2==".")||($filezp2==".DS_Store")||($filezp2==basename($_SERVER['PHP_SELF']))||($gettodelete=="._"))
{continue;};
$validasi=explode("~~",$filezp2);
if ($validasi[0]!=@$loadfromiddata)
{continue;}
$blokrand=md5($filezp2);
$loopforceks++;
?>
<div class="blockvideolist" style="box-shadow:0px 0px 10px 1px rgba(218,37,28,0.2) !important;text-align: center !important;">
<table id="blockfotoran<?php echo $blokrand; ?>" style="border:0;width: 100%;" cellpadding="0" cellspacing="0">
<tr><td style="width: 100%;"><img decoding="async" src="<?php echo $pathzp2.$filezp2; ?>" style="height: auto !important;width: 100% !important;"></td></tr>
<tr><td style="width: 100%;text-align: center;"><span style="cursor: pointer;padding:2px 5px !important;width: auto !important;height: auto !important;margin:0 auto !important;" class="calactdanger" onclick="doremovalphotos('<?php echo $filezp2; ?>','<?php echo $blokrand; ?>');">hapus</span></td></tr>
</table>
<span id="undoblocks<?php echo $blokrand; ?>" style="cursor: pointer;padding:2px 5px !important;width: auto !important;height: auto !important;display: none;margin:0 auto !important;" class="calactdanger" onclick="doundophotos('<?php echo $filezp2; ?>','<?php echo $blokrand; ?>');">batalkan</span>
</div>
<?php
};
closedir($isi_dirzp2);
if ($loopforceks>0) {
  $setstatfoto="";
}
?>
<div class="addspans"><span class="caleveact" style="padding:4px 5px !important;width: auto !important;" onclick="pertambahanforoaspirasi();"><i class="fas fa-plus"></i></span>&nbsp;<input type="file" <?php echo $setstatfoto; ?> multiple class="deweedycustom validate[required]" placeholder="" accept="image/jpeg" name="fotomultifile[]" style="width:90% !important;"/></div>
</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>

</form>
<?php
break;

case "doeosavervoucher":
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))
{die("");}
$pesannya="";
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata="";

$loadfromiddata=@$getformsdata[0];

if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(((@lihatisikolomtertentu("vouchermubukanvoucherku","kodeventz",@$loadfromiddata,"coresupplyby")!=@$deweedysaghakey1))&&($loadfromiddata!="-")&&($loadfromiddata!="")))
{die("");}
$tabletarget="vouchermubukanvoucherku"; 


$iloopform=0; $formsource=@explode("||",@$source5); $formsource=@explode("||",@$source5); 
$sourceukuran=@explode("||",@$sourceukuran3); $setformdisp="";

$setidtosave=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"beberkankodevoucher");

if ($formsource!="")
{ if (($setidtosave!="")&&($setidtosave!="-"))
{ $setidtosave=@$getformsdata[0];
$query="update `".$tabletarget."` set ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" ".$formsource[$iloopform]."='".$getformsdata[$iloopform]."',"; }
$query.=" ".$formsource[(@count($formsource)-1)]."='".$getformsdata[(@count($formsource)-1)]."' where ".$formsource[0]."='".$setidtosave."'";
}
else
{ $setidtosave=@$getformsdata[0];
$query="INSERT INTO `".$tabletarget."` (";
for ($iloopform=0;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.="`".$formsource[$iloopform]."`,"; }
$query.=" `minimnya`) VALUES ( '".$setidtosave."', ";
for ($iloopform=1;$iloopform<(@count($formsource)-1);$iloopform++)
{ $query.=" '".$getformsdata[$iloopform]."',";}
$query.=" '".$getformsdata[(@count($formsource)-1)]."');";
}
$ceksave = queryuniverse($query);
if ($ceksave)
{ 
$pesannya="Berhasil Menyimpan Data Voucher";
}
else
{$pesannya="Gagal Menyimpan Data Voucher";}
}
die($pesannya);
break;
case "batastimevoucher":
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{die("");}
$newsid=@$_REQUEST["loadfromdata"];
$newsberlaku="";
$newsberlaku=@intval(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"durasievent"))+1;
$newsberlaku=@strtotime((@intval($newsberlaku)===0?@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"):@dapatkantanggaltujuan(@lihatisikolomtertentu("mediaeo","kodeventz",@$newsid,"waktueventz"),$newsberlaku)));
echo @date("Y-m-d",$newsberlaku);
die();
break;
   case "dokuponan":
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{die("");}
$tabletarget="vouchermubukanvoucherku"; $loadfromiddata=$loadfromiddatax="";
if ((empty($_REQUEST["loadfromdata"]))||(@$_REQUEST["loadfromdata"]=="-"))
{$loadfromiddata=@substr(@md5(date("Y-m-d H:i:s")),0,8); $loadfromiddatax="";}
else
{$loadfromiddata=$loadfromiddatax=@$_REQUEST["loadfromdata"];}
?>
    <script type="text/javascript">
        
function dobuatbataswaktu() { 
jQuery.get("<?php echo $lokasiweb; ?>?docommand=batastimevoucher&loadfromdata="+jQuery("#evethor").val(), function(hasilnya){
if (hasilnya!="")
  {jQuery("#tangalantargets").val(hasilnya);}
return false;
});
}
<?php
if ($loadfromiddatax==""){ ?>
jQuery(document).ready(function(){
  dobuatbataswaktu();
})
<?php }; ?>
        function lakukaneosavervoucher() { 
if (jQuery("#boxforpassz").val()=="")
jQuery("#boxforpassz").val(jQuery("#oldpassbox").val());
var formData = new FormData(jQuery("#formdaftarinproduks")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doeosavervoucher&formname=inputanareakuponan",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            doloadallmember();
//            window.location.href='<?php echo $lokasiweb; ?>?page=donasiku';
            return false;
            },
        });

return false;
}
    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinproduks" onsubmit="lakukaneosavervoucher(); return false;">
<div class="form-fields">
<div class="contentboxsforall" style="width:100%;min-height: 100px;">

<div>
<label >Kode Voucher</label><br/>
<input type="text" readonly class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @$loadfromiddata; ?>" maxlength="8" >
</div>
<div>
<label >Untuk Event: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"kodeventz");
 ?> 
<select class="deweedycustom validate[required]" required name="inputanareakuponan[]" id="evethor" onchange="dobuatbataswaktu();">
<?php 
$querysql="select * from mediaeo where waktueventz > '".date("Y-m-d")."' ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["kodeventz"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["kodeventz"]?"selected":"").'>'.$tampilkanperkolomdata["namaeventz"].'</option>'; }
}
else
{echo '<option value="" >Tidak Ada Data Event</option>';}

?>
</select>
</div>
<div>
<label >Diskon Sebesar</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"potongansebesar"); ?>" maxlength="2" >
</div>
<div>
<label >Kupon Berlaku Hingga</label><br/>
<input type="date" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"beberkanisiheadhingga"); ?>" id="tangalantargets" >
</div>
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputanareakuponan[]" value="<?php echo date("Y-m-d H:i:s"); ?>" >
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim"); ?>" >

<div>
<label >Kuota Voucher</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"kuoatavoucher"); ?>" maxlength="3" >
</div>

<div>
<label >Voucher untuk Produk: *</label><br/>
<?php $setstatsupply=@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"idproduk");
 ?> 
<select class="deweedycustom validate[required]" required name="inputanareakuponan[]">
<?php 
$querysql="select * from mediaeo ";
$countcek=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{$countcek++;
echo '<option value="'.$tampilkanperkolomdata["kodeventz"].'" '.@(@$setstatsupply===$tampilkanperkolomdata["idproduk"]?"selected":"").'>'.$tampilkanperkolomdata["namaeventz"].'</option>'; }
}
else
{echo '<option value="" >Tidak Ada Data Produk</option>';}

?>
</select>
</div>
<div>
<label >Minumum Belanja</label><br/>
<input type="number" required class="deweedycustom validate[required]" name="inputanareakuponan[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"minimnya"); ?>" maxlength="2" >
</div>

<div <?php echo (@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim")===""?"style='display:none;' ":""); ?>>
<label >Jumlah yang Klaim: <?php echo @count(@explode("||",@lihatisikolomtertentu($tabletarget,"beberkankodevoucher",$loadfromiddata,"pioneerygklaim"))); ?></label><br/>
</div>

</div>
</div>
<br/><br/>
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/>
</form>
<?php
break;

case "loaddata2superdo":
if (empty($_REQUEST["nextclue"]))
{die();}

if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor")&&((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="representative")))&&(@$_REQUEST["nextclue"]=="dataevent"))
{die("");}

if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(@$_REQUEST["nextclue"]=="datavoucher"))
{die("");}

?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<i title='Reload' class='caleveact fas fa-recycle' style='cursor:pointer;padding:9px !important;'  onclick="doloadallmember();"></i>
<i title='Add New' class='caleve fas fa-plus' style='cursor:pointer;padding:9px !important;'  onclick="doloadeachmember('-');"></i>


<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
<?php
$querysql="";
if (@$_REQUEST["nextclue"]=="datavoucher")
{ $colspander="10"; ?>
        <th width="1px">no</th>         <th width="25%">Kode Voucher</th>         <th width="50%" class="extrasetfordatatables">Nama Event</th> <th width="25%">Nama Produk</th>  <th width="25%" style="text-align: center;">Potongan</th><th width="25%" style="text-align: center;">Kuota</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Minimal<br/>Belanja</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Di Klaim</th><th width="25%" class="extrasetfordatatables" style="text-align: center;">Berlaku</th>   <th width="7%">aksi</th> 
<?php
}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{ $colspander="5"; ?>
        <th width="1px">no</th>         <th width="50%">Judul Berita</th>         <th width="25%" class="extrasetfordatatables">Headline Hingga</th> <th width="25%">Waktu Update</th>  <th width="7%">aksi</th> 
<?php
}
else
  { $colspander="5"; ?>
        <th width="1px">no</th>         
                         <th width="50%">Nama Event</th>         <th width="10%" class="extrasetfordatatables">Waktu Event</th>         <th width="10%" class="extrasetfordatatables">Durasi Event</th>       
        <?php if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5)) {$colspander="6"; echo '<th width="50%">Nama Penyelenggara</th>';  }; ?>
                                       <th width="7%">aksi</th> 
<?php
}

?>
</tr>
    </thead>
    <tbody>
<?php
if (@$_REQUEST["nextclue"]=="dataevent")
{
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{$querysql=" where coresupplyby='".@$deweedysaghakey1."' ";}

$querysql="select * from mediaeo ".@$querysql." order by waktueventz desc";
}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{$querysql="select * from beberkanlisting order by beberkanpostedat desc";}
else
{$querysql="select *, count(kodeventz) as jumlahnya from vouchermubukanvoucherku group by beberkankodevoucher order by beberkanpostedat desc";}
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
  if (@$_REQUEST["nextclue"]=="datavoucher")
{ $getnamarepresentative=@lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"namaeventz");
$getnamarepresentative=($getnamarepresentative===""?"-":$getnamarepresentative);
?>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         <td width="25%" id="namaakunnya<?php echo $tampilkanperkolomdata["beberkankodevoucher"]; ?>"><?php echo $tampilkanperkolomdata["beberkankodevoucher"]; ?></td>       <td width="50%" class="extrasetfordatatables"><?php echo $getnamarepresentative; ?></td>  
        <td width="1px"><?php
$proidx=@$tampilkanperkolomdata["idproduk"];
echo @lihatdetailproduk($proidx,"namaeventz");
$supby=@lihatdetailproduk($proidx,"coresupplyby");
$supby=($supby==="superuser"?@$namapt:"<span style='font-size:80% !important;'>".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"nama_lengkap_pioneer")."<br/>Kota / Kab: ".@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$supby,"alamat_kota_domisili")."</span>")
          ?></td>  

<td width="25%" style="text-align: center;"><?php echo @$tampilkanperkolomdata["potongansebesar"]; ?> %</td><td width="25%" style="text-align: center;"><?php echo @$tampilkanperkolomdata["kuoatavoucher"]; ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @$tampilkanperkolomdata["minimnya"]; ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @count(@explode("||",@$tampilkanperkolomdata["pioneerygklaim"])); ?></td><td width="25%" class="extrasetfordatatables" style="text-align: center;"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"])); ?></td>

               <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["beberkankodevoucher"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["beberkankodevoucher"]."');\"></i>"; ?></td> 
      </tr>

<?php
}
else if (@$_REQUEST["nextclue"]=="databeritaan")
{ 
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
                         <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["beberkanurut"]; ?>"><?php echo @$tampilkanperkolomdata["beberkanjudul"]; ?></td>         <td width="25%" class="extrasetfordatatables"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"])); ?></td>         <td width="25%" class="extrasetfordatatables"><?php echo @date("d F Y H:i:s",@strtotime(@$tampilkanperkolomdata["beberkanpostedat"])); ?></td>
<td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["beberkanurut"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["beberkanurut"]."');\"></i>"; ?></td>
      </tr>
<?php
}
else
{ $getnamarepresentative=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["coresupplyby"],"nama_lengkap_pioneer");
$getnamarepresentative=($getnamarepresentative===""?@$namapt:$getnamarepresentative); 
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
                         <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["kodeventz"]; ?>"><?php echo @$tampilkanperkolomdata["namaeventz"]; ?></td>         <td width="10%" class="extrasetfordatatables"><?php echo @date("d F Y",@strtotime(@$tampilkanperkolomdata["waktueventz"])); ?></td>         <td width="10%" class="extrasetfordatatables"><?php echo @$tampilkanperkolomdata["durasievent"]; ?></td>       
        <?php if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5)) {$colspander="6"; echo '<td width="50%">'.@$getnamarepresentative.'</td>';  }; ?>
                                      
<td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["kodeventz"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["kodeventz"]."');\"></i>"; ?></td>
      </tr>
<?php
}
};
}
else
{echo '<tr><td colspan="'.$colspander.'">Tidak Ada Data</td></tr>';}
?>
    </tbody>
  </table>
</div>
  <?php
break;
case "cekvoucheran":
$printerros="0|*|0";
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=@explode("||",$_REQUEST["angkarupiah"]); 
if (count($angkarupiah)<3)
{die($printerros."|*|-");}
if (empty($deweedysaghakey1))
{die($printerros.(@$angkarupiah[2]===""?"|*|-":"|*|Karena Anda Belum Melakukan Login"));}
if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))
{die($printerros."|*|Karena tidak berlaku untuk Super Admin");}
$querysql="select * from vouchermubukanvoucherku where idproduk='".$angkarupiah[0]."' and beberkankodevoucher='".$angkarupiah[2]."'  and pioneerygklaim like '%".$deweedysaghakey1."%'; "; $hitungtotal=0; $susunberita="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $minims=@intval(@$tampilkanperkolomdata["minimnya"]);
    $palingbanter=strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"]);
if (strtotime(date("Y-m-d"))>($palingbanter))
{ die($printerros."|*|Karena cuma berlaku hingga ".@date("d F Y",$palingbanter));}
else
{
if ($angkarupiah[1]<$minims)
{ die($printerros."|*|Karena minimum belanja sebanyak: ".@$minims);}
die(@intval(@$tampilkanperkolomdata["potongansebesar"])."|*|".@$minims."|*| ");
 }; };
};
}
die($printerros."|*|-");
break;

case "dokalulat":
if ((!empty($_REQUEST["angkarupiah"]))&&(intval($_REQUEST["angkarupiah"])>0))
{ $angkarupiah=intval($_REQUEST["angkarupiah"]); $datakurs=@ceksikurus();
echo "1 Dollar Hari ini (sumber Bank Indonesia) : Rp. ".@renominalvalues(@$datakurs)."<br/>";
echo "1 Pi (GCV / Global Consensus Value) Ke Dollar : ".@renominalvalues(@satupi)." $ <br/>";
$pitorupiah = $datakurs * $satupi;
echo "1 Pi (GCV / Global Consensus Value) Ke Rupiah : Rp. ".@renominalvalues(@$pitorupiah)." <br/>";
echo "<br/>Hasil Perhitungan Kalkulator Pi dari Angka Rupiah yang Anda Masukkan : <br/>Rp. ".@renominalvalues(@$angkarupiah)." adalah: ";
$alltotalonpi=dohitunganpi($angkarupiah); echo $alltotalonpi."<br/><br/>";
}
else
{echo "0";}
die();
break;

case "kirimindependen":
$messagings=$gettepmid=$messagingsmail="";
if (!empty($_REQUEST["dests"]))
{
$gettepmid=$_REQUEST["dests"];
$gettepmid=(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"dataidbelanjaan")===""?"":$gettepmid);
if ($gettepmid=="")
{die();}
$messagingsmail=@kirimdatabelanjaa(@$gettepmid);
}
die((@$_REQUEST["doitforkonfirmasi"]==="ya"?"Pembayaran Terkonfirmasi, Status Pembayaran Lunas, dan ":"").$messagingsmail);
break;

   case "loaddeliverdetails":
$tabletarget="databelanjaanpioner"; $loadfromiddata="";
$printerrors="<div style='padding:5px;'>No Data To Show &nbsp;".'<input type="button" class="caleveact" onclick="doloadallmember();" value="reload"/>'."</div>";
if (empty($_REQUEST["loadfromdata"]))
{die($printerrors);}
$loadfromiddata=@$_REQUEST["loadfromdata"];

if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidbelanjaan")=="")
{die($printerrors);};

$loadfromiddatax=@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"dataidutama_pioneer");
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$loadfromiddatax,"dataidutama_pioneer")=="")
{ $tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);}
$querysql="delete from databelanjaanpioner where dataidbelanjaan='".@$loadfromiddata."' ";
@queryuniverse($querysql);
  die($printerrors);};
$apastatusnyadibayar=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$loadfromiddata,"status_pembayaran");
?>

<script type="text/javascript">
function showafterangka()
{ 
  if ((jQuery("#nomdonz").val()=="")||(parseFloat(jQuery("#nomdonz").val())<10000))
  { jQuery("#rinciannya").html("");
  jQuery("#boxofasalnya").hide("slow");
    return false;
  }
  else
  {

if (jQuery("#nomdonz").val().length>15)
  {
alert("Digit Angka yang Anda Masukkan terlalu banyak, sistem secara otomatis akan mengurangi");
jQuery("#nomdonz").val(jQuery("#nomdonz").val().substring(0,15));
  }
    jQuery("#boxofasalnya").show("slow"); jQuery("#rinciannya").load('<?php echo $lokasiweb; ?>?docommand=dokalulat&angkarupiah='+parseFloat(jQuery("#nomdonz").val()));
<?php echo (@$apastatusnyadibayar==="belum-dibayar"?"pymetodas();":""); ?>
    return false;
  }

}

        function lakukandaftar() { 

if ((jQuery("#nomdonz").val()=="")||(parseFloat(jQuery("#nomdonz").val())<10000))
{
jQuery("#rinciannya").html("");
  jQuery("#boxofasalnya").hide("slow");
alert("maaf, minimal Rp. 10000 [ sepuluh ribu rupiah ] apabila Anda ingin ber-donasi");
  return false;
}
if (jQuery("#nomdonz").val().length>15)
  {
alert("Digit Angka yang Anda Masukkan terlalu banyak, sistem secara otomatis akan mengurangi");
jQuery("#nomdonz").val(jQuery("#nomdonz").val().substring(0,15));
  }

var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandatadaftar&metoz=formorder",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){

<?php
if($runonmobile=="mobile")
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"status_pembayaran")!="lunas")&&((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]==""))))
{ ?> alert(jexpimp(hasilnya,"|-|","","0x"));
if (jQuery("#pilihanatarakoinataurupiah").val()=="picoins")
 {window.location.href='<?php echo $lokasiweb; ?>paitnya.php?paitx='+jexpimp(hasilnya,"|-|","","1x");}
 else
 {window.location.href='<?php echo $lokasiweb; ?>';}
   <?php }
else
{ ?> alert(hasilnya); window.location.href='<?php echo $lokasiweb; ?>'; <?php };
 }
else
{ ?> alert(hasilnya); window.location.href='<?php echo $lokasiweb; ?>';
<?php }; ?>

            return false;
            },
        });

return false;
}

    </script>

<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">
  <div style="width:100%;text-align:center !important;margin-bottom: 9px;padding-bottom: 5px;border-bottom: 1px solid #000;"><label>Donasi dalam Rupiah (sistem akan otomatis menkonversi menjadi Pi Coin)</label></div>
<input type="text" class="deweedycustom validate[required]" name="inputandatadaftartop[]" value="<?php echo $loadfromiddata; ?>" style="display: none;"/>


  <label>Pilih Kegiatan Cepat Tanggap</label>
<select class="deweedycustom validate[required]" required name="inputandatadaftartop[]">
<?php
$querysql="select * from mediaeo order by waktuupdate desc, waktuupdate desc";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
 echo "<option value=\"".$tampilkanperkolomdata["kodeventz"]."\" ".($tampilkanperkolomdata["kodeventz"]===@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"id_event")?" selected ":"").">".$tampilkanperkolomdata["namaeventz"]."</option>"; 
}
}
else
{echo "<option value=''>Tidak Ada kegiatan Respon Cepat</option>";}
?>
</select>
<input type="number" class="deweedycustom validate[required]" <?php echo (@$apastatusnyadibayar==="belum-dibayar"?"required":"readonly"); ?> id="nomdonz" onkeyup="showafterangka();" placeholder="minimal 10000 (sepuluh ribu rupiah)" name="inputandatadaftartop[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"jumlahdlmrp"); ?>"/>

<div id="rinciannya">

</div>
<br/>
<label>Ber-donasi dalam bentuk <?php echo @(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"status_pembayaran")==="lunas"?": ".@(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"tipedonate")==="rupiah"?"Rupiah":"Pi Coin"):""); ?></label>
<select <?php echo @(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"status_pembayaran")==="lunas"?" style='display:none;' ":""); ?> class="deweedycustom validate[required]" id="pilihanatarakoinataurupiah" name="inputandatadaftartop[]" onchange="pymetodas();">
        <option value="picoins" >Pi-Coin</option>
    <option value="rupiah" <?php echo @(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"tipedonate")==="rupiah"?"selected":""); ?>>Rupiah</option>
</select>

<?php if ((@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$deweedysaghakey1,"level_akun")=="admin")||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$deweedysaghakey1,"level_akun")=="representative")&&(@$deweedysaghakey1==@lihatisikolomtertentu("mediaeo","kodeventz",@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"id_event"),"coresupplyby")))) { ?>
<div>
<label>Status Pembayaran *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatadaftartop[]">
        <option value="belum-dibayar" >Belum dibayar</option>
    <option value="lunas" <?php echo @(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"status_pembayaran")==="lunas"?"selected":""); ?>>Lunas</option>
</select>
</div>
<?php }
else
{ ?> 
<div>
<label>Status Pembayaran : <?php echo @expimpd(@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"status_pembayaran"),"-"," "); ?></label><br/>
</div>
<?php }; ?>

<div>
<label >Bukti Pembayaran *</label><br/>
<?php $setstatfoto="required";
$apastatusnyadibayar=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$loadfromiddata,"status_pembayaran");

if (@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar")!="")
{ $setstatfoto="";
$forbayardata=@lihatisikolomtertentu($tabletarget,"dataidbelanjaan",$loadfromiddata,"foto_bukti_bayar");
$forbayar="box/buktiupbayar/".$forbayardata;
if (($forbayardata!="")&&(file_exists($forbayar)))
{ ?>
<div style="width: 100%;text-align: center;"><img src="<?php echo $lokasiweb.$forbayar;?>" style="width: 72%;height: auto;margin: 0 auto;"/></div>
<?php }
else {
if (@$apastatusnyadibayar!="belum-dibayar") 
  {echo "Pembayaran melalui PI-coin<br/>";}
} 
}; ?> <br/><br/>
Anda Bisa Kirimkan Pi-Coin Versi Testnet ke wallet Testnet dibawah ini:
<?php if (@$apastatusnyadibayar=="belum-dibayar") { ?>
  <script>
    function pymetodas() {
      if (jQuery("#pilihanatarakoinataurupiah").val()=="picoins") {
   jQuery("#framingcheck").attr("src","cekaslinnya/index.php?loadfrom=<?php echo $loadfromiddata; ?>&dengai="+jQuery("#nomdonz").val());
        jQuery("#uploadbyrupiah").hide();jQuery("#bycoinnya").show();
      }
      else
      {
        jQuery("#bycoinnya").hide(); jQuery("#uploadbyrupiah").show();
      }
    }
  </script>


<input type="file" id="uploadbyrupiah" accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatadaftartopfile" ><br/>
<div id="bycoinnya" style="display: none;">
<div style="display: none;" id="boxforwallets"></div>
<?php $apakpakepibrowser="";
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ ?>
<script>
function bukamywalletx() {
window.location.href='<?php echo $lokasiweb; ?>paitnya.php?<?php echo (@$_REQUEST["formwhats"]==="mobile"?"formwhats=mobile&":""); ?>paitx=<?php echo $loadfromiddata; ?>';
}
</script>
 <input id="walletbuttons" type="button" class="dt-btn dt-btn-m caleveact" value="buka wallet" onclick="bukamywalletx();" style="width:auto;"/> atau
<?php } else { ?> Bot Coin Pi

<div style="padding:4px; border:1px dashed #ccc;">
<textarea id="datawalletx" style="width: 100%;min-height: 123px;" readonly><?php echo idwallettujuan; ?></textarea>

Anda bisa mengunakan bot Pi-coin apabila terjadi error di pi://wallet.pi setelah Anda melakukan belanja langsung dari laman "home" seperti contoh dibawah ini<br/>
<img src="<?php echo $lokasiweb."box/errornya.jpg"; ?>" style="width: 50%;height: auto;" align="center"/><br/>
<?php
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ ?>
<a href="pi://wallet.pi/?destination=%2Fpay-request&publicKey=<?php echo @$idwallettujuan; ?>&value=0.0000001&amount=0.0000001/#Intent;scheme=https;package=pi.browser;S.browser_fallback_url=https%3A%2F%2Fwallet.pinet.com%2F?destination=%2Fpay-request&publicKey=<?php echo @$idwallettujuan; ?>&value=0.0000001&amount=0.0000001;end" class="dt-btn dt-btn-m pigoldbutton">Buka Wallet Metode 2</a>
<?php }; ?>
Pastikan Anda mentransfer ke wallet Pi di atas dan pastikan Anda mengakses pi://wallet.pi di pi-browser Anda dengan jumlah:<br/><br/> <span id="jumlahforpay"></span><br/><br/>
Setelah mentransfer, harap "screen-shot" history transaksi Anda seperti contoh: <img src="<?php echo $lokasiweb."box/contohnya.jpg"; ?>" style="width: 36%;height: auto;" align="center"/> <br/><br/>dan klik tombol "pilih file" dibawah ini dan pilih "screen-shot" history transaksi Anda dan tunggu hingga bot selesai verifikasi pembayaran
</div>
    <iframe id="framingcheck" oncontextmenu="return false;" frameborder="0" style="width: 100%;height: 34px !important;overflow: hidden !important;" scrolling="no"></iframe>
  <?php }; ?>
<script type="text/javascript">
  function doreupbuktis() {
jQuery("#framingcheck").attr("src","cekaslinnya/index.php?loadfrom=<?php echo $loadfromiddata; ?>&dengai="+jQuery("#nomdonz").val());
  }
  function testdriver(hasilnya="") {
    if (hasilnya=="valid")
    { jQuery("#framingcheck").hide();
     jQuery("#hasilceknya").val("<?php echo (@$apastatusnyadibayar==="belum-dibayar"?"lunas":""); ?>");      
     jQuery("#ubahfungsisetelahsave").attr("type","button");jQuery("#ubahfungsisetelahsave").hide();jQuery("#ubahfungsisetelahsave2").hide();
       jQuery("#botredo").load("<?php echo $lokasiweb; ?>?docommand=kirimindependen&doitforkonfirmasi=ya&dests=<?php echo $loadfromiddata; ?>");
        jQuery("#botredo").show();

    }
  }
</script>
<div style="width: 100%;text-weight:bolder;margin:6px 0 !important;display: none;" id="botredo"></div>
</div>
<?php }; ?>
</div>

<br/><br/>
<input type="submit" id="ubahfungsisetelahsave" class="dt-btn dt-btn-m caleveact" value="update donasi" style="width:auto;"/> <input id="ubahfungsisetelahsave2" type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>  <input type="button" class="dt-btn dt-btn-m calactdanger" value="Kembali" style="width:auto;" onclick="doloadallmember();" />

</div>
</form>
<script type="text/javascript">
jQuery(document).ready(function() {
showafterangka();

})

</script>
<?php
break;

case "doregnewone":
$messagings=$gettepmid="";
$messagingsmail="";

if ((@$_POST["inputandatadaftartop"][0]!="")&&(@$_POST["inputandatadaftartop"][1]!="")&&(@$_POST["inputandatadaftartop"][2]!="")&&(@$_POST["inputandatadaftartop"][3]!="")&&(!empty($deweedysaghakey1))&&($_REQUEST["metoz"]=="formorder"))
{
if ((@$_POST["inputandatadaftartop"][0]=="-")&&(@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5)))
{die("Mohon Maaf, admin dilarang melakukan donasi");}
$gettepmid=dosavethecoredatas($_REQUEST["formname"]."2","databelanjaanpioner",$deweedysaghakey1);
$messagings=@expimpd($gettepmid,"||","","1x")."\n";
$gettepmid=@expimpd($gettepmid,"||","","0x");
if($runonmobile=="mobile")
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{
$messagings=$messagings.(@$_POST["inputandatadaftartop"][3]==="picoins"?"|-|".$gettepmid:"");
}
}


die($messagings);
}

if (!empty($_REQUEST["formname"]))
{ if (!empty($deweedysaghakey1))
{if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{$gettepmid=@dosavethecoredatas($_REQUEST["formname"]."2","databelanjaanpioner",@$deweedysaghakey1);}
else
{
$gettepmid=@dosavethecoredatas($_REQUEST["formname"],"data_pioneerweb","");};
}
else
{$gettepmid=@dosavethecoredatas($_REQUEST["formname"],"data_pioneerweb","");}
if (substr($gettepmid,0,12)=="Proses Gagal")
{$messagings=$gettepmid;}
else
{
if ((empty($deweedysaghakey1))||(((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]=="formdaftar"))&&(!empty($deweedysaghakey1))))
{ $messagings=@expimpd($gettepmid,"||","","1x")."\n";
$gettepmid=@expimpd($gettepmid,"||","","0x");
$getformsdata2=$_REQUEST["formname"]."file";
$messagingsmail=@loaddoverifikasimail(@$gettepmid);
$messagings=$messagings.(@$messagingsmail===""?"":" dan ".@$messagingsmail." ");
  if (!empty($_FILES[$getformsdata2]))
  {
  $Namafile = $_FILES[$getformsdata2]["name"];
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ $tjngmbr="box/photoexp/".@$gettepmid.".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
 if (@move_uploaded_file($tmpName, $tjngmbr))
{$messagings=$messagings." dan gambar Profile berhasil disimpan\n";
@compresszz($tjngmbr, $tjngmbr, 45,500,0);
}
else
{$messagings=$messagings." tapi gambar Profile gagal disimpan\n";}
}
else
{$messagings=$messagings." tapi Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg \n";}
};
}
if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]=="formdaftar"))
{
$setidtosave2=@expimpd(@$_POST[@$_REQUEST["formname"]][0],"||","","1x");
  $setidtosave=@expimpd(@$_POST[@$_REQUEST["formname"]][0],"||","","0x");

if ($setidtosave2!="")
{
  if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{ if ($deweedysaghakey1==$setidtosave)
{if ($deweedysaghakey3!=@$_POST[@$_REQUEST["formname"]][3])
{$deweedysaghakey3=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"password_untuk_login");
@queryuniverse("update `deweedysaghal0gg3r` set l0gp4zz='".$deweedysaghakey3."' where l0gip4ddr3zz='".ceklogfroms."' ");
}
if ($deweedysaghakey2!=@$_POST[@$_REQUEST["formname"]][(count(@$_POST[@$_REQUEST["formname"]])-2)])
{$deweedysaghakey2=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"level_akun");
@queryuniverse("update `deweedysaghal0gg3r` set l3v3lupz='".$deweedysaghakey2."' where l0gip4ddr3zz='".ceklogfroms."' ");
};}; }
die($messagings);
}
}
if (empty($deweedysaghakey1))
{$deweedysaghakey1=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"dataidutama_pioneer");
$deweedysaghakey2=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"level_akun");
$deweedysaghakey3=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",$gettepmid,"password_untuk_login");
@queryuniverse("INSERT INTO `deweedysaghal0gg3r` (`m4inl0gk3y`, `l3v3lupz`, `l0gp4zz`, `l0gip4ddr3zz`, `l0gst4tuz`, `beberkanpostedat`) VALUES
('".$deweedysaghakey1."', '".$deweedysaghakey2."', '".$deweedysaghakey3."', '".ceklogfroms."', 'log1n', '".date("Y-m-d H:i:s")."'); ");
};

$messagings=$messagings."\n";
if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{$gettepmid=dosavethecoredatas($_REQUEST["formname"]."2","databelanjaanpioner",$gettepmid);}
}
else
{$messagings="";}

if ((!empty($_REQUEST["metoz"]))&&($_REQUEST["metoz"]!="formdaftar"))
{ $messagingsmail=@kirimdatabelanjaa(@expimpd($gettepmid,"||","","0x"));
$messagings.="".@expimpd($gettepmid,"||","","1x")."\n"."\n".(@$messagingsmail===""?"":" dan ".@$messagingsmail." ")."\n"."\n";

$gettepmid=@expimpd($gettepmid,"||","","0x");
$getformsdata2=$_REQUEST["formname"]."2file";
  if (!empty($_FILES[$getformsdata2]))
  {
  $Namafile = @md5(@md5($_FILES[$getformsdata2]["name"]).@md5(date("Y-m-d H:i:s"))).".jpg";
  $tmpName  = $_FILES[$getformsdata2]["tmp_name"];
  $berat = $_FILES[$getformsdata2]["size"];
  $tipedata = $_FILES[$getformsdata2]["type"];
if (@$tmpName!="")
{  if ((@$tipedata=="image/jpeg")||(@$tipedata=="image/jpg"))
{ 
  if (@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")
 {$tjngmbr="box/buktiupbayar/".@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar");
if ((@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",$gettepmid,"foto_bukti_bayar")!="")&&(file_exists($tjngmbr)))
{unlink($tjngmbr);};
}
$tjngmbr="box/buktiupbayar/".$Namafile;
 if (@move_uploaded_file($tmpName, $tjngmbr))
{$messagings=$messagings." dan gambar Bukti Pembayaran berhasil disimpan\n";
$query="update `databelanjaanpioner` set foto_bukti_bayar='".$Namafile."' where dataidbelanjaan='".$gettepmid."'";
@compresszz($tjngmbr, $tjngmbr, 45,500,0);
@queryuniverse($query);
}
else
{$messagings=$messagings." tapi gambar Bukti Pembayaran gagal disimpan\n";}
}
else
{$messagings=$messagings." tapi Gambarnya Tidak diterima oleh sistem informasi kami karena bukan berformat jpg \n";}
};
}
else
{

if($runonmobile=="mobile")
{ $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{
$messagings=$messagings."|-|".$gettepmid;
}
}

};

};
}
}
else
{$messagings="Proses Gagal, Tidak ada Data untuk disimpan";}
die($messagings);
break;

case "resendemailverifi":
if (!empty($_REQUEST["whatnext"]))
{ echo @loaddoverifikasimail(@$_REQUEST["whatnext"]); }
die();
break;

case "dorenom":
if ((!empty($_REQUEST["angkarupiah"]))&&(intval($_REQUEST["angkarupiah"])>0))
{ $angkarupiah=intval($_REQUEST["angkarupiah"]);
echo @renominalvalues($angkarupiah);
}
else
{echo "0";}
die();
break;

case "dorecheckusername":
if (!empty($_REQUEST["angkarupiah"]))
{ $angkarupiah=$_REQUEST["angkarupiah"];
$isloggin="";
if (!empty($deweedysaghakey1))
{$isloggin=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"username");}

if ($isloggin!=$angkarupiah)
{
if (@lihatisikolomtertentu("data_pioneerweb","username",@$angkarupiah,"username")!="")
{echo "Username : ".$angkarupiah." sudah ada, silahkan diubah";}

}

}
else
{echo "";}
die();
break;

case "loaddata2pro":
if (empty($_REQUEST["nextclue"]))
{die();}
$datasample1=$datasample2=$dipilihnyabulan=$dipilihnyabulan2="";
if ((empty($_REQUEST["loadid"]))||(empty($_REQUEST["loadfor"])))
{
if ((@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor")&&((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="representative")))&&(@$_REQUEST["nextclue"]=="dataproduk"))
{die("");}
}
else
{

$datasample1=@$_REQUEST["loadid"];$datasample2=@$_REQUEST["loadfor"];
if (!empty($_REQUEST["selectedmonth"]))
{$dipilihnyabulan=@expimpd(@$_REQUEST["selectedmonth"],"-","","1x");$dipilihnyabulan2=@expimpd(@$_REQUEST["selectedmonth"],"-","","0x");}
else
{$dipilihnyabulan=date("m");$dipilihnyabulan2=date("Y");};
$dipilihnyabulan=$dipilihnyabulan2."-".$dipilihnyabulan;

}
?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>

<i title='Reload' class='caleveact fas fa-recycle' style='cursor:pointer;padding:9px !important;'  onclick="<?php echo ($datasample1===""?"doloadallmember();":"muatdescnya('".$datasample1."','".$datasample2."','".$dipilihnyabulan."')"); ?>"></i>

<?php
  if (@$_REQUEST["nextclue"]=="dataproduk")
{ ?> <i title='tambah data' class='caleve fas fa-plus' style='cursor:pointer;padding:9px !important;' onclick="doloadeachmember('-');"></i>
<?php if (@intval(queryuniverse("select * from mediaeo","num"))>0) { ?>
  <script>
function executedown() {
if (jQuery("#classmild").val()=="-")
{jQuery("#finaldestinations").removeAttr("href");return false;}
jQuery("#finaldestinations").attr("href","<?php echo $lokasiweb; ?>pdfkeun/downdatapro.php?vxendore="+jQuery("#classmild").val()+"&dengansiapah="+jQuery("#marlboro").val());
}
function  openorclosedownpdf() {
if (jQuery("#boxforprinterpdf").css("display")=="none")
  {jQuery("#boxforprinterpdf").show("slow");}
else
  {jQuery("#boxforprinterpdf").hide("slow");}
}  
  </script>

<i title='Download PDF' class='calactdanger fas fa-download' style='cursor:pointer;padding:9px !important;display: none;' onclick="openorclosedownpdf();"></i>

<div id="boxforprinterpdf" style="width:98%;margin:8px auto; display: none;">
representative: <select class="deweedycustom validate[required]" id="classmild" onchange="executedown();">
<option value="-">Pilih representative</option>
<?php
$querysql="select * from data_pioneerweb where level_akun!='donor' ";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ echo '<option value="'.$tampilkanperkolomdata["dataidutama_pioneer"].'">'.$tampilkanperkolomdata["nama_lengkap_pioneer"].'</option>'; }
}
?>
<option value="superuser">Super Admin</option>
</select> Tagline: <select class="deweedycustom validate[required]" id="marlboro" onchange="executedown();">
<option value="all">Seluruh Kategori</option>
<?php 
for ($iloop=0;$iloop<count($dataofcats);$iloop++)
{ echo '<option value="'.$dataofcats[$iloop].'">'.expimpd($dataofcats[$iloop],"-"," ").'</option>'; }
?>
</select>
<div id="domboxforpdf" style="display: none;"></div>
<a href="" id="finaldestinations" target="_blank"><i title='Download PDF' class='calactdanger fas fa-download' style='cursor:pointer;padding:9px !important;'></i></a>
</div>

<?php };
}
else
{ if ((@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="donor"))
{ if (($datasample1!="")&&($datasample2!=""))
{echo "<input type=\"button\" class=\"calact\" onclick=\"doloadallmember('".$dipilihnyabulan."');\" value=\"Reload All Pioneer\"/> <input type=\"button\" class=\"caleve\" onclick=\"milihdong('".$datasample1."','".$dipilihnyabulan."');\" value=\"Reload This Pioneer\"/>".'<div style="padding:8px;width: 100%;border-top:1px solid #cacaca;margin-top:8px;"><span style="float:right;">Status Pembayaran: '.@expimpd($datasample2,"-"," ").'</span>Nama Pioneer: '.@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$datasample1,"nama_lengkap_pioneer").'</div>';}
}
else
{
if (@$_REQUEST["aksesdari"]!="produkku")
{echo "<input type=\"button\" class=\"calact\" onclick=\"doloadallmember('".$dipilihnyabulan."');\" value=\"Reload All Status\"/>";}

}; } ?><br/>

<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
<?php
$querysql="";
if (@$_REQUEST["nextclue"]=="dataproduk")
{ $colspander="8"; ?>
        <th width="1px">no</th>         <th width="50%">Nama Kegiatan</th>         <th width="25%" class="extrasetfordatatables">Tagline</th> <th width="25%" class="extrasetfordatatables">Sub Tagline</th>         <th width="1px" class="extrasetfordatatables">Kegiatan<br/>dimulai</th><th width="1px" class="extrasetfordatatables">Waktu Pengumpulan<br/>Donasi</th>     <?php echo @(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="representative"?"":'<th width="35%">Nama Penyelenggara</th>'); ?>         <th width="7%">aksi</th> 
<?php
}
else
  { $colspander="7"; ?>
        <th width="1px">No</th>         
        <?php 
        if (($datasample1=="")||($datasample2==""))
        { if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5)||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative"))) {$colspander="8"; echo '<th width="50%">Nama Donatur</th>';  }
        else
        {$querysql=" where dataidutama_pioneer='".@$deweedysaghakey1."' "; };
        }
        else
        {$colspander="6";} ?>
                         <th width="60%">Untuk Donasi</th>         <th width="35%">Detail Donasi</th>              <th width="7%">aksi</th> 
<?php
}

?>
</tr>
    </thead>
    <tbody>
<?php
if (@$_REQUEST["nextclue"]=="dataproduk")
{
if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative")
{$querysql=" where coresupplyby='".@$deweedysaghakey1."' ";}
else if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")
{$querysql=" where coresupplyby!='superuser' ";}
$querysql="select * from mediaeo ".$querysql." order by waktuupdate desc";
}
else
{$querysql="select * from databelanjaanpioner ".@$querysql." order by tanggal_donasi desc";
$querysql=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="representative"?"select a.coresupplyby,b.* from mediaeo a join databelanjaanpioner b ON b.yang_dibeli LIKE CONCAT('%|*|', a.kodeventz ,'%') where a.coresupplyby = '".@$deweedysaghakey1."' or b.dataidutama_pioneer='".@$deweedysaghakey1."' group by b.dataidbelanjaan order by b.dataidbelanjaan asc ":$querysql);}
$urutkan=0;

if (@$_REQUEST["nextclue"]!="dataproduk")
{

if (@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="kasir")
{ if (($datasample1!="")&&($datasample2!=""))
{$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$datasample1."' and status_pembayaran='".@$datasample2."' and tanggal_donasi like '%".$dipilihnyabulan."-%' order by tanggal_donasi desc ";}
}
else
{$querysql="select * from databelanjaanpioner order by tanggal_donasi desc ";}

}

$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
  if (@$_REQUEST["nextclue"]=="dataproduk")
{ $getnamarepresentative=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["coresupplyby"],"nama_lengkap_pioneer");
$getnamarepresentative=($getnamarepresentative===""?"Super User":$getnamarepresentative);
?>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>         
    <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["kodeventz"]; ?>"><?php echo $tampilkanperkolomdata["namaeventz"]; ?></td>
                 <td width="25%" class="extrasetfordatatables"><?php echo @ucwords(@expimpd(@expimpd($tampilkanperkolomdata["taglineeventz"],"||","","0x"),"-"," ")); ?></td> 
                 <td width="25%" class="extrasetfordatatables"><?php echo @ucwords(@expimpd(@expimpd($tampilkanperkolomdata["taglineeventz"],"||","","1x"),"-"," ")); ?></td>         
                 <td width="1px" class="extrasetfordatatables"><?php echo @date("d F Y",@strtotime($tampilkanperkolomdata["waktueventz"])); ?></td>
                 <td width="3px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["durasievent"]; ?></td>         
                 <?php echo @(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")==="representative"?"":'<td width="35%">'.@$getnamarepresentative."</td>"); ?>         
                <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["kodeventz"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["kodeventz"]."');\"></i>"; ?></td>
      </tr>

<?php
}
else
{ $getidnya=$tampilkanperkolomdata["dataidbelanjaan"]; $cekstatusbayar=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"status_pembayaran");
    $apayangdibeli=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"yang_dibeli");
$jumlahbaru=$alltotalonpi=$alltotalonrp=$xlop=0;
$loadnamapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$tampilkanperkolomdata["dataidutama_pioneer"],"nama_lengkap_pioneer");
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?> <span style="display: none;" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidbelanjaan"]; ?>">Data Donasi dilist nomor urut <?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?> dengan nama pioneer: <?php echo $loadnamapioneer; ?></span></td>
        <?php if (($datasample1=="")||($datasample2==""))
          { if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5)||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative"))) { ?>
        <td width="50%"><?php echo $loadnamapioneer; ?></td>
      <?php }; }; ?>

        <td width="60%"><?php  echo @lihatisikolomtertentu("mediaeo","kodeventz",@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"id_event"),"namaeventz"); ?></td>
        <td width="35%">Jumlah Donasi: <?php $gettipedonatz=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"tipedonate"); $getbanyakdonatz=@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"jumlahdlmrp"); echo ($gettipedonatz==="picoins"?@dohitunganpi($getbanyakdonatz)." Pi":"Rp.".@renominalvalues($getbanyakdonatz)); ?><br/>
        Waktu Donasi: <?php echo @date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"tanggal_donasi"))); ?>
        <br/>Status Pembayaran: <?php echo @ucwords(@expimpd(@$cekstatusbayar,"-"," ")); ?>
        <br/><?php echo (@$cekstatusbayar==="lunas"?"Waktu Konfirmasi Pembayaran: ".@date("d F Y H:i:s",@strtotime(@lihatisikolomtertentu("databelanjaanpioner","dataidbelanjaan",@$getidnya,"tanggal_konfirmasi_pembayaran"))):""); ?></td>
        <td width="7%"><?php echo (((@$cekstatusbayar==="lunas")&&(@$colspander==="7"))?"":"<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>")." <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>"."<br/> <i title='Lihat QR' class='fas fa-magic' style='cursor:pointer;' onclick=\"showtheqr('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i> <a style='color:#656871;' href='".$lokasiweb."pdfkeun/?databelanjanya=".$tampilkanperkolomdata["dataidbelanjaan"]."' target='_blank'> <i title='Download PDF' class='fas fa-download' style='cursor:pointer;'></i></a><br/> <a style='color:#656871;' href='".$lokasiweb."cetakreseprp.php?databelanjanya=".$tampilkanperkolomdata["dataidbelanjaan"]."' target='_blank'> <i title='cetak struk dalam rupiah' class='fas fa-print' style='cursor:pointer;'></i></a> <a style='color:#656871;position:absolute;margin:3.5px 0 0 4.5px;' href='".$lokasiweb."cetakresep.php?databelanjanya=".$tampilkanperkolomdata["dataidbelanjaan"]."' target='_blank'> <img src=\"box/pi-coin.png\" style='width:20px !important;height:auto !important;' title='cetak struk dalam pi coin'/></a> <br/> <i title='Kirim Detail Ke Email' class='fas fa-mail-bulk' style='cursor:pointer;' onclick=\"kirimsatuanemail('".$tampilkanperkolomdata["dataidbelanjaan"]."');\"></i>"; ?></td>
      </tr>
<?php
}
};
}
else
{echo '<tr><td colspan="'.$colspander.'">Tidak Ada Data</td></tr>';}

?>

    </tbody>
  </table>
</div>
  <?php
break;
case "loadnextnews":
if ((!empty($_REQUEST["whatnext"]))&&(intval($_REQUEST["whatnext"])>0))
{$querysql="select * from beberkanlisting order by beberkanpostedat desc"; $hitungtotal=intval($_REQUEST["whatnext"]);
$jmltotal=$hitungnext=0;$hitungnext=(intval($_REQUEST["whatnext"])-2);
$jmltotal=queryuniverse($querysql,"num");
$querysql=$querysql." limit ".$hitungtotal.",3"; 
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{
?> 
<?php while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
?><li id='toappended<?php echo $hitungnext; ?>' class="toappended"><a href='<?php echo $lokasiweb; ?>?page=berita&loadcontent=<?php echo @$tampilkanperkolomdata["beberkanurut"]; ?>' data-level='1'>
<div><?php echo @$tampilkanperkolomdata["beberkanjudul"]; ?></div>
</a></li>
<?php $hitungtotal++; $hitungnext++; }; ?>

<script type="text/javascript">
    tempcluecount=<?php echo $hitungtotal; ?>;
</script>
<?php } else {echo "";
}
}
break;


case "loadmemberdataallform":
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="admin"))
{die("");}
?>
<script>
jQuery(document).ready(function(){    
  jQuery('#datatables').dataTable({
    "oLanguage": {
       "sLengthMenu": "Tampilkan _MENU_ data per halaman",
       "sSearch": "Pencarian: ", 
       "sZeroRecords": "Maaf, tidak ada data yang ditemukan",
       "sInfo": "Menampilkan _START_ s/d _END_ dari _TOTAL_ data",
       "sInfoEmpty": "Menampilkan 0 s/d 0 dari 0 data",
       "sInfoFiltered": "(di filter dari _MAX_ total data)",
       "oPaginate": {
        "sFirst": "<<",
        "sLast": ">>", 
        "sPrevious": "<", 
        "sNext": ">"
       }
    },
  "sPaginationType":"full_numbers"
  });
});
</script>
<i title='Reload' class='caleveact fas fa-recycle' style='cursor:pointer;padding:9px !important;'  onclick="doloadallmember();"></i>
<i title='Add New' class='caleve fas fa-plus' style='cursor:pointer;padding:9px !important;'  onclick="doloadeachmember('-');"></i>
<br/>
<div style="padding:8px;width: 99%;overflow: auto;">
<table cellpadding="0" cellspacing="0" class="tabel" id="datatables">
    <thead>
      <tr>
        <th width="1px">no</th>
        <th width="50%">Nama Pioneer</th>
        <th width="25%" class="extrasetfordatatables">Username</th>
        <th width="1px" class="extrasetfordatatables">JK</th>
        <th width="1px" class="extrasetfordatatables">Telp</th>
        <th width="10%" class="extrasetfordatatables">Tipe</th>
        <th width="10%" class="extrasetfordatatables">status</th>
        <th width="7%">aksi</th>
      </tr>
    </thead>
    <tbody>
<?php
$querysql="select * from data_pioneerweb order by dibuatsaat desc";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $urutkan++;
?>
      <tr>
        <td width="1px"><?php echo ($urutkan<10?"0".$urutkan:$urutkan); ?></td>
        <td width="50%" id="namaakunnya<?php echo $tampilkanperkolomdata["dataidutama_pioneer"]; ?>"><?php echo $tampilkanperkolomdata["nama_lengkap_pioneer"]; ?></td>
        <td width="25%" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["username"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["gender_pioneer"]; ?></td>
        <td width="1px" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["nomor_telpon_pioneer"]; ?></td>
        <td width="10%" class="extrasetfordatatables"><?php echo $tampilkanperkolomdata["level_akun"]; ?></td>
        <td width="10%" class="extrasetfordatatables"><?php echo @expimpd($tampilkanperkolomdata["status_pioneer"],"-"," "); ?></td>
        <td width="7%"><?php echo "<span class='small'><i class='fas fa-eraser' style='cursor:pointer;' onclick=\"deleteaccounts('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i> <i class='fas fa-edit' style='cursor:pointer;' onclick=\"doloadeachmember('".$tampilkanperkolomdata["dataidutama_pioneer"]."');\"></i>"; ?></td>
      </tr>

<?php
}
}
else
{echo '<tr><td colspan="8">Tidak Ada Data</td></tr>';}
?>

    </tbody>
  </table>
</div>
  <?php
break;


case "waduhjanganlupa":
$messagings=$gettepmid=$messagingsmail="";
if (!empty($_REQUEST["dests"]))
{
$gettepmid=$_REQUEST["dests"];
$messagingsmail=@loadusrnameforforgot(@$gettepmid);
}
die($messagingsmail);
break;



case "walletopener":
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ ?> <iframe src="pi://wallet.pi" style="width:1% !important;height:1vh !important;opacity: 0;z-index: -1"/></iframe> <?php }
else
{}
die();
break;


case "apiforphoto":
if (empty($_REQUEST["lihat"]))
{die("");}
if (count(explode("**",$_REQUEST["lihat"]))<2)
{die("");}
$forbayar="box/catalogue/".@expimpd($_REQUEST["lihat"],"**","","0x")."/".@lihatdetailproduk(@expimpd($_REQUEST["lihat"],"**","","1x"),"coreid").".jpg";
if (!file_exists($forbayar))
{ $forbayar="box/catalogue/".@lihatdetailproduk($proidx,"taglineeventz")."/".@lihatdetailproduk(@expimpd($_REQUEST["lihat"],"**","","1x"),"kodeventz").".jpg";
if (!file_exists($forbayar))
{ $forbayar="box/piquickresponselogo.png"; }
}
die('<img src="'.$lokasiweb.$forbayar.'" style="width:101% !important;height: auto;"/><br/>');
break;


case "dosomethingunholy":
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5)&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="admin"))
{die("");}
if ((empty($_REQUEST["loadfromdata"]))||((!empty($_REQUEST["loadfromdata"]))&&((@$_REQUEST["loadfromdata"]=="a76abed3772b96cd47deccbc4d937cbc")||(@$_REQUEST["loadfromdata"]==@$deweedysaghakey1))))
{die("");}
$tjngmbr="box/photoexp/".@$_REQUEST["loadfromdata"].".jpg";
if (file_exists($tjngmbr))
{unlink($tjngmbr);}
$namapioneer=@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$_REQUEST["loadfromdata"],"nama_lengkap_pioneer");
$querysql="select * from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";
$urutkan=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{
  if (@$tampilkanperkolomdata["foto_bukti_bayar"]!="")
  {$tjngmbr="box/buktiupbayar/".@$tampilkanperkolomdata["foto_bukti_bayar"];
  if (file_exists($tjngmbr))
  {unlink($tjngmbr);}
  }
}
queryuniverse("delete from databelanjaanpioner where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ");
}
$querysql="delete from data_pioneerweb where dataidutama_pioneer='".@$_REQUEST["loadfromdata"]."' ";

$hasil = queryuniverse($querysql);
$pesannya="";
if ($hasil)
{$pesannya="Berhasil Menghapus data pioneer bernama: ".$namapioneer;}
else
{$pesannya="Gagal Menghapus data pioneer bernama: ".$namapioneer;}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
alert("<?php echo $pesannya; ?>");
doloadallmember();
})
</script>
<?php
die();
break;

case "rotasikanfoto":
if (empty($_REQUEST["loadfromdata"]))
{die();}
$tabletarget="data_pioneerweb";
$loadfromiddata=@$_REQUEST["loadfromdata"];
if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="")
  {die();}

$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{@rotasikan($forbayar, $forbayar, 45 );
?>
<script type="text/javascript">
  jQuery(document).ready(function() {
    jQuery("#fotobooth<?php echo $loadfromiddata; ?>").attr("src","<?php echo $lokasiweb.$forbayar."?anticache=".strtotime($waktusebenernyawib); ?>");
  })
</script>
<?php
}

die();
break;


   case "loadmemberdataformid":
$tabletarget="data_pioneerweb"; $loadfromiddata="";
if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))
{
if ((empty($_REQUEST["loadfromdata"]))||((!empty($_REQUEST["loadfromdata"]))&&(@$_REQUEST["loadfromdata"]=="7de94344c2fd2fb7d57e14a912058064")))
{die("No Data To Show");}
}
if (empty($_REQUEST["loadfromdata"]))
{die("No Data To Show");}
$loadfromiddata=@$_REQUEST["loadfromdata"];

if ((@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="")&&(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer")=="-"))
{die("No Data To Show");};

?>

    <script type="text/javascript">
        <?php $formfrom="datamemberareafile"; ?>
        var donextboxdari<?php echo $formfrom; ?> = "";
        function lakukandaftar() { 

if (donextboxdari<?php echo $formfrom; ?>=="tidakvalid") {
var konfirmasifotoz=confirm("Tidak terdeteksi Wajah di Gambar yang Anda pilih, pastikan foto Anda tidak blur dan posisi wajah terlihat.\n\nApakah Anda ingin melakukan deteksi ulang atau menganti foto Anda ?\n\n");
if (konfirmasifotoz)
  { jQuery("#forfocusuploadulang<?php echo $formfrom; ?>").focus();
    return false;
  }
  else
    {alert("Mungkin nantinya akan berdampak pada legalitas akun Anda, tapi Anda tetap bisa melanjutkan ke proses berikutnya");}
}


if (jQuery("#boxforpassz").val()=="")
jQuery("#boxforpassz").val(jQuery("#oldpassbox").val());
var formData = new FormData(jQuery("#formdaftarindaftar")[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>?docommand=doregnewone&formname=inputandatamemberarea&metoz=formdaftar",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            alert(hasilnya);
            window.location.href='<?php echo $lokasiweb; ?>?page=memberarea';
            return false;
            },
        });

return false;
}
function rotatata(datanya="")
{ if (datanya=="")
{return false;}
jQuery("#dumpboxforfotos").load("<?php echo $lokasiweb; ?>?docommand=rotasikanfoto&loadfromdata="+datanya);
return false;
}


    </script>
<form style="padding: 8px 12px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarindaftar" onsubmit="lakukandaftar(); return false;">
<div class="form-fields">

<div class="contentboxsforall" style="width:100%;min-height: 100px;">
<div class="blocklist">
<table class="forformdata" cellpadding="0" cellspacing="0">
<tr><td>
  <div id="dumpboxforfotos" style="display:none;"></div>

<?php
$welcomeword="";
if ((@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin"))
{$welcomeword="Pioneer";}
else
{$welcomeword="Anda";}
$forbayar="box/photoexp/".@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer").".jpg";
if (($forbayar!="")&&(file_exists($forbayar)))
{ $reqforphoto="";
?>
<img id="fotobooth<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer"); ?>" src="<?php echo $lokasiweb.$forbayar."?anticache=".strtotime($waktusebenernyawib); ?>" style="width: 100% !important;height: auto;margin: 0 auto;"/>
<span class="deweedycustom calactdanger" style="text-align: center;cursor: pointer;" onclick="rotatata('<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"dataidutama_pioneer"); ?>');">rotasi foto</span>
<?php } else {$reqforphoto="required"; echo "Tidak Ada Foto<br/> silahkan upload Foto ".$welcomeword;}; ?>
</td></tr>
<tr><td>

<?php
$verlevel=@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun");

 if (file_exists("saghafotodetection.php"))
{ echo "<div style=\"width:98% !important;position:relative !important;display:block;z-index:3;min-height:0 !important;height:auto !important;\">"; 
$formfrom="datamemberareafile";
require ('saghafotodetection.php');
echo "</div>";
}
else
{ ?> <input type="file" <?php echo $reqforphoto; ?> accept="image/jpeg" class="deweedycustom validate[required]" placeholder="" name="inputandatamemberareafile" > <?php }; ?>

<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $loadfromiddata.($loadfromiddata==="-"?"":"||oldpassbox"); ?>" >
</td></tr>

<tr><td>
<?php $pioneerstaz=@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"status_pioneer"); ?>
<label >Status Akun <?php echo @ucwords(@$pioneerstaz==="unverified"?": <br/>".$welcomeword." Belum Verifikasi E-Mail":($deweedysaghakey1===mengacakstring("mbt2023forall",5)?"":": ".($pioneerstaz==="verified"?"<br/>Email Terverifikasi, dan menunggu Admin melakukan verifikasi level akun Anda karena Anda mendaftar sebagai: ":"Aktif sebagai: ").$verlevel)); ?></label><br/>
<?php 
if (@$deweedysaghakey1!=mengacakstring("mbt2023forall",5))
{ ?>
  
<input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $pioneerstaz; ?>" />
<?php if ($pioneerstaz=="unverified") { ?>
<input type="button" class="dt-btn dt-btn-m pigoldbutton" value="Verifikasi E-Mail" style="width:auto;" onclick="doreverify('<?php echo $loadfromiddata; ?>');return false;" />
<br/>
<br/>
<?php };
}
else
{ if ($pioneerstaz=="unverified") { ?>
<input type="button" class="dt-btn dt-btn-m pigoldbutton" value="Verifikasi E-Mail" style="width:auto;" onclick="doreverify('<?php echo $loadfromiddata; ?>');return false;" />
<br/>
<br/>
<?php };
 ?>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="tidak-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php echo @(@$pioneerstaz==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="verified" <?php echo @(@$pioneerstaz==="verified"?"selected":""); ?>>Email Terverifikasi</option>
    <option value="aktif" <?php echo @(@$pioneerstaz==="aktif"?"selected":""); ?>>Aktif</option>
</select>
<?php }; ?>
</td></tr>

<tr><td>
<label >Username *</label>

    <input type="text"  required id='formusernamefordaftarold' style="display: none;" readonly class="deweedycustom usrofmemberakunold validate[required]" placeholder="Username" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>" maxlength="100"/>


    <input type="text"  required id='formusernamefordaftar' onkeyup="recekusernames('formusernamefordaftar');"  class="deweedycustom usrofmemberakun validate[required]" placeholder="Username" name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>" maxlength="100"/>

    </td></tr>
<tr><td>
<label >Password Untuk Login *</label>

    <input type="password" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="Password Untuk Login" id="oldpassbox" name="oldpassbox" value="<?php echo @@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"password_untuk_login"); ?>" >

    <input type="password" class="deweedycustom validate[required]" placeholder="Kosongkan apabila tidak mau di ganti" id="boxforpassz" name="inputandatamemberarea[]" value="" />
    </td></tr>




</table>
</div>

<div class="blocklistbig">
<table class="forformdata" cellpadding="0" cellspacing="0">
<?php
$iloopform=0; $formsource=@explode("||",@$source1); $sourceukuran=@explode("||",@$sourceukuran1); $setformdisp="";
$iloopformend=@intval(@count($formsource))-2;
if ($formsource!="")
{ for ($iloopform=4;$iloopform<$iloopformend;$iloopform++)
{
if (($iloopform==0)||($iloopform==1))
{$setformdisp=(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")==="admin"?"":'style="display: none;" readonly');}
else
{$setformdisp=' required dochangeattr="form" ';

if (($iloopform>7)&&($iloopform<15))
{$setformdisp=' required dochangeattr="form" forformaddress="form'.$iloopform.'" ';}

}
?>
<tr><td <?php echo $setformdisp; ?>>
<label ><?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> *</label><br/>

<?php
if ($iloopform==6)
{ $setformdispx=(@$pioneerstaz==="unverified"?"":"readonly");    ?>

    <input type="email" <?php echo $setformdispx; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==5)
{    ?>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="pria" >Pria</option>
    <option value="wanita" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform])==="wanita"?"selected":""); ?>>Wanita</option>
</select>
    <?php
}
else if ($iloopform==0)
{    ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")===""?"-":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dataidutama_pioneer")); ?>" >
    <?php
}
else if ($iloopform==3)
{    ?>
    <input type="password" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" >
    <?php
}
else if ($iloopform==1)
{   if ((@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")) { ?>
<div>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="non-aktif" >Tidak Aktif</option>
    <option value="unverified" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="unverified"?"selected":""); ?>>Belum Verifikasi Email</option>
    <option value="aktif" <?php @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")==="aktif"?"selected":""); ?>>Aktif</option>
</select>
</div>
<?php } else { ?>
<input type="text" <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo (@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")===""?"unverified":@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"status_pioneer")); ?>" >
<?php }; 
}
else
{
    $ukuranforms=@intval($sourceukuran[$iloopform]);
    if ($ukuranforms>255)
    {
    ?>
    <textarea <?php echo $setformdisp; ?> class="deweedycustom validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
    <?php
    }
    else
    {
    ?>
    <input type="text" <?php echo $setformdisp." ".($iloopform===2?"id='formusernamefordaftar' "." onkeyup=\"recekusernames('formusernamefordaftar');\" ":""); ?> class="deweedycustom <?php echo @$formsource[$iloopform]."boxesofformmemberarea"; ?> validate[required]" placeholder="<?php echo (@$formsource[$iloopform]==="id_wallet"?"Id Wallet yang Testnet Milik Anda":(((@count(@explode("rt",@$formsource[$iloopform]))>1)||(@count(@explode("rw",@$formsource[$iloopform]))>1))?"Nomor ".@ucwords(@expimpd(substr($formsource[$iloopform],7),"_"," ")):@ucwords(@expimpd($formsource[$iloopform],"_"," ")))); ?> " name="inputandatamemberarea[]" value="<?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?>" maxlength="<?php echo $ukuranforms; ?>">
    <?php
    }
}

?>
</td></tr>
<?php
}
}
?>
<?php if ((@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))||(@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$deweedysaghakey1,"level_akun")=="admin")) { ?>
<tr><td <?php echo @$setformdisp; ?>>
<label ><?php echo @ucwords(@expimpd($formsource[$iloopform],"_"," "));?> *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="donor" >Donatur</option>
    <option value="representative" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="representative"?"selected":""); ?>>representative</option>
    <option value="volunteer" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="volunteer"?"selected":""); ?>>Volunteer</option>
    <option value="admin" <?php echo @(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"level_akun")==="admin"?"selected":""); ?>>Admin</option>
</select>
</td></tr>
<?php
if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"level_akun")!="") { ?>
<tr><td <?php echo @$setformdisp; ?>>
<label >Waktu Update : <?php echo @date("d F Y - H:i:s",strtotime(@lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,"dibuatsaat")));?> *</label><br/><br/>
</td></tr>
<?php }; ?>
<?php } else { ?>

<tr><td>
<?php if ($pioneerstaz=="verified") { ?>
<label >Mendaftar Sebagai *</label><br/>
<select class="deweedycustom validate[required]" name="inputandatamemberarea[]">
        <option value="donor" >Donatur</option>
    <option value="representative" <?php echo @(@$verlevel==="representative"?"selected":""); ?>>Representative</option>
    <option value="volunteer" <?php echo @(@$verlevel==="volunteer"?"selected":""); ?>>Volunteer</option>
</select>

 <?php }
else
  { ?> <?php }
 ?>
<label >Terdaftar Sebagai *</label><br/>
  <input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo @$verlevel; ?>" >
</td></tr>
<?php } ?>

<tr><td><input type="text" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="" name="inputandatamemberarea[]" value="<?php echo $waktusebenernyawib; ?>" >
<input type="submit" class="dt-btn dt-btn-m caleveact" value="simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <?php
if (@$deweedysaghakey1==mengacakstring("zuperadmin4piqr",5))
{ ?> <input type="button" class="dt-btn dt-btn-m calactdanger" onclick="doloadallmember();" value="kembali" style="width:auto;"/> <?php };
?>
</td></tr>
</table>
</div>

</div>

</div>

<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ if (((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="representative")||(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="donor"))||((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")=="admin")&&(@$deweedysaghakey1==$loadfromiddata)))
{ ?>
<script type="text/javascript">
const Pixedits = window.Pi;
jQuery(document).ready(function() {

        Pixedits.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pixedits.authenticate(t, onIncompletePaymentFound).then(function(auth){
         globalusernamesz=auth.user.username;
          jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+globalusernamesz, function(data){
          
          if (data!="")
          {
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })

if ((globalusernamesztukformdaftar!="")&&(globalusernamesztukformdaftar!="<?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>"))
{
var konfirmasi=confirm("Username yang tersimpan di akun Anda adalah: <?php echo @lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",$loadfromiddata,"username"); ?>\n\nsementara akun di pi-browser Anda: "+globalusernamesztukformdaftar+"\n\nApakah Anda ingin mengantinya menjadi yang terdaftar di Pi-Network?");
if (konfirmasi)
  { jQuery(".usrofmemberakun").val(globalusernamesztukformdaftar); }
}

        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });


})
</script>
<?php }; }; ?>


<div class="pemetaankoordinat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklat validate[required]" placeholder="" name="dampaklat">
<input type="text" style="display: none;" readonly class="deweedycustom dampaklong validate[required]" placeholder="" name="dampaklong">
<?php if (@$deweedysaghakey1==$loadfromiddata) { ?>
<input type="button" class="dt-btn dt-btn-m calactdanger" value="Kota / Kabupaten dan Kode Pos sesuai Peta" style="width:auto;" onclick="aturulangkodepos('.kode_pos_domisiliboxesofformmemberarea','.alamat_kota_domisiliboxesofformmemberarea');" />
<br/><br/>
<label>Titik Lokasi Anda Saat ini di Peta</label><br/>
<iframe id="justeditfrommember" scrolling="no" frameborder="0" style="width:98vw !important;background: transparent !important;" oncontextmenu="return false;" /></iframe>
<script type="text/javascript">
 var lattenyaeditsfromareamember="";
function buatdataeditsfromareamemberkodepos() {
if (latz!="") {    
if (jQuery(".kode_pos_domisiliboxesofformmemberarea").val()=="")
{jQuery(".kode_pos_domisiliboxesofformmemberarea").val(kodezpecahan);}
if (jQuery(".alamat_kota_domisiliboxesofformmemberarea").val()=="")
{jQuery(".alamat_kota_domisiliboxesofformmemberarea").val(kitishippecahan);}
if ((lattenyaeditsfromareamember=="")||(lattenyaeditsfromareamember!=latz))
{jQuery("#justeditfrommember").attr("src","<?php echo $lokasiweb; ?>buatbuatin.php?dimanatuh=" + latz + "||" + longz+"&fromframes=justeditfrommember");
jQuery(".dampaklat").val(latz); jQuery(".dampaklong").val(longz);
lattenyaeditsfromareamember=latz;
jQuery(".pemetaankoordinat").show();
}
}
else
{ jQuery(".pemetaankoordinat").hide(); }
setTimeout("buatdataeditsfromareamemberkodepos()", 1000);
}
 jQuery(document).ready(function(){
buatdataeditsfromareamemberkodepos();
 })   
</script>
<?php }; ?>
</div>

</form>
<?php
break;

  default:
        //selain yang diatas
      die("");
     break;
}
?>
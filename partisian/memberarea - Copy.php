<?php
if (empty($namawebsite))
{die();}
?>
<?php if (empty($_SESSION['logsessionforargyamedpro']))
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>login.html';
})
</script>
	<?php };
if ($_SESSION['logsessionforargyamedpro']==mengacakstring("piqr2023forhumanbeing",5))
{ ?>

<div style='text-align:center;width:100%;display: none;' id="kotakkops"><img src="<?php echo $lokasiweb; ?>box/piquickresponse.png" style='width:94%;'/></div>
<div class="areapercetakan" style="display: none;"></div>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Member Area</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container" style="margin-left: -30px !important;width: 81vw !important">


<div class="vc_row-full-width vc_clearfix"></div>
<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner vc_custom_1490689853022"><div class="wpb_wrapper" style="margin-left:-27px;width: 82vw;">

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper">
<div style="width:100%;margin-top:-36px;">
<script>
  function lakukanpengelihatan(dataids="",printmode="") {
if (dataids=="")
  {return false;}
            jQuery.get("<?php echo $lokasiweb; ?>?docommand=dicetakulangbro&targetload="+dataids, function(data){
            if (data=="")
            {alert("Proses Gagal, silahkan di ulangi");return false;} 
            data=data.split("|-|");
            if (data[0]=="erroronsave") //pesan error saat login
            {alert(data[1]);
            return false;}
            jQuery(".areamuatdata").html(data[0]);
            jQuery("#kotakhasilpilih").hide();
            jQuery(".areamuatdata").show();
            return false;
        });
}
function reviewdatadaftar(printmode="")
{jQuery("#kotakhasilpilih").show(); jQuery(".areapercetakan").html("");jQuery(".areamuatdata").html("");
            jQuery(".areamuatdata").hide();
if (printmode!="")
{jQuery(".areapercetakan").load("<?php echo $lokasiweb; ?>?docommand=tampilkandatadaftar&targetload="+jQuery("#dataselectorformember").val()+"&printend="+printmode);
jQuery(".areapercetakan").html("");}
else
{jQuery("#kotakhasilpilih").load("<?php echo $lokasiweb; ?>?docommand=tampilkandatadaftar&targetload="+jQuery("#dataselectorformember").val());}
}
function formcaricari(cariapa="")
{ if (cariapa=="")
{return false;} jQuery(".areapercetakan").html("");
if (jQuery("#boxcari"+cariapa).css("display")=="none")
{jQuery("#boxcari"+cariapa).show();}
else
{jQuery("#boxcari"+cariapa).hide();}
}
function muatsemua(cariapa="")
{ if (cariapa=="")
{return false;} jQuery(".areapercetakan").html("");jQuery(".areamuatdata").html("");
jQuery.get("<?php echo $lokasiweb; ?>?docommand=tampilkandatadaftar&targetload="+jQuery("#dataselectorformember").val()+"&printend=mencari&reloadall="+cariapa, function(data){
jQuery("#boxresult"+cariapa).html(data);
  })
jQuery("#boxcari"+cariapa).hide();
}
function cariindong(cariapa="")
{ if (cariapa=="")
{return false;} jQuery(".areapercetakan").html("");jQuery(".areamuatdata").html("");
jQuery.post('<?php echo $lokasiweb; ?>?docommand=tampilkandatadaftar&targetload='+jQuery("#dataselectorformember").val()+'&printend=mencari&formname=inputandata',jQuery("#formcari"+cariapa).serialize(), function(data){
            jQuery(".areamuatdata").hide();
            jQuery(".areamuatdata").html("");
            jQuery("#boxresult"+cariapa).html(data);
            jQuery("#kotakhasilpilih").show();
            
return false;
})

return false;
}
</script>
<div style="width:100%;text-align: right;"><a href="<?php echo $lokasiweb; ?>?metode=logout"><input type="button" class="calactdanger" value="Log Out" style="width:auto;"/></a></div><br/> 
Event: <select id="dataselectorformember" onchange="reviewdatadaftar();" style="width:95%;">
<?php 
$cekquerysql="select * from mediaeo order by waktueventz desc";
$cekhasil = queryuniverse($cekquerysql);
$cekjml=queryuniverse($cekquerysql,"num");
if (($cekhasil)&&($cekjml))
{while($cektampil=mysqli_fetch_array($cekhasil))
{ echo "<option value='".$cektampil["kodeventz"]."'>".$cektampil["namaeventz"]."</option>"; };}
else
{echo "<option value=''>Tidak Ada Event</option>";}
?>
</select>
<div style="width:100%;"><input type="button" class="calact" onclick="reviewdatadaftar();" value="Reload Data" style="width:auto;"/> <input type="button" class="caleveact" onclick="reviewdatadaftar('cetakin');" value="Cetak Seluruh Data" style="width:auto;"/></div> 
<script>
jQuery(document).ready(function(){
  reviewdatadaftar();
})
</script>
</div>
<div class="areamuatdata" style="display: none;"></div>
<div style="width:100%;margin-top: 35px;" id="kotakhasilpilih"></div>
</div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>



</div></div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>

</div>
</div>
</div>
</div>
</div>
</section>

<?php
}
else
{
   ?>
<div style='text-align:center;width:100%;display: none;' id="kotakkops"><img src="<?php echo $lokasiweb; ?>box/piquickresponse.png" style='width:94%;'/></div>
<div class="areapercetakan" style="display: none;"></div>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Member Area</h2>
<br/><br/>

<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 100% !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container" style="margin-left: -30px !important;width: 81vw !important">

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1490689853022"><div class="wpb_wrapper" style="margin-left:-27px;width: 82vw;">

<script>
function lakukanpercetakan(dataids="") {
if (dataids=="")
  {return false;}
            jQuery.get("<?php echo $lokasiweb; ?>?docommand=dicetakulangbro&apanya="+dataids, function(data){
            if (data=="")
            {alert("Proses Gagal, silahkan di ulangi");return false;} 
            data=data.split("|-|");
            if (data[0]=="erroronsave") //pesan error saat login
            {alert(data[1]);
            return false;}
            jQuery(".areapercetakan").html(data[0]);
            return false;
        });
}
var cekdataparametercek1 = ""; var cekdataparametercek2 = "";
function ceksebelumnya(pakealert="") {
  if (isNaN(jQuery("#parametercek1").val()))
    {alert("Nomor Telp dengan Angka");jQuery("#parametercek1").val("");jQuery("#parametercek1").focus();return false;}
cekdataparametercek1=getdetectforinvalidsymb(jQuery("#parametercek1").val()); jQuery("#parametercek1").val(cekdataparametercek1);
cekdataparametercek2=getdetectforinvalidsymb(jQuery("#parametercek2").val()); jQuery("#parametercek2").val(cekdataparametercek2);
jQuery.get('<?php echo $lokasiweb; ?>?docommand=cekakun&pilihantujuan=cektelp&kodereg='+jQuery("#parametercek0").val()+'&loaddataid='+jQuery("#negarawan").val()+"**"+cekdataparametercek1, function(data){
            if (data!="")
            { if (pakealert!="tanpa")
              {alert("No Telp Sudah terdaftar, silahkan Anda melakukan login atau menganti nomor telp Pendaftar yang baru");}
          jQuery("#parametercek1").val("");jQuery("#parametercek1").focus();return false;} })
jQuery.get('<?php echo $lokasiweb; ?>?docommand=cekakun&pilihantujuan=cekemail&kodereg='+jQuery("#parametercek0").val()+'&loaddataid='+cekdataparametercek2, function(data){
            if (data!="")
            {if (pakealert!="tanpa")
              {alert("Email Sudah terdaftar, silahkan Anda melakukan login atau menganti email Pendaftar yang baru");}
              jQuery("#parametercek2").val("");jQuery("#parametercek2").focus();return false;} })
}
function simpanpendaftaran() {
ceksebelumnya("tanpa");
jQuery("#savernomer").val(jQuery("#negarawan").val()+"**"+cekdataparametercek1);
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=diupdatebro&formname=inputandata',jQuery("#formdaftarin").serialize(), function(data){
            if (data=="")
            {alert("Proses Gagal, silahkan di ulangi");return false;} 
            data=data.split("|-|");
            if (data[0]=="erroronsave") //pesan error saat login
            {alert(data[1]);
            return false;}
            alert(data[0]);
            window.location.href='<?php echo $lokasiweb; ?>memberarea.html';
            return false;
        });
return false;
}
</script>
<?php if (!empty($_SESSION['logsessionforargyamedpro']))
{ $cekquerysql="select * from pendaftareo where kodpendaftareo='".@$_SESSION['logsessionforargyamedpro']."' and notelpendaftareo='".@$_SESSION['logsessionforargyamedpropasswd']."' and emailpendaftareo='".@$_SESSION['logsessionforargyamedprorole']."' ";
$cekhasil = queryuniverse($cekquerysql);
$cekjml=queryuniverse($cekquerysql,"num");
if (($cekhasil)&&($cekjml))
{while($cektampil=mysqli_fetch_array($cekhasil))
{$datauserlogin=@$_SESSION['logsessionforargyamedpro']."|-||-|".$cektampil["namapendaftareo"]."|-|".$cektampil["jenispendaftareo"]."|-|".$cektampil["notelpendaftareo"]."|-|".$cektampil["emailpendaftareo"]."|-||-||-|";};}
else
{$datauserlogin="|-||-||-||-||-||-||-||-|";} }
else
{$datauserlogin="|-||-||-||-||-||-||-||-|";};
$datauserlogin=explode("|-|",$datauserlogin); 
$tanggaltujuan=@lihatisikolomtertentu("pendaftareo","kodpendaftareo",@$_SESSION['logsessionforargyamedpro'],"waktudaftar");
?>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarin" onsubmit="simpanpendaftaran(); return false;">
<div class="form-fields">
<input type="text" name="inputandata[]" value="<?php echo @$datauserlogin[0]; ?>"  id="parametercek0" style="width:100%;display: none;" readonly/>

<label >Nama Pendaftar *</label><br/><input type="text" class="deweedycustom validate[required]" placeholder="Nama Pendaftar *" name="inputandata[]" value="<?php echo @$datauserlogin[2]; ?>" required maxlength="100"> <br/>
<label >Jenis Kelamin *</label><br/><select class="deweedycustom validate[required]" name="inputandata[]" value="" required><option value="Pria">Pria</option><option value="Wanita"<?php echo (@$datauserlogin[3]==="Wanita"?" selected":""); ?>>Wanita</option></select> <br/>
<label >Negara *</label><br/><select class="deweedycustom validate[required]" id="negarawan" value="" required>
<?php $ceknegaraquerysql="select * from kenegaraan order by kodkenegaraan asc";
$ceknegarahasil = queryuniverse($ceknegaraquerysql);
$ceknegarajml=queryuniverse($ceknegaraquerysql,"num");
if (($ceknegarahasil)&&($ceknegarajml))
{while($ceknegaratampil=mysqli_fetch_array($ceknegarahasil))
{ echo "<option value=\"".$ceknegaratampil["telnegara"]."\"".((($ceknegaratampil["telnegara"]==="62")||($ceknegaratampil["telnegara"]===@expimpd($datauserlogin[4],"**","","0x")))?" selected":"").">".$ceknegaratampil["namakenegaraan"]." +".$ceknegaratampil["telnegara"]."</option>";}
}
else
{echo "<option value=''>Tidak Ada Data Negara</option>";}
?>
</select>
<br/>
<label >No Telp Pendaftar *</label><br/><input type="text" id="savernomer" style="display: none;" readonly class="deweedycustom validate[required]" placeholder="No Telp: contoh 81234567890 *" name="inputandata[]" value="<?php echo @expimpd($datauserlogin[4],"**","","1x"); ?>" maxlength="15">
<input type="text" id="parametercek1" onkeyup="ceksebelumnya();" class="deweedycustom validate[required]" placeholder="No Telp: contoh 81234567890 *" value="<?php echo @expimpd($datauserlogin[4],"**","","1x"); ?>" required maxlength="15"> <br/>
<label >Email Pendaftar *</label><br/><input type="email" id="parametercek2" onkeyup="ceksebelumnya();" class="deweedycustom validate[required]" placeholder="Email Pendaftar *" name="inputandata[]" value="<?php echo @$datauserlogin[5]; ?>" required maxlength="234"> <br/>
<label >Waktu Mendaftar *</label><br/><input type="text" class="deweedycustom validate[required]" value="<?php echo date("d",strtotime($tanggaltujuan))." ".monthtobulan(date("m",strtotime($tanggaltujuan)))." ".date("Y - H:i:s",strtotime($tanggaltujuan)); ?>" readonly maxlength="234"> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Simpan" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>  <a href="<?php echo $lokasiweb; ?>?metode=logout"><input type="button" class="calactdanger" value="Log Out" style="width:auto;"/></a> 
</div>
</form>


</div>
</div>
</div>


<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1490689857636"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid">

  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style="width:100%;text-align: center;">Anda Mendaftar</h3>
</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner vc_custom_1490689869709"><div class="wpb_wrapper"><style type="text/css" data-type="the7_shortcodes-inline-css">.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a { width: 22px; height: 80px; border-radius: 0px; } .dt-arrow-border-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover):before { border-width: 0px; } .dt-arrow-hover-border-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover:after { border-width: 0px; } .arrows-hover-bg-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:after { background: #f4a215; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev { top: 50%; transform: translateY(calc(-50% + 0px)); left: 0px; } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev { transform: translateY(-50%); margin-top: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev i { padding: 0px 0px 0px 0px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next { top: 50%; transform: translateY(calc(-50% + 0px)); right: 0px; } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next { transform: translateY(-50%); margin-top: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next i { padding: 0px 0px 0px 0px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav i { font-size: 18px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover) i, .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover) i:before { color: #ffffff; background: none; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover i, .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover i:before { color: #ffffff; background: none; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dots { top: calc(100% + 20px); left: 50%; transform: translateX(calc(-50% + 0px)); } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dots { transform: translateX(-50%); margin-left: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dot { width: 10px; height: 10px; margin: 0 8px; } @media screen and (max-width: 778px) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.hide-arrows .owl-nav a { display: none; } } @media screen and (max-width: 778px) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-prev { top: 50%; transform: translateY(calc(-50% + 0px)); left: 10px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-next { top: 50%; transform: translateY(calc(-50% + 0px)); right: 10px; } } @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-prev { transform: translateY(-50%); margin-top: 0px; } } @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-next { transform: translateY(-50%); margin-top: 0px; } }</style>
	<div class="owl-carousel carousel-shortcode dt-owl-carousel-call carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a bullets-small-dot-stroke arrows-bg-on dt-arrow-border-on dt-arrow-hover-border-on arrows-hover-bg-on  " data-scroll-mode="1" data-col-num="1" data-wide-col-num="1" data-laptop-col="1" data-h-tablet-columns-num="1" data-v-tablet-columns-num="1" data-phone-columns-num="1" data-auto-height="true" data-col-gap="50" data-stage-padding="0" data-speed="600" data-autoplay="false" data-autoplay_speed="6000" data-arrows="true" data-bullet="false" data-next-icon="icon-ar-017-r" data-prev-icon="icon-ar-017-l">
		
<?php  $hitungtotal=0; $tipedievent=explode("||","stand||lomba");
for ($looptipe=0;$looptipe<count($tipedievent);$looptipe++)
{
$querysql="select * from regis".$tipedievent[$looptipe]." where kodpendaftareo='".@$_SESSION['logsessionforargyamedpro']."' order by waktudaftar desc";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ 
$hitungtotal++;
 ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1495183198252 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">
  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-leaf"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php echo lihatisikolomtertentu("mediaeo","kodeventz",$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"namaeventz"); ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-pencil"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php $tanggaltujuan=dapatkantanggaltujuan(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"waktueventz"),lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"durasievent"));
  echo date("d",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"waktueventz")))." ".monthtobulan(date("m",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"waktueventz"))))." ";
  if (date("Y",strtotime($tanggaltujuan))!=date("Y",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"waktueventz"))))
    {echo date("Y",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]],"waktueventz")))." - ";}
    else
    {echo " - ";}
  echo date("d",strtotime($tanggaltujuan))." ".monthtobulan(date("m",strtotime($tanggaltujuan)))." ".date("Y",strtotime($tanggaltujuan)); ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-briefcase"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style="">Mendaftar <?php echo ucwords($tipedievent[$looptipe]).": ".lihatisikolomtertentu($tipedievent[$looptipe]."eo","kod".$tipedievent[$looptipe]."eo",$tampilkanperkolomdata["kod".$tipedievent[$looptipe]."eo"],"nama".$tipedievent[$looptipe]."eo"); ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>


  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
  <?php echo (@$tampilkanperkolomdata["statuesregis"]==="unverify"?"<input type=\"button\" class=\"calactdanger\" value=\"Kirim Ulang verifikasi\" style=\"width:auto;margin-right:13px;\"  onclick=\"lakukanpercetakan('".@$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]]."**".$tipedievent[$looptipe]."**".@$tampilkanperkolomdata["kod".$tipedievent[$looptipe]."eo"]."&domailing=emailing')\"/>":""); ?> 
<input type="button" class="calactdanger" value="print" style="width:<?php echo (@$tampilkanperkolomdata["statuesregis"]==="unverify"?"auto":"100%"); ?>;"  onclick="lakukanpercetakan('<?php echo @$tampilkanperkolomdata["kodregis".$tipedievent[$looptipe]]."**".$tipedievent[$looptipe]."**".@$tampilkanperkolomdata["kod".$tipedievent[$looptipe]."eo"]; ?>')"/>


</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>


</div>
</div></div>
</div>
<?php }; }
};
if ($hitungtotal<1)
{ ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1495183198252 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="shortcode-single-image-wrap alignnone  vc_custom_1530533940841"><div class="shortcode-single-image"><div class="fancy-media-wrap  layzr-bg" ><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20150%20150&#39;%2F%3E" data-src="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?>" data-srcset="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 150w, <?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 300w" width="150" height="150" alt="" /></div>
</div>
</div>
<div id="ultimate-heading-66835dd836beb52b7" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-66835dd836beb52b7 uvc-7815 color-title" data-hspacer="no_spacer" data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div>
<div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-66835dd836beb52b7 h2' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'><h2 style="font-weight:bold;">Anda Tidak Mendaftar Apapun</h2></div>
</div>

</div>
</div></div>
</div>
<?php } ?>


</div>
</div></div>
</div>

<div class="vc_row-full-width vc_clearfix"></div>

</div></div></div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>


</div>
</div>
</div>
</div>
</div>
</section>

<?php

}; ?>
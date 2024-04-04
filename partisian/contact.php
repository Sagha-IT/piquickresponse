<?php
if (empty($namawebsite))
{die();}
?>

<div style="border-top:1px solid #e6e6e6;" data-vc-full-width="true" data-vc-full-width-init="false" class="vc_row wpb_row vc_row-fluid vc_custom_1496417868939"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner vc_custom_1490364209546"><div class="wpb_wrapper"><div id="ultimate-heading-6315dd836beb342d" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-6315dd836beb342d uvc-284 accent-border-color" data-hspacer="line_only" data-halign="center" style="text-align:center"><div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-6315dd836beb342d h2' data-responsive-json-new='{"font-size":"desktop:40px;","line-height":"desktop:46px;"}'><h2 style="font-weight:bold;margin-bottom:15px;">Hubungi Kami</h2></div>
<div class="uvc-heading-spacer line_only" style="topheight:5px;"><span class="uvc-headings-line" style="border-style:solid;border-bottom-width:5px;border-color:;width:200px;"></span></div>
</div></div>
</div>
</div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1490689853022"><div class="wpb_wrapper">

<script>
var cekdataparametercek1 = ""; var cekdataparametercek2 = "";
function ceksebelumnya() {
  if (isNaN(jQuery("#parametercek1").val()))
    {alert("Nomor Telp dengan Angka");jQuery("#parametercek1").val("");jQuery("#parametercek1").focus();return false;}
cekdataparametercek1=getdetectforinvalidsymb(jQuery("#parametercek1").val()); jQuery("#parametercek1").val(cekdataparametercek1);
cekdataparametercek2=getdetectforinvalidsymb(jQuery("#parametercek2").val()); jQuery("#parametercek2").val(cekdataparametercek2);
}

function lakukanlogin() { ceksebelumnya();
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=sendontanya&formname=inputandata',jQuery("#formdaftarin").serialize(), function(data){
            alert(data);
            window.location.href='<?php echo $lokasiweb; ?>contact.html';
            return false;
        });
return false;
}

</script>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarin" onsubmit="lakukanlogin(); return false;">
<div class="form-fields">
<label >Nama *</label><br/><input type="text" class="deweedycustom validate[required]" placeholder="No Anda *" name="inputandata[]" value="" required maxlength="255"> <br/>
<label >No Telp *</label><br/><input type="text" id="parametercek1" onkeyup="ceksebelumnya();" class="deweedycustom validate[required]" placeholder="No Telp: contoh 81234567890 *" name="inputandata[]" value="" required maxlength="14"> <br/>
<label >Email *</label><br/><input type="email" id="parametercek2" onkeyup="ceksebelumnya();" class="deweedycustom validate[required]" placeholder="Email Pendaftar *" name="inputandata[]" value="" required maxlength="234"> <br/>
<label >Alamat *</label><br/><textarea class="deweedycustom validate[required]" placeholder="Alamat Anda *" name="inputandata[]" required></textarea> <br/>
<label >Pertanyaan Anda *</label><br/><textarea class="deweedycustom validate[required]" placeholder="Masukkan Pertanyaan Anda *" name="inputandata[]" required></textarea> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Kirim" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/>
</div>
</form>


</div>
</div>
</div>


<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-6 vc_col-md-6"><div class="vc_column-inner vc_custom_1490689857636"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid">

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-mobile"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php echo $notel; ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-briefcase"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php echo $alamatemail; ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner vc_custom_1490689857636"><div class="wpb_wrapper"><div class="vc_row wpb_row vc_inner vc_row-fluid">


<h3 style="width:100%;text-align: center;margin-top: 27px;">Upcoming Event</h3>


<div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner vc_custom_1490689869709"><div class="wpb_wrapper"><style type="text/css" data-type="the7_shortcodes-inline-css">.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a { width: 22px; height: 80px; border-radius: 0px; } .dt-arrow-border-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover):before { border-width: 0px; } .dt-arrow-hover-border-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover:after { border-width: 0px; } .arrows-hover-bg-on.carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:after { background: #f4a215; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev { top: 50%; transform: translateY(calc(-50% + 0px)); left: 0px; } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev { transform: translateY(-50%); margin-top: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-prev i { padding: 0px 0px 0px 0px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next { top: 50%; transform: translateY(calc(-50% + 0px)); right: 0px; } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next { transform: translateY(-50%); margin-top: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a.owl-next i { padding: 0px 0px 0px 0px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav i { font-size: 18px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover) i, .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:not(:hover) i:before { color: #ffffff; background: none; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover i, .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-nav a:hover i:before { color: #ffffff; background: none; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dots { top: calc(100% + 20px); left: 50%; transform: translateX(calc(-50% + 0px)); } @media all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dots { transform: translateX(-50%); margin-left: 0px; } } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a .owl-dot { width: 10px; height: 10px; margin: 0 8px; } @media screen and (max-width: 778px) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.hide-arrows .owl-nav a { display: none; } } @media screen and (max-width: 778px) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-prev { top: 50%; transform: translateY(calc(-50% + 0px)); left: 10px; } .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-next { top: 50%; transform: translateY(calc(-50% + 0px)); right: 10px; } } @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-prev { transform: translateY(-50%); margin-top: 0px; } } @media screen and (max-width: 778px) and all and (-ms-high-contrast: none) { .carousel-shortcode.carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a.reposition-arrows .owl-nav .owl-next { transform: translateY(-50%); margin-top: 0px; } }</style>
	<div class="owl-carousel carousel-shortcode dt-owl-carousel-call carousel-shortcode-id-73eeed8912af3199cbfb28187174eb6a bullets-small-dot-stroke arrows-bg-on dt-arrow-border-on dt-arrow-hover-border-on arrows-hover-bg-on  " data-scroll-mode="1" data-col-num="1" data-wide-col-num="1" data-laptop-col="1" data-h-tablet-columns-num="1" data-v-tablet-columns-num="1" data-phone-columns-num="1" data-auto-height="true" data-col-gap="50" data-stage-padding="0" data-speed="600" data-autoplay="false" data-autoplay_speed="6000" data-arrows="true" data-bullet="false" data-next-icon="icon-ar-017-r" data-prev-icon="icon-ar-017-l">
		
<?php
$querysql="select * from mediaeo order by waktueventz desc"; $hitungtotal=0;
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ if (strtotime($tampilkanperkolomdata["waktueventz"])<strtotime(date("Y-m-d H:i:s")))
{continue;}
$hitungtotal++;
 ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1495183198252 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper">



  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-leaf"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php echo lihatisikolomtertentu("mediaeo","kodeventz",$tampilkanperkolomdata["kodeventz"],"namaeventz"); ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>

  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<div id="Info-box-wrap-3798" class="aio-icon-box left-icon" style=""><div class="aio-icon-left"><div class="ult-just-icon-wrapper  "><div class="align-icon" style="text-align:center;"><div class="aio-icon advanced " style="color:#ffffff;border-style:;border-color:#333333;border-width:1px;width:34px;height:34px;line-height:34px;border-radius:500px;font-size:16px;display:inline-block;"> <i class="icomoon-icomoonfree-16x16-pencil"></i></div>
</div></div>
</div>
<div class="aio-ibd-block"><div class="aio-icon-header"><h3 class="aio-icon-title ult-responsive" data-ultimate-target='#Info-box-wrap-3798 .aio-icon-title' data-responsive-json-new='{"font-size":"desktop:26px;","line-height":"desktop:30px;"}' style=""><?php $tanggaltujuan=dapatkantanggaltujuan(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"waktueventz"),lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"durasievent"));
  echo date("d",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"waktueventz")))." ".monthtobulan(date("m",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"waktueventz"))))." ";
  if (date("Y",strtotime($tanggaltujuan))!=date("Y",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"waktueventz"))))
    {echo date("Y",strtotime(lihatisikolomtertentu("mediaeo","kodeventz",@$tampilkanperkolomdata["kodeventz"],"waktueventz")))." - ";}
    else
    {echo " - ";}
  echo date("d",strtotime($tanggaltujuan))." ".monthtobulan(date("m",strtotime($tanggaltujuan)))." ".date("Y",strtotime($tanggaltujuan)); ?></h3></div>
</div></div>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>


  <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-12 vc_col-md-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="aio-icon-component  vc_custom_1498720684410  accent-icon-bg style_1">
<a href="<?php echo $lokasiweb."event/".@$tampilkanperkolomdata["kodeventz"].".html"; ?>"><input type="button" class="calactdanger" value="Lihat Detail" style="width:100%;"/></a>

</div></div></div></div>
<div class="vc_row-full-width vc_clearfix"></div>


</div>
</div></div>
</div>
<?php };
if ($hitungtotal<1)
{ ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1495183198252 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="shortcode-single-image-wrap alignnone  vc_custom_1530533940841"><div class="shortcode-single-image"><div class="fancy-media-wrap  layzr-bg" ><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20150%20150&#39;%2F%3E" data-src="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?>" data-srcset="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 150w, <?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 300w" width="150" height="150" alt="" /></div>
</div>
</div>
<div id="ultimate-heading-66835dd836beb52b7" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-66835dd836beb52b7 uvc-7815 color-title" data-hspacer="no_spacer" data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div>
<div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-66835dd836beb52b7 h2' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'><h2 style="font-weight:bold;">Tidak Ada Event yang bisa ditampilkan</h2></div>
</div>

</div>
</div></div>
</div>
<?php }

 }
else
{ ?>
<div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1495183198252 vc_row-has-fill"><div class="wpb_column vc_column_container vc_col-sm-12"><div class="vc_column-inner"><div class="wpb_wrapper"><div class="shortcode-single-image-wrap alignnone  vc_custom_1530533940841"><div class="shortcode-single-image"><div class="fancy-media-wrap  layzr-bg" ><img class="preload-me lazy-load" src="data:image/svg+xml,%3Csvg%20xmlns%3D&#39;http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg&#39;%20viewBox%3D&#39;0%200%20150%20150&#39;%2F%3E" data-src="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?>" data-srcset="<?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 150w, <?php echo $lokasiweb."box/pisplashscreen.jpg"; ?> 300w" width="150" height="150" alt="" /></div>
</div>
</div>
<div id="ultimate-heading-66835dd836beb52b7" class="uvc-heading ult-adjust-bottom-margin ultimate-heading-66835dd836beb52b7 uvc-7815 color-title" data-hspacer="no_spacer" data-halign="center" style="text-align:center"><div class="uvc-heading-spacer no_spacer" style="top"></div>
<div class="uvc-main-heading ult-responsive" data-ultimate-target='.uvc-heading.ultimate-heading-66835dd836beb52b7 h2' data-responsive-json-new='{"font-size":"desktop:20px;","line-height":"desktop:30px;"}'><h2 style="font-weight:bold;">Tidak Ada Event yang bisa ditampilkan</h2></div>
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

</div></div></div>
</div>
<div class="vc_row-full-width vc_clearfix"></div>


</div>

<div class="vc_row-full-width vc_clearfix"></div>


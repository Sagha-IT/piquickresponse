<?php
//die("<h1 style='width:100%;text-align:center;padding-top:7%;'>Alert !!! The System is locking your hosting because it is your domain and hosting are expired and would unlocked until you extend duration of your domain and hosting until next year!!</h1>");

/* email gmail penganti chiln33_85@yahoo.com
email: widy@saghahost.my.id
password: @sayangsallyghani2708201229022016@
*/


/* 
Superuser login: No Telp: zuperadmin4piqr
email mengunakan email setting seperti $alamatemail di atas

Nameserver 1: ns1.hosterserver.com
Nameserver 2: ns2.hosterserver.com

*/
//$alamatemail="widyansyah@deweedyweb.com";

/*
mailtrans.my.id/cpanel untuk email transport

 Username : mailsmyi
 Password : mai64581 


login rumahweb.com
email: rm_widyansyah@yahoo.com
pass: @160711WidyDewieSallyGhani@

Login hostinger.com / niagahoster.com pake akun google BSU

*/

if (!(session_start()))
{session_start();};
if (file_exists("systemfunction.php"))
{
require ('systemfunction.php');
if (!empty($_REQUEST["formwhats"]))
{
if ((empty($_REQUEST["page"]))&&($_REQUEST["formwhats"]=="desktop"))
{header ("location:".$lokasiweb."?formwhats=desktop&page=login");exit;}
}

$hitungtotal=0;

$pesannya="";
if (!empty($_REQUEST["mailconfirm"]))
{ 
$querykonf="update `data_pioneerweb` set status_pioneer='verified' where dataidutama_pioneer='".@$_REQUEST["mailconfirm"]."'";
@queryuniverse($querykonf);
  $hasilkonfirm=(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$_REQUEST["mailconfirm"],"status_pioneer")==="aktif"?"E-Mail Berhasil dikonfirmasi":"Gagal Verifikasi E-Mail karena Data Pioneer Tidak ditemukan");
?>
<script>
alert("<?php echo $hasilkonfirm; ?>");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die();
}
if (!empty($_REQUEST["resetorresister"]))
{ 
if (empty($_REQUEST["twistedtransistor"]))
{ ?>
<script>
alert("Proses Gagal");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die(); }
$saveneonepass=@mengacakstring(@$_REQUEST["twistedtransistor"],5);
$querykonf="update `data_pioneerweb` set password_untuk_login='".$saveneonepass."' where dataidutama_pioneer='".@$_REQUEST["resetorresister"]."'";
@queryuniverse($querykonf);
  $hasilkonfirm="Password Anda Telah Berhasil di Ganti";
?>
<script>
alert("<?php echo $hasilkonfirm; ?>");
window.location.href='<?php echo $lokasiweb; ?>?page=login';
</script>
<?php
die();
}
}
$sekarangdimana="beranda";
if (!empty($_REQUEST["page"]))
{$sekarangdimana=$_REQUEST["page"];}
$walink="https://".$webwa."/send?phone=".$notelwa."&text=Halo%20".@expimpd($namapt," ","%20")."%20Saya%20mau%20tanya%20...%0A%0A%0A";

$susunberita="";
if ($sekarangdimana!="berita")
{$querysql="select * from beberkanlisting order by beberkanisiheadhingga asc"; $hitungtotal=0; $susunberita="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $kodz=@$tampilkanperkolomdata["beberkanurut"];
    $palingbanter=strtotime(@$tampilkanperkolomdata["beberkanisiheadhingga"]);
if (strtotime(date("Y-m-d"))>($palingbanter))
{ queryuniverse("update beberkanlisting set beberkanisiheadhingga='' where beberkanurut='".@$kodz."' ");}
else
{$susunberita.="&nbsp;<a href='".$lokasiweb."?page=berita&loadcontent=".@$kodz."' style='text-decoration:none;'>".@$tampilkanperkolomdata["beberkanjudul"]."</a>&nbsp;-";
 }; }
if ($susunberita!="")
    {$susunberita="Headline News: ".@substr($susunberita, 0,-1);}
};
}

$querysql="select * from deweedysaghal0gg3r order by beberkanpostedat asc"; $hitungtotal=0; $susunberita="";
$hasil = queryuniverse($querysql);
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ $kodz=@$tampilkanperkolomdata["beberkanurut"];
    $palingbanter=strtotime(@$tampilkanperkolomdata["beberkanpostedat"]);
if (strtotime(date("Y-m-d"))>($palingbanter))
{ @queryuniverse("delete from deweedysaghal0gg3r where beberkanpostedat='".@$tampilkanperkolomdata["beberkanpostedat"]."' ");}
 }
};

$sekarangdimana="beranda";
if (!empty($_REQUEST["page"]))
{$sekarangdimana=$_REQUEST["page"];}
$walink="https://".$webwa."/send?phone=".$notelwa."&text=Halo%20".@expimpd($namapt," ","%20")."%20Saya%20mau%20tanya%20...%0A%0A%0A";

//die(mengacakstring("zuperadmin4piqr",5));
?>

<!DOCTYPE html> <!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!--><html lang="en-US" class="no-js"> <!--<![endif]--><head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
  <meta name="theme-color" content="#562a79" /><link rel="profile" href="https://gmpg.org/xfn/11" /> <script type="text/javascript">if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                var originalAddEventListener = EventTarget.prototype.addEventListener,
                    oldWidth = window.innerWidth;

                EventTarget.prototype.addEventListener = function (eventName, eventHandler, useCapture) {
                    if (eventName === "resize") {
                        originalAddEventListener.call(this, eventName, function (event) {
                            if (oldWidth === window.innerWidth) {
                                return;
                            }
                            else if (oldWidth !== window.innerWidth) {
                                oldWidth = window.innerWidth;
                            }
                            if (eventHandler.handleEvent) {
                                eventHandler.handleEvent.call(this, event);
                            }
                            else {
                                eventHandler.call(this, event);
                            };
                        }, useCapture);
                    }
                    else {
                        originalAddEventListener.call(this, eventName, eventHandler, useCapture);
                    };
                };
            };</script> <script>function fvmuag(){if(navigator.userAgent.match(/x11.*fox\/54|oid\s4.*xus.*ome\/62|oobot|ighth|tmetr|eadles|ingdo/i))return!1;if(navigator.userAgent.match(/x11.*ome\/75\.0\.3770\.100/i)){var e=screen.width,t=screen.height;if("number"==typeof e&&"number"==typeof t&&862==t&&1367==e)return!1}return!0}</script><title><?php echo $judulweb; ?></title> <script id="the7-cloudflare-mobile-menu-fix">document.addEventListener("DOMContentLoaded", function(event) {
            document.body.querySelectorAll("#mobile-menu img").forEach(function(el) {
                el.setAttribute("data-cfstyle", el.getAttribute("style"));
            });
            document.body.querySelectorAll(".branding img").forEach(function(el) {
                el.setAttribute("style", "");
            });
        });</script> <script type="text/javascript">if(fvmuag()){var fvmf109340e=document.createElement("link");fvmf109340e.rel="stylesheet",fvmf109340e.type="text/css",fvmf109340e.media="async",fvmf109340e.href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:regular,700,300,400,600|Roboto+Condensed:400,600,700|Roboto:400,400italic,600,700|Open+Sans:400,600,700",fvmf109340e.onload=function(){fvmf109340e.media="all"},document.getElementsByTagName("head")[0].appendChild(fvmf109340e);}</script>
        

<link rel='stylesheet' id='fvm-header-2-css' href='<?php echo $lokasiweb; ?>box/header.css' type='text/css' media='all' />

<link rel='stylesheet' id='fvm-header-2-css' href='<?php echo $lokasiweb; ?>box/override.css' type='text/css' media='all' />

<style type="text/css">
    :root {
        <?php for ($iloop=2;$iloop<=9;$iloop++)
        {echo "--purpletrans".$iloop."0:rgba(86,42,121,0.".$iloop.");";};
        ?>
    }

</style>


<script id="the7-cloudflare-mobile-menu-fix">
        document.addEventListener("DOMContentLoaded", function(event) {
            var mobileMenuImages = document.body.querySelectorAll("#mobile-menu img");
            var brandingImages = document.body.querySelectorAll(".branding img");
            var slideshowImages = document.body.querySelectorAll("#main-slideshow img");

            Array.prototype.forEach.call(mobileMenuImages, function (el) {
                el.setAttribute("data-cfstyle", el.getAttribute("style"));
            });
            Array.prototype.forEach.call(brandingImages, function (el) {
                el.setAttribute("style", "");
            });
            Array.prototype.forEach.call(slideshowImages, function (el) {
                if (!el.getAttribute("src") && el.getAttribute("data-cfsrc")) {
                    el.setAttribute("src", el.getAttribute("data-cfsrc"));
                }
            });
        });
		</script>
<link rel="stylesheet" id="wc-blocks-integration-css" href="<?php echo $lokasiweb; ?>plugins/index.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-vendors-style-css" href="<?php echo $lokasiweb; ?>plugins/wc-blocks-vendors-style.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-blocks-style-css" href="<?php echo $lokasiweb; ?>plugins/wc-blocks-style.css" type="text/css" media="all">
<style id="woocommerce-inline-inline-css" type="text/css">
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel="stylesheet" id="elementor-icons-css" href="<?php echo $lokasiweb; ?>plugins/elementor-icons.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-frontend-css" href="<?php echo $lokasiweb; ?>plugins/custom-frontend.min.css" type="text/css" media="all">

<link rel="stylesheet" id="elementor-pro-css" href="<?php echo $lokasiweb; ?>plugins/custom-pro-frontend.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-global-css" href="<?php echo $lokasiweb; ?>plugins/global.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9428-css" href="<?php echo $lokasiweb; ?>plugins/post-9428.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-2900-css" href="<?php echo $lokasiweb; ?>plugins/post-2900.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-752-css" href="<?php echo $lokasiweb; ?>plugins/post-752.css" type="text/css" media="all">
<link rel="stylesheet" id="dt-demostand-public-css" href="<?php echo $lokasiweb; ?>plugins/public.css" type="text/css" media="all">
<link rel="stylesheet" id="dt-main-css" href="<?php echo $lokasiweb; ?>plugins/main.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-custom-scrollbar-css" href="<?php echo $lokasiweb; ?>plugins/custom-scrollbar.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-css-vars-css" href="<?php echo $lokasiweb; ?>plugins/css-vars.css" type="text/css" media="all">
<link rel="stylesheet" id="dt-custom-css" href="<?php echo $lokasiweb; ?>plugins/custom.css" type="text/css" media="all">
<link rel="stylesheet" id="wc-dt-custom-css" href="<?php echo $lokasiweb; ?>plugins/wc-dt-custom.css" type="text/css" media="all">
<link rel="stylesheet" id="dt-media-css" href="<?php echo $lokasiweb; ?>plugins/media.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-mega-menu-css" href="<?php echo $lokasiweb; ?>plugins/mega-menu.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-elements-css" href="<?php echo $lokasiweb; ?>plugins/post-type-dynamic.css" type="text/css" media="all">
<link rel="stylesheet" id="style-css" href="<?php echo $lokasiweb; ?>plugins/style.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-elementor-global-css" href="<?php echo $lokasiweb; ?>plugins/elementor-global.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-slider-css" href="<?php echo $lokasiweb; ?>plugins/the7-slider.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-icon-box-grid-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-icon-box-grid-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-tabs-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-tabs-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-carousel-text-and-icon-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-carousel-text-and-icon-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-simple-common-css" href="<?php echo $lokasiweb; ?>plugins/the7-simple-common.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-elements-simple-posts-carousel-css" href="<?php echo $lokasiweb; ?>plugins/the7-simple-posts-carousel.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-filter-decorations-base-css" href="<?php echo $lokasiweb; ?>plugins/the7-filter-decorations-base.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-elements-simple-posts-css" href="<?php echo $lokasiweb; ?>plugins/the7-simple-posts.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-icon-box-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-icon-box-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-icon-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-icon-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7_horizontal-menu-css" href="<?php echo $lokasiweb; ?>plugins/the7-horizontal-menu-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-woocommerce-menu-cart-css" href="<?php echo $lokasiweb; ?>plugins/the7-woocommerce-menu-cart.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-vertical-menu-widget-css" href="<?php echo $lokasiweb; ?>plugins/the7-vertical-menu-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="google-fonts-1-css" href="<?php echo $lokasiweb; ?>plugins/css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-shared-0-css" href="<?php echo $lokasiweb; ?>plugins/fontawesome.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-icons-fa-solid-css" href="<?php echo $lokasiweb; ?>plugins/solid.min.css" type="text/css" media="all">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/jquery.min.js.download" id="jquery-core-js"></script>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/jquery-migrate.min.js.download" id="jquery-migrate-js"></script>
<script type="text/javascript" id="dt-above-fold-js-extra">
/* <![CDATA[ */
var dtLocal = {"themeUrl":"https:\/\/the7.io\/elementor-corporate\/wp-content\/themes\/dt-the7","passText":"To view this protected post, enter the password below:","moreButtonText":{"loading":"Loading...","loadMore":"Load more"},"postID":"9428","ajaxurl":"https:\/\/the7.io\/elementor-corporate\/wp-admin\/admin-ajax.php","REST":{"baseUrl":"https:\/\/the7.io\/elementor-corporate\/wp-json\/the7\/v1","endpoints":{"sendMail":"\/send-mail"}},"contactMessages":{"required":"One or more fields have an error. Please check and try again.","terms":"Please accept the privacy policy.","fillTheCaptchaError":"Please, fill the captcha."},"captchaSiteKey":"","ajaxNonce":"4f4379074b","pageData":{"type":"page","template":"page","layout":null},"themeSettings":{"smoothScroll":"off","lazyLoading":false,"desktopHeader":{"height":""},"ToggleCaptionEnabled":"disabled","ToggleCaption":"Navigation","floatingHeader":{"showAfter":94,"showMenu":false,"height":64,"logo":{"showLogo":true,"html":"","url":"https:\/\/the7.io\/elementor-corporate\/"}},"topLine":{"floatingTopLine":{"logo":{"showLogo":false,"html":""}}},"mobileHeader":{"firstSwitchPoint":1150,"secondSwitchPoint":600,"firstSwitchPointHeight":60,"secondSwitchPointHeight":50,"mobileToggleCaptionEnabled":"right","mobileToggleCaption":"Menu"},"stickyMobileHeaderFirstSwitch":{"logo":{"html":""}},"stickyMobileHeaderSecondSwitch":{"logo":{"html":""}},"sidebar":{"switchPoint":992},"boxedWidth":"1280px"},"wcCartFragmentHash":"1ad93db1657e5027910113dc353232b7","elementor":{"settings":{"container_width":1350}}};
var dtShare = {"shareButtonText":{"facebook":"Share on Facebook","twitter":"Tweet","pinterest":"Pin it","linkedin":"Share on Linkedin","whatsapp":"Share on Whatsapp"},"overlayOpacity":"90"};
/* ]]> */
</script>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/above-the-fold.min.js.download" id="dt-above-fold-js"></script>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>plugins/woocommerce.min.js.download" id="dt-woocommerce-js"></script>

<meta property="og:site_name" content="<?php echo $namawebsite; ?>" />
<meta property="og:title" content="Home" />
<meta property="og:url" content="<?php echo $lokasiweb; ?>" />
<meta property="og:type" content="website" />
<style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
<script type="text/javascript">document.addEventListener("DOMContentLoaded", function(event) { 
  var load = document.getElementById("load");
  if(!load.classList.contains('loader-removed')){
    var removeLoading = setTimeout(function() {
      load.className += " loader-removed";
    }, 300);
  }
});</script> <link rel="icon" href="<?php echo $lokasiweb."box/piquickresponselogo.png"; ?>" type="image/png" sizes="64x64" />
<style>
.aio-icon {color: #fcb34c !important;border: 1px solid #fcb34c;width:34px;height:34px;line-height:34px;border-radius:50%;font-size:16px !important;display:inline-block;}
</style>

<link rel="preload" href="https://the7.io/corporate/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp" as="script"><link rel="preload" href="https://the7.io/corporate/wp-content/uploads/sites/41/cache/fvm/1592480037/out/header-cf8d8f51e26fc08913c5360b12f0a43f58a18c57.min.js" as="script"><link rel="preload" href="https://the7.io/corporate/wp-content/uploads/sites/41/cache/fvm/1592480037/out/header-b42006c78709420e9b0e7b96e3d988dde1f19fe7.min.css" as="style">
<script type="text/javascript">function setREVStartSize(e){         
            try {                               
                var pw = document.getElementById(e.c).parentNode.offsetWidth,
                    newh;
                pw = pw===0 || isNaN(pw) ? window.innerWidth : pw;
                e.tabw = e.tabw===undefined ? 0 : parseInt(e.tabw);
                e.thumbw = e.thumbw===undefined ? 0 : parseInt(e.thumbw);
                e.tabh = e.tabh===undefined ? 0 : parseInt(e.tabh);
                e.thumbh = e.thumbh===undefined ? 0 : parseInt(e.thumbh);
                e.tabhide = e.tabhide===undefined ? 0 : parseInt(e.tabhide);
                e.thumbhide = e.thumbhide===undefined ? 0 : parseInt(e.thumbhide);
                e.mh = e.mh===undefined || e.mh=="" || e.mh==="auto" ? 0 : parseInt(e.mh,0);        
                if(e.layout==="fullscreen" || e.l==="fullscreen")                       
                    newh = Math.max(e.mh,window.innerHeight);               
                else{                   
                    e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
                    for (var i in e.rl) if (e.gw[i]===undefined || e.gw[i]===0) e.gw[i] = e.gw[i-1];                    
                    e.gh = e.el===undefined || e.el==="" || (Array.isArray(e.el) && e.el.length==0)? e.gh : e.el;
                    e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
                    for (var i in e.rl) if (e.gh[i]===undefined || e.gh[i]===0) e.gh[i] = e.gh[i-1];
                                        
                    var nl = new Array(e.rl.length),
                        ix = 0,                     
                        sl;                 
                    e.tabw = e.tabhide>=pw ? 0 : e.tabw;
                    e.thumbw = e.thumbhide>=pw ? 0 : e.thumbw;
                    e.tabh = e.tabhide>=pw ? 0 : e.tabh;
                    e.thumbh = e.thumbhide>=pw ? 0 : e.thumbh;                  
                    for (var i in e.rl) nl[i] = e.rl[i]<window.innerWidth ? 0 : e.rl[i];
                    sl = nl[0];                                 
                    for (var i in nl) if (sl>nl[i] && nl[i]>0) { sl = nl[i]; ix=i;}                                                         
                    var m = pw>(e.gw[ix]+e.tabw+e.thumbw) ? 1 : (pw-(e.tabw+e.thumbw)) / (e.gw[ix]);                    

                    newh =  (e.type==="carousel" && e.justify==="true" ? e.gh[ix] : (e.gh[ix] * m)) + (e.tabh + e.thumbh);
                }           
                
                if(window.rs_init_css===undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));                 
                document.getElementById(e.c).height = newh;
                window.rs_init_css.innerHTML += "#"+e.c+"_wrapper { height: "+newh+"px }";              
            } catch(e){
                console.log("Failure at Presize of Slider:" + e)
            }                      
          };</script>

 <style type="text/css" data-type="vc_shortcodes-custom-css">.vc_custom_1495112538029{padding-top: 50px !important;padding-bottom: 0px !important;}.vc_custom_1496417868939{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1498753666903{padding-top: 60px !important;padding-bottom: 70px !important;}.vc_custom_1496301218483{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1491727832773{padding-top: 70px !important;padding-bottom: 50px !important;}.vc_custom_1498756280205{padding-top: 70px !important;padding-bottom: 70px !important;}.vc_custom_1497598014815{padding-top: 70px !important;padding-bottom: 20px !important;}.vc_custom_1498139160347{padding-top: 50px !important;padding-bottom: 0px !important;}.vc_custom_1495112557524{padding-bottom: 50px !important;}.vc_custom_1495112563645{padding-bottom: 50px !important;}.vc_custom_1495112570142{padding-bottom: 50px !important;}.vc_custom_1495112577073{padding-bottom: 50px !important;}.vc_custom_1498137891816{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498137727221{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498137714050{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498137818869{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1490364209546{padding-bottom: 80px !important;}.vc_custom_1490689853022{padding-bottom: 50px !important;}.vc_custom_1490689857636{padding-bottom: 20px !important;}.vc_custom_1490689869709{padding-bottom: 50px !important;}.vc_custom_1530539174784{padding-top: 5px !important;padding-right: 0px !important;padding-bottom: 30px !important;padding-left: 0px !important;}.vc_custom_1498805135059{padding-bottom: 20px !important;}.vc_custom_1498720684410{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498720697012{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498572558104{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498572567053{margin-bottom: 0px !important;padding-bottom: 30px !important;}.vc_custom_1495183198252{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #ffffff !important;}.vc_custom_1495183198252{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #ffffff !important;}.vc_custom_1530533940841{padding-bottom: 20px !important;}.vc_custom_1495184245568{padding-bottom: 20px !important;}.vc_custom_1530533662737{padding-bottom: 20px !important;}.vc_custom_1495184245568{padding-bottom: 20px !important;}.vc_custom_1498753527545{margin-top: 27px !important;}.vc_custom_1490364540235{padding-bottom: 80px !important;}.vc_custom_1498806371422{padding-right: 50px !important;padding-left: 50px !important;}.vc_custom_1530535988039{padding-bottom: 20px !important;}.vc_custom_1498226765855{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806318532{margin-top: -40px !important;}.vc_custom_1530535994989{padding-bottom: 20px !important;}.vc_custom_1498226777616{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806311657{margin-top: -40px !important;}.vc_custom_1530536002563{padding-bottom: 20px !important;}.vc_custom_1498226794467{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806325400{margin-top: -40px !important;}.vc_custom_1530536012523{padding-bottom: 20px !important;}.vc_custom_1498226811963{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806331667{margin-top: -40px !important;}.vc_custom_1530536021583{padding-bottom: 20px !important;}.vc_custom_1498226820441{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806337887{margin-top: -40px !important;}.vc_custom_1530536104256{padding-bottom: 20px !important;}.vc_custom_1498226837819{margin-bottom: 0px !important;padding-bottom: 20px !important;}.vc_custom_1498806343595{margin-top: -40px !important;}.vc_custom_1496420271943{padding-bottom: 60px !important;}.vc_custom_1498809487981{padding-bottom: 20px !important;}.vc_custom_1498809515781{padding-bottom: 30px !important;}.vc_custom_1496421015976{margin-bottom: 15px !important;}.vc_custom_1496420782407{margin-bottom: 15px !important;}.vc_custom_1496420801059{margin-bottom: 15px !important;}.vc_custom_1496420858018{margin-bottom: 15px !important;}.vc_custom_1496420882914{margin-bottom: 15px !important;}.vc_custom_1498139258264{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1498139266434{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1498139266434{padding-right: 10px !important;padding-left: 10px !important;}.vc_custom_1530538857341{padding-bottom: 20px !important;}.vc_custom_1530538865569{padding-bottom: 20px !important;}.vc_custom_1530538874545{padding-bottom: 20px !important;}.vc_custom_1490364540235{padding-bottom: 80px !important;}.vc_custom_1498809562916{padding-bottom: 25px !important;}.vc_custom_1497597996758{padding-bottom: 50px !important;}.vc_custom_1496475327227{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}.vc_custom_1496475327227{padding-top: 30px !important;padding-right: 30px !important;padding-bottom: 30px !important;padding-left: 30px !important;background-color: #f5f5f5 !important;}.vc_custom_1530539203602{padding-bottom: 25px !important;}.vc_custom_1498806111777{padding-bottom: 25px !important;}.vc_custom_1530535816902{padding-bottom: 25px !important;}.vc_custom_1498806544748{padding-bottom: 25px !important;}.vc_custom_1495112557524{padding-bottom: 50px !important;}.vc_custom_1495112563645{padding-bottom: 50px !important;}.vc_custom_1495112570142{padding-bottom: 50px !important;}.vc_custom_1495112577073{padding-bottom: 50px !important;}.vc_custom_1530538883022{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1530538891591{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1530538900791{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}.vc_custom_1530538909238{margin-top: 0px !important;margin-bottom: 0px !important;padding-top: 0px !important;padding-bottom: 0px !important;}</style><noscript><style>.wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><script>window.psicheck = function() {
  var check = false;
  
  (function(a){if(navigator.userAgent.match(/nux.*oto\sG|x11.*fox\/54|x11.*ome\/39|x11.*ome\/62|oid\s6.*1.*xus\s5.*MRA58N.*ome|JWR66Y.*ome\/62|woobot|speed|ighth|tmetr|eadle/i)) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
  return check;
};
</script>
<script>
var lakukanlooping=0;
function jexpimp(data1,exps,imps="",indexin="deweedy")
{ if (data1=="")
{return "";}
var doextract=data1;doextract=doextract.split(exps);
if (indexin=="array")
{return doextract;}
if (indexin!="deweedy")
{indexin=parseFloat(indexin);indexin=Math.round(indexin);
 if (doextract[indexin]!="")
{ return doextract[indexin]; }
else
{ return "";}; }
else
{doextract=doextract.join(imps);
return doextract;}
}
function reverseString(str="") {
if (str=="")
  {return "";}
    // Step 1. Use the split() method to return a new array
    var splitString = str.split(""); // var splitString = "hello".split("");
    // ["h", "e", "l", "l", "o"]
 
    // Step 2. Use the reverse() method to reverse the new created array
    var reverseArray = splitString.reverse(); // var reverseArray = ["h", "e", "l", "l", "o"].reverse();
    // ["o", "l", "l", "e", "h"]
 
    // Step 3. Use the join() method to join all elements of the array into a string
    var joinArray = reverseArray.join(""); // var joinArray = ["o", "l", "l", "e", "h"].join("");
    // "olleh"
    
    //Step 4. Return the reversed string
    return joinArray; // "olleh"
}
function getdetectforinvalidsymb(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-| |-|:|-|/|-|;|-|?|-|"+'"';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb2(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-|.|-|:|-|/|-|;|-|?|-|"+'"';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function getdetectforinvalidsymb3(datatodo)
{ if (datatodo=="")
{return "";}
var dofilters="!|-|'|-|`|-|&|-|%|-|$|-|#|-|=|-|+|-|~|-|^|-|/|-|;|-|?|-|"+'"';
var dofilters2="";
var dofilindx=0; var doresultz=datatodo;
dofilters=jexpimp(dofilters,"|-|","","array");
for(dofilindx=0;dofilindx<dofilters.length;dofilindx++)
{dofilters2=dofilters[dofilindx];
doresultz=jexpimp(doresultz,dofilters[dofilindx],"");}
return doresultz;
}
function periksaform(variablenya,namakotaknya) {
if ((variablenya=="")||(namakotaknya==""))
{return "lewati";}
var dapatkanisiformnya=jQuery("#"+namakotaknya).val();
 if (jexpimp(variablenya,"^","","1")=="isnan")
{ if (dapatkanisiformnya=="")
  {return "hanyafokus";}
  else
  if (isNaN(dapatkanisiformnya))
  {return "kosongkanisiform";}
  else
  if (dapatkanisiformnya<1)
  {return "kosongkanisiform";}
  else
  {return "lewati";}
}
else
if (jexpimp(variablenya,"^","","1")=="mails")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else
{cekemail(dapatkanisiformnya);
if (emvalid==false)
{emvalid=true;return "kosongkanisiform";}
else
{emvalid=true;return "lewati";};}; }
else
if (jexpimp(variablenya,"^","","1")=="none")
{ if (dapatkanisiformnya=="")
{return "hanyafokus";}
else 
{return "lewati";}
}
else
{return "lewati";}
}
function aturulangtinggiiframe(idiframe,tinggitujuan) {
if ((idiframe=="")||(tinggitujuan==""))
{return false;}
jQuery("#"+idiframe).attr("height",tinggitujuan+"px");
}
function formatRupiah(angka="", target="", prefix) {
  if (angka=="")
  {return "";}
  var number_string = angka.replace(/[^,\d]/g, "").toString(),
    split = number_string.split(","),
    sisa = split[0].length % 3,
    rupiah = split[0].substr(0, sisa),
    ribuan = split[0].substr(sisa).match(/\d{3}/gi);

  // tambahkan titik jika yang di input sudah menjadi angka ribuan
  if (ribuan) {
    separator = sisa ? "." : "";
    rupiah += separator + ribuan.join(".");
  }

  rupiah = split[1] != undefined ? rupiah + "," + split[1] : rupiah;
  if (target=="")
  {return prefix == undefined ? rupiah : rupiah ? "Rp. " + rupiah : "";}
  else
  {jQuery("#"+target).val(prefix == undefined ? rupiah : rupiah ? prefix + rupiah : "");
  return false;}
}
</script> 
<style>
#kotakformlogin{min-height: 10px;background:#fff;text-align:left;display: none;padding:5px !important;
box-shadow: 0 0 8px 2px #ccc;
}
@media (min-width:0px) and (max-width:600px){#kotakformlogin{width:99% !important;margin-top:0px !important;position: relative !important;} #kotakformlogin img{display: none !important;} .white-caret {opacity: 0 !important;}
}
@media (min-width:601px) {#kotakformlogin{width:200px !important;margin-top:-7px !important;position: absolute !important;}  #kotakformlogin img{display: block !important;}  .white-caret {opacity: 1 !important;}
 }
.judulberanimasiwhite {  background: -moz-linear-gradient(left, #fff, 0.4, #fff, 0.5, #4288c8, 0.6, #fff, #fff); 
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #fff),color-stop(0.4, #fff),color-stop(0.5, #4288c8),color-stop(0.6, #fff),color-stop(1, #fff)); 
color:#fff;  
  -moz-background-clip: text;
  -webkit-background-clip: text;
  
  -moz-text-fill-color: transparent;
  -webkit-text-fill-color: transparent;
  -webkit-transition:all 2.5s ease-in-out ;-moz-transition:all 3.5s ease-in-out ;
  
  font-size:162%;
  font-weight: bolder;
  text-shadow: none;
  padding: 0;
  width: auto;
  -webkit-animation:slidetounlock 7s infinite;
  -webkit-text-size-adjust: none;}

.judulberanimasi {  background: -moz-linear-gradient(left, #ff0000, 0.4, #ff0000, 0.5, #4288c8, 0.6, #ff0000, #ff0000); 
  background: -webkit-gradient(linear,left top,right top,color-stop(0, #ff0000),color-stop(0.4, #ff0000),color-stop(0.5, #4288c8),color-stop(0.6, #ff0000),color-stop(1, #ff0000)); 
color:#ff0000;  
  -moz-background-clip: text;
  -webkit-background-clip: text;
  
  -moz-text-fill-color: transparent;
  -webkit-text-fill-color: transparent;
  -webkit-transition:all 2.5s ease-in-out ;-moz-transition:all 3.5s ease-in-out ;
  
  font-size:162%;
  font-weight: bolder;
  text-shadow: none;
  padding: 0;
  width: 100%;
  -webkit-animation:slidetounlock 7s infinite;
  -webkit-text-size-adjust: none;border-bottom:1px solid #ff0000;}

@-webkit-keyframes slidetounlock {
  0% {
    background-position: -720px 0;
  }
  100%{
    background-position: 720px 0;
  }
}
.bigtaber {width:95%;height:auto;padding:7px;margin:0 auto 20px auto;border-radius:7px;-webkit-transition:all .5s ease-in-out ;-moz-transition:all .5s ease-in-out ;box-shadow:0 0 13px 1px #eee;}
.bigtaber:last-child {margin-bottom: 0;}
.bigtaber .tabhead {font-size: 123%;font-weight: bolder;letter-spacing: 1.1;cursor: pointer;}
.bigtaber .tabhead span {float:right;font-size:81%;}
.bigtaber .tabcontent {min-height: 50px;background:#fff;color:#000;display: none;padding:5px 5px 18px 5px;border:1px solid #0078a5;border-top:0;margin: 9px 0px 1px 0;border-radius:0 0 7px 7px;}
.btnpager {padding:5px !important;line-height:0px !important;height:30px !important;font-size:90% !important;}
.calact {background: -moz-linear-gradient(top, #00adee 0%, #0078a5 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00adee), color-stop(100%,#0078a5)) !important;
background: -webkit-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -o-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
background: -ms-linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00adee', endColorstr='#0078a5',GradientType=0 ) !important;
background: linear-gradient(top, #00adee 0%,#0078a5 100%) !important;
color:#fff !important;}
.calact:hover,.calactnow {background: -moz-linear-gradient(top, #2693bc 0%, #0f84b0 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#2693bc), color-stop(100%,#0f84b0)) !important;
background: -webkit-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -o-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
background: -ms-linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2693bc', endColorstr='#0f84b0',GradientType=0 ) !important;
background: linear-gradient(top, #2693bc 0%,#0f84b0 100%) !important;
color:#fff !important;}
.caleveact {background: -moz-linear-gradient(top, #60C480 0%, #3A7650 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#60C480), color-stop(100%,#3A7650)) !important;
background: -webkit-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -o-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
background: -ms-linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#60C480', endColorstr='#3A7650',GradientType=0 ) !important;
background: linear-gradient(top, #60C480 0%,#3A7650 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve {background: -webkit-gradient(linear, left top, left bottom, from(#dfe12b), to(#b8b92c)) !important;background: -moz-linear-gradient(top, #dfe12b, #b8b92c) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dfe12b, endColorstr=#b8b92c)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.caleveact:hover {background: -moz-linear-gradient(top, #00b342 0%, #009737 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#00b342), color-stop(100%,#009737)) !important;
background: -webkit-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -o-linear-gradient(top, #00b342 0%,#009737 100%) !important;
background: -ms-linear-gradient(top, #00b342 0%,#009737 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#00b342', endColorstr='#009737',GradientType=0 ) !important;
background: linear-gradient(top, #00b342 0%,#009737 100%) !important;
color:#fff !important;cursor: pointer;}
.caleve:hover {background: -webkit-gradient(linear, left top, left bottom, from(#dadb49), to(#c9cb00)) !important;background: -moz-linear-gradient(top, #dadb49, #c9cb00) !important;filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;-ms-filter: 'progid:DXImageTransform.Microsoft.gradient(startColorstr=#dadb49, endColorstr=#c9cb00)' !important;background-image: -o-linear-gradient(270deg,rgb(255,255,0),rgb(218,220,29)) !important;color:#fff !important;cursor: pointer;}
.calactdanger {background: -moz-linear-gradient(top, #ee0000 0%, #a5002f 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#ee0000), color-stop(100%,#a5002f)) !important;
background: -webkit-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -o-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
background: -ms-linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ee0000', endColorstr='#a5002f',GradientType=0 ) !important;
background: linear-gradient(top, #ee0000 0%,#a5002f 100%) !important;
color:#fff !important;}
.calactdanger:hover {background: -moz-linear-gradient(top, #bc2634 0%, #b00f31 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#bc2634), color-stop(100%,#b00f31)) !important;
background: -webkit-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -o-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
background: -ms-linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#bc2634', endColorstr='#b00f31',GradientType=0 ) !important;
background: linear-gradient(top, #bc2634 0%,#b00f31 100%) !important;
color:#fff !important;}
.pigoldbutton {background: -moz-linear-gradient(top, #fcb34c 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#fcb34c), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcb34c', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #fcb34c 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}
.pigoldbutton:hover {background: -moz-linear-gradient(top, #df8301 0%, #df8301 100%) !important;
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,#df8301), color-stop(100%,#df8301)) !important;
background: -webkit-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -o-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
background: -ms-linear-gradient(top, #df8301 0%,#df8301 100%) !important;
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#df8301', endColorstr='#df8301',GradientType=0 ) !important;
background: linear-gradient(top, #df8301 0%,#df8301 100%) !important;
color:#fff !important;cursor: pointer;}

.caleve .harian-number {color:#000;}
.calact .harian-number,.caleve .harian-number,.caleveact .harian-number {background:transparent;}
.table-stripped th,.table-stripped thead th, .table-stripped thead td, .table-stripped td {border:1px solid #dadada !important;padding:5px 7px 5px 5px !important;vertical-align: top !important;}
.boxbuatan h5 {margin-bottom: 4px;font-weight: bolder;}
@media (min-width: 975px) {
.colbuatan2 {padding-left:23px;}
.colbuatan {padding:0 !important;}
.colbuatan select {width:100% !important;}
.colbuatan2 select,.colbuatan2 input[type="text"] {width:105% !important;}
.boxbuatan {margin-top: 0 !important;} .boxbr {display: block !important;}
.boxbr2 {display: none !important;}
}
@media (min-width: 0px) and (max-width: 974px) {
.boxbuatan {margin-top: 45px !important;}
.colbuatan2,.colbuatan {padding:0 !important;}
.colbuatan select,.colbuatan2 select,.colbuatan2 input[type="text"] {width:100% !important;}
 .boxbr {display: none !important;}
}
@media (min-width: 992px) {
.mainlinker {margin-left: 39% !important;}
}
@media (min-width: 0px) and (max-width: 991px) {
 .mainlinker {margin-left: 0 !important;}
}
@media (min-width: 0px) and (max-width: 666px) {
.extrasetfordatatables {display: none !important;}
}
.tablejudul td {width:45px !important;border:0 !important;text-align: left !important;padding: 2px 5px !important;}
.deweedycustom {margin:4px 0 13px 0 !important;width:100% !important;} 

.tableuntukdicetak {width: 100%;}
.tableuntukdicetak th,.tableuntukdicetak td  {vertical-align: top;padding:15px 9px;border-left:1px solid #000;color:#000;background: #fff;border-top: 1px solid #000;}
.tableuntukdicetak th:last-child,.tableuntukdicetak td:last-child  {border-right: 1px solid #000;width: 75%;}
.tableuntukdicetak tr:last-child td {border-bottom: 1px solid #000; }


.blocklist {display: inline-flex;width: 28.5%;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklistbig {width:63%;display: inline-flex;min-height: 198px; padding: 4px 9px;margin: 12px 10px 20px 9px;border: 1px solid #eaeaea;
vertical-align: top;box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);background: #fff !important;}
.blocklist *:not(canvas),.blocklist * *:not(canvas) {position: relative;width: 100%;display: block;font-size: 100%;}
.blocklist style,.blocklist script {position: absolute !important;width: 100%;display: none !important;font-size: 100%;}
.blocklist table {font-size: 93%;padding: 6px 7px 6px 9px;width: 99% !important;border:0;position: relative;}
.blocklist table td {border:0;width: 100% !important;}
table.forformdata {width: 100% !important;}
table.forformdata td {border: 0 !important;}
.blocklist img {width: 100px !important;}
.blocklist h2 {text-align: center;}
.blocklist h3 {text-align: center;border-bottom: 1px solid #eaeaea;padding: 6px 7px 11px 7px;width: 96%;margin-bottom: 5px;}
.boxforpay {width:104% !important;text-align: left;border-top: 1px solid #eaeaea;padding: 11px 7px 6px 7px;width: 96%;margin: 5px 0 0 -10px;}
.blocklist .readmore, .postfoot {margin: 13px 0 7px 0px;font-size: 69%;} .postfoot {border-top: 1px solid #eaeaea;padding: 8px 1px 4px 7px;text-align: right;position: absolute;} .postfoot span { margin-right: 9px; } .postfoot i {margin-right: 4px;}
        @media (min-width: 1110px) {
            .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 790px) and (max-width: 1110px) {
            ..blocklist {width: 44.4% !important;} .contentboxsforall .blocklist {width: 30% !important;} .blocklistbig {width:63%;}
        }

        @media (min-width: 0px) and (max-width: 790px) {
            .blocklist,.blocklistbig {width: 97% !important;} 
        }



@media print{ .kotakisian2 {margin:4px 0 9px 0px;width:auto !important;height:30px;padding:5px;background: #fff;color:#000;border:0;}
p:last-child {border-bottom:0px !important;}
ul,ol {margin:0 !important;}
.cetakankotak {border-bottom:1px solid #000;margin:0 auto 18px auto;padding-bottom:13px;width:96%;}
.cetakankotaklast {border:0;}
label {text-transform: capitalize;}

@page 
        {
            size: auto;   /* auto is the current printer page size */
            margin: 0mm;  /* this affects the margin in the printer settings */
        }
body {margin: 0px;}
}
label {color:#EC1C23 !important;text-shadow: 0 0 1px #eaeaea;}
</style>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>jquery.PrintArea.js"></script>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ ?> <link rel=preconnect href="sdk.minepi.com"crossorigin>
 <script src="https://sdk.minepi.com/pi-sdk.js"></script> <?php }; ?>
<script type="text/javascript" src="<?php echo $lokasiweb; ?>jamrud.js"></script>


<link rel="stylesheet" href="<?php echo $lokasiweb; ?>/plugins/dataTables/css/jquery.dataTables.min.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo $lokasiweb; ?>/plugins/dataTables/js/jquery.dataTables.min.js"></script>

<link rel="stylesheet" href="<?php echo $lokasiweb; ?>/plugins/dropdowncostum/chosen.css" type="text/css" media="all">
<script type="text/javascript" src="<?php echo $lokasiweb; ?>/plugins/dropdowncostum/chosen.jquery.min.js"></script>

<?php 
if (@$deweedysaghakey1!="") { ?>
<script>
var stopreloadwhengone="";
var settimingg=1000;
function actfornotfocus() {
stopreloadwhengone="stop";
//matrixreloader();
jQuery("#onlinecounted").load('<?php echo $lokasiweb; ?>?docommand=cekwhoisonoff');
settimingg=10000;
return false;
}
function actfornotfocusforchatbox() {
stopreloadwhengone="stop";
//matrixreloader();
return false;
}
function actforonfocus() {
stopreloadwhengone="";
settimingg=1000;
matrixreloader();
reloadselectorforchat();
return false;
}
function matrixreloader() {
if (actforonfocus!="stop") {
jQuery("#onlinecounted").load('<?php echo $lokasiweb; ?>?docommand=cekwhoisonoff&metodz=ceks');
//setTimeout("matrixreloader()", settimingg);
}
else
{jQuery("#onlinecounted").load('<?php echo $lokasiweb; ?>?docommand=cekwhoisonoff');return false;}
}
 var cekketinggan=0;
function bukaataugk(todo="") {
if (todo=="buka")
{ reloadselectorforchat();
matrixreloader();
jQuery(".forfront").hide();jQuery(".mainboxofchat").show("slow");
}
else
{matrixreloader();jQuery(".mainboxofchat").hide();jQuery(".forfront").show();}
return false;
}
function reloadselectorforchat() {
jQuery("#boxofswitchchatoofuser").load('<?php echo $lokasiweb; ?>?docommand=cekwhoisonoff&metodz=loadforselect&selectz='+jQuery("#boxofswitchchatoofuser").val());
loadtochitchatbox();
return false;
}
function loadtochitchatbox() {
if ((stopreloadwhengone=="stop")&&(jQuery("#boxofswitchchatoofuser").val()!="")) {
return false;
}
if (jQuery("#boxofswitchchatoofuser").val()=="")
{jQuery("#chatzisi").html();return false;}
nu = new Date();
hr = nu.getHours();
min = nu.getMinutes();
sec = nu.getSeconds();
var getall="";
if(hr<="9"){hr = "0" + hr;} else {hr = "" + hr;}
if(min<="9"){min = "0" + min;} else {min = "" + min;}
if(sec<="9"){sec = "0" + sec;} else {sec = "" + sec;}
hrc = hr.substring(0,1);
hrd = hr.substring(1,2);
ex = "" + hrc + "" + hrd;
minc = min.substring(0,1);
mind = min.substring(1,2);
x2 = "" + minc +"" + mind;
secc = sec.substring(0,1);
secd = sec.substring(1,2);
z3 = "" + secc + "" + secd;
getall=ex+":"+x2+":"+z3;
jQuery("#chatzisi").load('<?php echo $lokasiweb; ?>?docommand=loadisianchat&selectz='+jQuery("#boxofswitchchatoofuser").val()+"&tameng="+getall);
return false;
}
function hapussorotasemen() {
jQuery(".sorotansemen").removeClass("sorotansemen");
}
function thisreplyfor(argument="") {
if (argument=="")
    {return false;}
jQuery(".sorotansemen").removeClass("sorotansemen");
jQuery("#chatboxfor"+argument).addClass("sorotansemen");
jQuery("#focusonchatboxfor"+argument).focus();
}
</script>
<?php }; ?>
</head>
<body id="the7-body" class="deweedy-scrollbar home page-template page-template-elementor_header_footer page page-id-9428 wp-custom-logo wp-embed-responsive theme-dt-the7 the7-core-ver-2.7.2 woocommerce-js dt-responsive-on right-mobile-menu-close-icon ouside-menu-close-icon mobile-close-right-caption fade-thin-mobile-menu-close-icon fade-medium-menu-close-icon srcset-enabled btn-flat custom-btn-color custom-btn-hover-color first-switch-logo-left first-switch-menu-right second-switch-logo-left second-switch-menu-right right-mobile-menu layzr-loading-on popup-message-style the7-ver-11.5.0 elementor-default elementor-template-full-width elementor-clear-template elementor-kit-4 elementor-page elementor-page-9428 elementor-page-5343 no-mobile closed-overlay-mobile-header e--ua-blink e--ua-chrome e--ua-webkit" data-elementor-device-mode="desktop"  <?php echo (@$deweedysaghakey1===""?"":' onblur="actfornotfocus();" onload="actfornotfocus();" '); ?> onoffline="klooff();" ononline="kloonlagi();" >
<div id="tempconsole" style="width: 99% !important;min-height:1px;margin:5px 0px !important;position: absolute !important;z-index: -11 !important;opacity: 0 !important;"></div>

    <form id="testtts" style="display: none !important;">
    <textarea class="txt"></textarea>
    <div>
      <label for="rate">Rate</label><input type="range" min="0.5" max="2" value="0.5" step="0.1" id="rate">
      <div class="rate-value">1</div>
      <div class="clearfix"></div>
    </div>
    <div>
      <label for="pitch">Pitch</label><input type="range" min="0" max="2" value="0.9" step="0.1" id="pitch">
      <div class="pitch-value">1</div>
      <div class="clearfix"></div>
    </div>
    <select></select>
    <div class="controls">
      <button id="play" type="submit">Play</button>
    </div>
    </form>
    <script src="<?php echo $lokasiweb; ?>ucapkannn.js"></script>
<div id="aireloaders">

</div>
<style>
.pemetaankoordinat{margin-top:13px;padding-top:9px;border-top:1px solid #eaeaea;display: none;}
</style>
<script type="text/javascript">
 var globalusernamesz="";
 var globalusernamesztukformdaftar="";

var latz="<?php echo @expimpd(@lihatisikolomtertentu("nowilovemiyaryona","newloveer",@$deweedysaghakey1,"iwannakissher"),"**","","0x"); ?>"; 
var longz="<?php echo @expimpd(@lihatisikolomtertentu("nowilovemiyaryona","newloveer",@$deweedysaghakey1,"iwannakissher"),"**","","1x"); ?>";
var kodezpecahan="";
var kitishippecahan="";

function aturulangkodepos(boxofkodepos="",boxofcityname="") {
if ((boxofkodepos=="")||(boxofcityname==""))
{return false;}
if (latz!="") {
jQuery(boxofkodepos).val(kodezpecahan);
jQuery(boxofcityname).val(kitishippecahan);
}
}
function magicinmybones(bonlat="",bonlong="") {
if ((bonlat=="")||(bonlong==""))
{
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
return false;}
//jQuery("#justmeusos").attr("src","<?php echo $lokasiweb; ?>testmaps.php?dimanatuh=" + bonez.coords.latitude + "||" + bonez.coords.longitude);
jQuery.ajax({
  headers: { 'x-my-custom-header': 'localhost' },
crossDomain: true,
   dataType: 'jsonp',
              type: "GET",
              url: "https://api.opencagedata.com/geocode/v1/json?q="+bonlat+"+"+bonlong+"&key=03c48dae07364cabb7f121d8c1519492&no_annotations=1&language=en", 
              
              success: function(data){
                  if (data.status.code==200)
                  {
                      if (data.total_results>=1)
                      {
//                          jQuery("#addr").html(data.results[0].formatted);
                          kodezpecahan=data.results[0].formatted;
                           kodezpecahan=kodezpecahan.split(","); kodezpecahan=kodezpecahan[(parseFloat(kodezpecahan.length)-3)];
                          kitishippecahan=kodezpecahan.split(" "); kitishippecahan=kitishippecahan[(parseFloat(kitishippecahan.length)-1)];
                          kitishippecahan=kodezpecahan.split(kitishippecahan); kitishippecahan=kitishippecahan.join("");
                          kodezpecahan=kodezpecahan.split(kitishippecahan); kodezpecahan=kodezpecahan.join("");

                     if (isNaN(kodezpecahan)) {
                          kodezpecahan=data.results[0].formatted;
                           kodezpecahan=kodezpecahan.split(","); kodezpecahan=kodezpecahan[(parseFloat(kodezpecahan.length)-2)];
                          kitishippecahan=kodezpecahan.split(" "); kitishippecahan=kitishippecahan[(parseFloat(kitishippecahan.length)-1)];
                          kitishippecahan=kodezpecahan.split(kitishippecahan); kitishippecahan=kitishippecahan.join("");
                          kodezpecahan=kodezpecahan.split(kitishippecahan); kodezpecahan=kodezpecahan.join("");    
                      }

  //                        jQuery("#addr").html(jQuery("#addr").html()+"<br/>"+kodezpecahan+" "+kitishippecahan);
                      }
                      else
                      {
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda");
  //                        jQuery("#addr").html("Alamat tidak diketahui");
                      }
                  }
                  else
                  {
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda");
    //                  jQuery("#addr").html("Alamat tidak diketahui");
                  }
              },
              error: function(xhr, err){
latz=""; 
longz="";
kodezpecahan="";
kitishippecahan="";
alert("Terjadi Kegagalan Mendeteksi Lokasi Anda, saat ini fitur ini sedang diperbaiki");
//                  jQuery("#addr").html("Masih Error");
              }
          });
}
function dapetinnihlokz() {
<?php $agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)<2)&&(count($agenrahasiasaghaitx2)<2))
{ ?>    
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(tamp1ilinlokz);
setTimeout("dapetinnihlokz()", 1000);
  } else { 
alert("Pastikan pendeteksian lokasi di izinkan");
  }
<?php } else { ?> magicinmybones(latz,longz); <?php } ?>
}
function tamp1ilinlokz(bonez) {
if (latz==bonez.coords.latitude)
{return false;}
latz=bonez.coords.latitude; 
longz=bonez.coords.longitude;
magicinmybones(latz,longz);
}
jQuery(document).ready(function(){
dapetinnihlokz();
//alert("Warning!!! Your data almost reach maximum quota and server would be locked when reach maximum quota");
})

<?php
if (empty($deweedysaghakey1))
{ ?>function detectusn4low(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (jQuery("#"+boxtobox).val()=="")
{return false;}
tampungzuser=getdetectforinvalidsymb2(jQuery("#"+boxtobox).val());
jQuery("#"+boxtobox).val(tampungzuser);
}

function loadxvideos(boxtobox="") {
var tampungzuser="";
if (boxtobox=="")
{return false;}
if (boxtobox=="parentreloadedbecauseitslogin")
{
window.location.href='<?php echo $lokasiweb; ?>?page=memberarea';
return false;    
}
if (jQuery("#"+boxtobox).val()=="")
{ alert("Masukkan username terlebih dahulu"); jQuery("#"+boxtobox).focus();
return false;}
tampungzuser=getdetectforinvalidsymb3(jQuery("#"+boxtobox).val());
jQuery("#boxforxvideos").attr("src","<?php echo $lokasiweb; ?>saghatracez.php?outofbox="+tampungzuser);
jQuery("#boxforxvideos").show();
jQuery("#focusforfacedet"+boxtobox).focus();
jQuery("#"+boxtobox).val(tampungzuser);
//jQuery("#imgfrontdesk").hide();
}

<?php }; ?>

const Pi = window.Pi;
jQuery(document).ready(function() {
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)>1)||((count($agenrahasiasaghaitx2)>1)&&(@$_REQUEST["formwhats"]=="")))
{ ?>
        Pi.init({version:"2.0"});
        var xhr = new XMLHttpRequest();
        var t = ["username", "payments", "wallet_address"];

        function onIncompletePaymentFound(payment)
        {
            console.log(payment);
        };

        Pi.authenticate(t, onIncompletePaymentFound).then(function(auth){
         globalusernamesz=auth.user.username;
          jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+globalusernamesz, function(data){
          
          if (data!="")
          {
            <?php
            if ((@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="vendor")&&(@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"level_akun")!="donor"))
            { ?>
            globalusernamesz="";
            <?php }; ?>
             globalusernamesztukformdaftar=""; 
           }
          else
          {globalusernamesztukformdaftar=globalusernamesz;            
           globalusernamesz="";}
          })
          if (globalusernamesz!="")
          {jQuery("#globalpathforusernames").val(globalusernamesz);}
          else
            {jQuery("#globalpathforusernames").val(globalusernamesztukformdaftar);}
        }).catch(function(error)
        { globalusernamesz="";
            alert(error);
            console.error(error);
        });
<?php }; ?>
        jQuery("#aireloaders").load("<?php echo $lokasiweb; ?>speechRecognition.php?nextpart=welcomes&parttwo=<?php echo $sekarangdimana; ?>");
    })
</script>
<?php
$agenrahasiasaghaitx=@explode("PiBrowser",$_SERVER['HTTP_USER_AGENT']);$agenrahasiasaghaitx2=@explode("wv",$_SERVER['HTTP_USER_AGENT']);
if ((count($agenrahasiasaghaitx)<2)&&(count($agenrahasiasaghaitx2)<2)) {
 ?>
<div id="aibuttons" style="<?php echo (@$_REQUEST["formwhats"]==="desktop"?"display:none !important;":""); ?>width:41px;min-height: 9px;position: fixed;z-index: 9999;bottom:0;cursor: pointer;margin:0px 0 0px 3px;" onclick="ucaphasilnya();">
<img src="<?php echo $lokasiweb; ?>logoAI.png" style="width:100%;height: auto;"/>
</div>
<?php }; ?>
<input type="text" value="" id="globalpathforusernames" style="display:none;">
  <script type="text/javascript">
var kataumumnya="";
var kataumumnyawel="";
var globaltransisitext = "";
var cekkeamanannya="";
var carimencarilaporan="";
var ketahunselain="";
var datadates = new Date();
var daydates = "<?php echo date("d"); ?>";
var monthdates = "<?php echo date("m"); ?>";
var yeardates = "<?php echo date("Y"); ?>";
var hrdates = datadates.getHours();
var mindates = datadates.getMinutes();
var secdates = datadates.getSeconds();

    function ucapkeuenn() {
<?php if (($sekarangdimana=="beranda")||($sekarangdimana=="home")) { ?>
jQuery('#testtts textarea[class="txt"]').val(kataumumnya);
jQuery("#testtts").submit();
<?php }; ?>
}

    function ucaphasilnya() {
        mulaiindongwelcomes();
        kataumumnya=kataumumnya+globaltransisitext;
suarakansekarang();
}
async function suarakansekarang() {
    let all = kataumumnya;

    sentences = all.split(',');

    for (i = 0; i < sentences.length; i++) {
      await getNextAudio(sentences[i]);
    }

    async function getNextAudio(sentence) {
      console.log(sentence);
      let audio = new SpeechSynthesisUtterance(sentence);
      window.speechSynthesis.speak(audio);

      return new Promise(resolve => {
        audio.onend = resolve;
      });
    } 
  } 
    jQuery(document).ready(function() {
      if (jQuery('#testtts select').find(':selected').attr('data-lang')=="id-ID") {
 <?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{ if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
cekkeamanannya="Maaf, Silahkan lakukan Proses Verifikasi Akun Anda Terlebih Dahulu, Anda dapat kembali melakukan Check Out belanja Anda setelah status akun Anda Aktif";
<?php }
}
}
else
{ ?>cekkeamanannya="Maaf, Super Admin tidak diperbolehkan Melakukan Donasi";
 <?php }; ?>

              <?php
        if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
        { ?> 
        kataumumnyawel="<?php echo (@$deweedysaghakey1===""?"":"halo ".(@$deweedysaghakey1===mengacakstring("zuperadmin4piqr",5)?"Super Admin":@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"nama_lengkap_pioneer")).","); ?>selamat datang di Pi Quick Response";
         kataumumnya=kataumumnyawel+", ada yang bisa saya bantu?";
        <?php }
        else { ?>  kataumumnya="Selamat datang di Pi Quick Response, Maaf, Anda menggunakan perangkat lunak yang tidak mendukung untuk mendengar perintah suara Anda, jadi saya akan menggunakan bantuan teks, jadi ada yang bisa saya bantu?";
        <?php } ?>

      }
      else
      {
<?php $tabletarget="data_pioneerweb";
if (@$deweedysaghakey1!=mengacakstring("zuperadmin4piqr",5))
{ if (!empty($deweedysaghakey1))
{ if (@lihatisikolomtertentu($tabletarget,"dataidutama_pioneer",@$deweedysaghakey1,"status_pioneer")=="unverified") { ?>
cekkeamanannya="Sorry, please carry out your account verification process first, you can check out your donating again after your account status is active.";
<?php }
}
}
else
{ ?>cekkeamanannya="Sorry, Super Admin are not allowed to make any donation";
 <?php }; ?>
      <?php
        if (@count(@explode("Chrome",@$_SERVER['HTTP_USER_AGENT']))>1)
        { ?> 
        kataumumnyawel="<?php echo (@$deweedysaghakey1===""?"":"Hello ".(@$deweedysaghakey1===mengacakstring("zuperadmin4piqr",5)?"Super Admin":@lihatisikolomtertentu("data_pioneerweb","dataidutama_pioneer",@$deweedysaghakey1,"nama_lengkap_pioneer")).","); ?>Welcome to  Pi Quick Response";
         kataumumnya=kataumumnyawel+", how can I help you?";
        <?php }
        else { ?>  kataumumnya="Welcome to  Pi Quick Response, I'm Sorry, You're using unsupported software to hear your voice command, so i gonna use text helper, so how can I help you?";
        <?php } ?>

      }
      jQuery('#testtts textarea[class="txt"]').val(kataumumnya);
    })


  </script>
<script>
function klooff() {
jQuery("#globalbigbox").hide();
jQuery("#untukoffaja").show("slow");
}
function kloonlagi() {
jQuery("#untukoffaja").hide();
jQuery("#globalbigbox").show();
}
</script>
<div id="untukoffaja" style="display:none;margin:0 !important;padding:0 !important;clear:both;"><h1 style="width:100%;padding-top:13vh;text-align:center;">Koneksi Internet Anda terputus atau sedang tidak stabil</h1></div>
<div id="globalbigbox" style="margin:0 !important;padding:0 !important;clear:both;">
<?php 
if (@$deweedysaghakey1!="") { ?>
<style>
.chatxbox {-webkit-transition:all .5s ease-in-out ;-moz-transition:all .5s ease-in-out ;width: auto;cursor:pointer;background:var(--purpletrans90);min-height: 10px;max-height: 84%;margin:0px;padding:7px !important;overflow-x:hidden !important;overflow-y:auto !important;position: fixed;z-index: 9999;right:0;bottom:0;border:1px solid rgba(252,179,76,0.9);border-right: 0;border-bottom: 0; color:#fff;font-size: 90% !important;}
.mainboxofchat {width:82vw;min-height:50%;display:none;}
#chatzisi {width:98% !important;padding: 7px;background: #fff;margin:5px 0;overflow-x:hidden;overflow-y:auto !important;min-height: 27vh;max-height: 58vh;}
#chatertextbox {width:99% !important;padding:7px;background: #fff;color:#000;}
#boxofswitchchatoofuser {width:87% !important;}
.mainboxofchat .form-fields:first-child {width:93% !important;display: inline-flex !important;margin-left:-12px;vertical-align: top !important;} 
.mainboxofchat .form-fields:last-child {width:6% !important;display: inline-flex !important;padding: 17px 0 0 10px;vertical-align: top !important;}
#chatzisi div.rootbox {padding:6px 5px;margin-top:-20px;border-bottom:1px dashed var(--purpletrans90);color:#000 !important;width:98% !important;}
#chatzisi div.rootbox:last-child {border-bottom:0;}
#chatzisi div.rootbox img {width: 99%;display:block;position:relative;margin:5px auto; }
#chatzisi div.littlenotifs {margin-top:8px;font-size: 50% !important;}
#chatzisi div.sorotansemen {background:var(--purpletrans70);}
@media (min-width:0px) and (max-width:1000px){
    .mainboxofchat .form-fields:first-child {width:77% !important;} .mainboxofchat .form-fields:last-child {width:20% !important;}
    #boxofswitchchatoofuser {width: 82.5% !important;}
    #chatzisi {width: 93.5% !important;}
}
</style>
<div class="chatxbox forfront" onclick="bukaataugk('buka');">
Online: <span id="onlinecounted">0</span>
</div>

<div class="chatxbox mainboxofchat" onfocus="actforonfocus();" onkeyup="actforonfocus();"  onmouseover="actforonfocus();" onmouseout="actforonfocus();">
<select class="deweedycustom validate[required]" id="boxofswitchchatoofuser" >
</select> <i title='close chat box' class='calactdanger fas fa-minus' style='cursor:pointer;padding:9px !important;margin-left: 15px !important;'  onclick="bukaataugk('gk');"></i>
<div id="chatzisi">

</div>
<script type="text/javascript">
    function dorepling(datax="") {
        jQuery("#boxforshoetempe").html(jQuery("#showtempeof"+datax).html());
        jQuery("#boxforrepplying").val(datax);
        jQuery("#boxforshoetempe").show();
        jQuery("#chatertextbox").focus();
        jQuery("#boxtochat").val(jQuery("#boxofswitchchatoofuser").val());
    }
    function typimychat() {
        jQuery("#boxtochat").val(jQuery("#boxofswitchchatoofuser").val());
      jQuery("#coredetailingtypo").val(jQuery("#chatertextbox").html());
    }
    function kirim2pesannya() {
nu = new Date();
hr = nu.getHours();
min = nu.getMinutes();
sec = nu.getSeconds();
var getall="";
if(hr<="9"){hr = "0" + hr;} else {hr = "" + hr;}
if(min<="9"){min = "0" + min;} else {min = "" + min;}
if(sec<="9"){sec = "0" + sec;} else {sec = "" + sec;}
hrc = hr.substring(0,1);
hrd = hr.substring(1,2);
ex = "" + hrc + "" + hrd;
minc = min.substring(0,1);
mind = min.substring(1,2);
x2 = "" + minc +"" + mind;
secc = sec.substring(0,1);
secd = sec.substring(1,2);
z3 = "" + secc + "" + secd;
getall=ex+":"+x2+":"+z3;

        jQuery.post('<?php echo $lokasiweb; ?>?docommand=savechatbro&formname=inputanchateran'+"&tameng="+getall,jQuery("#formchattochats").serialize(), function(data){
stopreloadwhengone="";
settimingg=1000;
matrixreloader();
reloadselectorforchat();
hapusanchaterbox();
return false;
        });
        return false;
    }
    function hapusanchaterbox() {
        jQuery("#boxtochat").val(jQuery("#boxofswitchchatoofuser").val());
        jQuery("#boxforshoetempe").hide();
        jQuery("#boxforshoetempe").html("");
        jQuery("#boxforrepplying").val("");
        jQuery("#chatertextbox").html("");
        jQuery("#coredetailingtypo").val("");
        jQuery("#chatertextbox").focus();
    }
  </script>
<div style="min-height:30px;overflow-x: hidden;overflow-y:auto;border:1px solid #eaeaea;padding:5px;margin:13px 0 5px 0 !important;display: none;position:relative;background:#fff;color:#000;width:98.3%;" id="boxforshoetempe"></div>

<form style="padding: 0px 12px !important;margin-bottom: -4px !important;" class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formchattochats" onsubmit="kirim2pesannya(); return false;">

<div class="form-fields">
<div contenteditable="true" id="chatertextbox" onkeyup="typimychat();" onblur="typimychat();" style="min-height:30px;overflow-x: hidden;overflow-y:auto;border:1px solid #eaeaea;padding:5px;margin-top:13px !important;" class="deweedycustom">
</div>
<textarea id="coredetailingtypo" readonly style="display: none;" class="deweedycustom validate[required]" placeholder="<?php echo @ucwords(@expimpd($formsource2[$iloopform],"_"," "));?>" name="inputanchateran[]" ><?php echo @lihatisikolomtertentu($tabletarget,$formsource[0],$loadfromiddata,$formsource[$iloopform]); ?></textarea>
<input type="text" id="boxforrepplying" name="inputanchateran[]" value="" style="display: none;">
<input type="text" id="boxfromchat" value="<?php echo @$deweedysaghakey1; ?>" name="inputanchateran[]" style="display: none;"/> <input type="text" id="boxtochat" name="inputanchateran[]" value="" style="display: none;" >
</div>

<div class="form-fields">
    <button type="button" class="calactdanger" style="width: auto;padding:9px;border:0;border-radius:10% 0 0 10%;" onclick="hapusanchaterbox();"><i class='fas fa-eraser' style="color:#fff !important;"></i></button> <button type="submit" class="caleveact" style="width: auto;padding:9px;border:0;border-radius:0 10% 10% 0;"><i class='fas fa-mail-bulk' style="color:#fff !important;"></i></button></div>
</form>

</div>
<?php
};
?>
<style type="text/css">
    .lingkarankecil2 {
      background: #9D359B; 
      border-radius:80% !important;
      padding:1px 7px !important;
      border:1px solid #fff !important;
      width: auto !important;
      text-align: center !important;
      height:auto !important;cursor: pointer;
      display: inline-flex !important;color:#fff;
    }
    .lingkarankecil2:hover, .lingkarankecil2act {
      border:1px solid #F8AD42;color:#F8AD42;
      width: auto !important;
    }
  </style>
<script>

var tempclue="";var tempcluecount=0;
var globaldataof=""; var bycustomassign="";

function pingpong(loadbel="") {
if (loadbel=="")
  {return false;}
if (getdetectforinvalidsymb2(jQuery("#"+loadbel).val())=="")
  {return false;}
 jQuery.get('<?php echo $lokasiweb; ?>?docommand=waduhjanganlupa&dests='+getdetectforinvalidsymb2(jQuery("#"+loadbel).val()), function(hasilnya){
if (hasilnya!="")
  {alert(hasilnya);}
})
jQuery("#"+loadbel).val(getdetectforinvalidsymb2(jQuery("#"+loadbel).val()));
}

function dopictexhange(tagers="",tagers2="") {
      jQuery("#topdesk"+tagers).children("#mainboxfor"+tagers).attr("src",jQuery(".imgfor"+tagers2).attr("src"));
      jQuery(".button"+tagers).removeClass("lingkarankecil2act"); jQuery(".button"+tagers2).addClass("lingkarankecil2act");
    }

function salinkeclipboard(namakotak="") {
  if (namakotak=="")
    {return false;}
  var copyText = document.getElementById(namakotak);

  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices
  navigator.clipboard.writeText(copyText.value);

  // Alert the copied text
  if ((namakotak=="datawallet")||(namakotak=="datawalletx"))
  {alert("Id Wallet <?php echo $namapt; ?> berhasil disalin ke clipboard");}
  else
  {alert("Berhasil disalin ke clipboard");}
}
function recekusernames(datatarget="") {
var getusernametodoold="";
var getusernametodo="";
if (datatarget=="")
{return false;}
getusernametodo=jQuery("#"+datatarget).val();
if (getusernametodo=="")
    {return false;}
getusernametodo=getdetectforinvalidsymb3(getusernametodo);
jQuery("#"+datatarget).val(getusernametodo);
getusernametodoold=jQuery("#"+datatarget+"old").val();

if (getusernametodo!=getusernametodoold)
    {
            jQuery.get('<?php echo $lokasiweb; ?>?docommand=dorecheckusername&angkarupiah='+getusernametodo, function(data){
                if (data!="")
                {alert(data);jQuery("#"+datatarget).val("");jQuery("#"+datatarget).focus();}
            
            return false;
        });
}
return false;
}
function lakukanpengiriman(tujuan="",todo="") {
jQuery("#tempconsole").html(" .. Please Wait ..");
if ((tujuan=="")||(todo==""))
{return false;}
if (todo=="get")
{jQuery.get("<?php echo $lokasiweb; ?>"+tujuan, function(hasilnya){
if (hasilnya!="")
  {jQuery("#"+todo).html(hasilnya);}
return false;
});}
else
{
var formData = new FormData(jQuery('#'+tujuan)[0]);
    formData.append("upload_file", true);
jQuery('form input[type="submit"]').hide();
jQuery('form input[type="reset"]').hide();
jQuery('form input[type="button"]').hide();
jQuery.ajax({
            url: "<?php echo $lokasiweb; ?>mp3downloader.php",
            type: 'POST',
            async: true,
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            enctype: 'multipart/form-data',
            success: function(hasilnya){
            jQuery("#tempconsole").html(hasilnya);
            return false;
            },
        });
}

return false;
}
</script>
<div style="display: none;position: absolute;"><?php echo $shortdesc; ?>, <?php echo $namapt; ?> is located at <?php echo $alamat; ?> <br/><?php echo date("d F Y"); ?> - <span id="jm"><?php echo date("H"); ?></span>:<span id="mn"><?php echo date("i"); ?></span>:<span id="dk"><?php echo date("s"); ?></span></div>

<div style="position: absolute;opacity: 0;width:0;height: 0;"><?php $namawebsite; ?></div>

<div id="page" class="closed-mobile-header">
<a class="skip-link screen-reader-text" href="#content">Skip to content</a>
<div data-elementor-type="header" data-elementor-id="2900" class="elementor elementor-2900 elementor-location-header">
<section style="background:#562a79 !important; background: -moz-linear-gradient(left, #562a79, 0.4, #562a79, 0.7, #fcb34c, #fcb34c) !important; background: -webkit-gradient(linear,left top,right top,color-stop(0, #562a79),color-stop(0.4, #562a79),color-stop(0.7, #fcb34c),color-stop(1, #fcb34c)) !important; " class="elementor-section elementor-top-section elementor-element elementor-element-990c08a elementor-section-height-min-height elementor-section-content-middle elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="990c08a" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2af3c94" data-id="2af3c94" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-c4c398f icon-vertical-align-center elementor-widget__width-auto content-align-mobile-left elementor-widget-mobile__width-auto content-align-left icon-box-vertical-align-top icon-position-left elementor-widget elementor-widget-the7_icon_box_widget" data-id="c4c398f" data-element_type="widget" data-widget_type="the7_icon_box_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-wrapper the7-elementor-widget the7_icon_box_widget-c4c398f"> <div class="box-content-wrapper">
 <div class="box-content">
<h4 class="box-heading">
<a href="<?php echo $lokasiweb; ?>" style="color:#fcb24c;"><?php echo $namawebsite; ?> </a> </h4>
</div>
</div>
</div> </div>
</div>


</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-0b5a4d9" data-id="0b5a4d9" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-ca8bb24 elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="ca8bb24" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<a  class="elementor-icon" style="color:#562a79 !important;font-size:100% !important;" href="tel:<?php echo $notel; ?>"><i style="color:#562a79 !important;" class="fa fa-phone"></i>&nbsp; Call Us</a>

 </div>
</div>

</div>
</div>
</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-c39240b elementor-section-height-min-height elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-items-middle" data-id="c39240b" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no" style="background: url('<?php echo $lokasiweb; ?>box/piquickresponse.png') center no-repeat;width: 100% !important;text-align: center;">


</div>
</section>

<section class="elementor-section elementor-top-section elementor-element elementor-element-68b980d the7-e-sticky-row-yes elementor-hidden-tablet elementor-hidden-mobile elementor-section-boxed elementor-section-height-default elementor-section-height-default the7-e-sticky" data-id="68b980d" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;the7_sticky_row&quot;:&quot;yes&quot;,&quot;the7_sticky_row_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;the7_sticky_row_offset&quot;:0}" style="">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8013380" data-id="8013380" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-8911b8c items-decoration-yes sub-icon_align-side sub-menu-position-tablet-right sub-menu-position-mobile-justify decoration-fade decoration-position-top elementor-widget-tablet__width-auto horizontal-menu--dropdown-none parent-item-clickable-yes decoration-align%s-left decoration-align-height sub-menu-position-left dt-sub-menu_align-left sub-icon_position-right elementor-widget elementor-widget-the7_horizontal-menu" data-id="8911b8c" data-element_type="widget" data-settings="{&quot;dropdown&quot;:&quot;none&quot;,&quot;parent_is_clickable&quot;:&quot;yes&quot;}" data-widget_type="the7_horizontal-menu.default" style="--dynamic-submenu-content-width:1203.33px; --dynamic-submenu-content-left-offset:-30px; --dynamic-justified-submenu-left-offset:-60px; --scrollbar-width:17px;">
<div class="elementor-widget-container">
<div class="horizontal-menu-wrap"><nav class="dt-nav-menu-horizontal--main dt-nav-menu-horizontal__container justify-content-between widget-divider-">
    <ul class="dt-nav-menu-horizontal d-flex flex-row justify-content-between">
   
    <li class="<?php if (($sekarangdimana=="beranda")||($sekarangdimana=="home"))
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-home page_item page-item-363 menu-item-1124"><a href='<?php echo $lokasiweb; ?>?page=home' data-level='1'><i class="fa fa-home" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Home</span></span></a></li>
<?php if (@$deweedysaghakey1!="")
{ ?>
<li class="<?php if ($sekarangdimana=="donasiku")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=donasiku' data-level='1'><i class="fa fa-praying-hands" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Donasiku</span></span></a></li>
<?php }
else
{ ?>
<li class="<?php if (($sekarangdimana=="about")||($sekarangdimana=="gallery")||($sekarangdimana=="client")||($sekarangdimana=="contact"))
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-has-children menu-item-1123 has-children dt-mega-menu mega-full-width mega-column-4"><a href='<?php echo $lokasiweb; ?>?page=about' data-level='1'><i class="fa fa-address-card" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Tentang Kami</span></span></a></li>
<?php }; ?>

<li class="<?php if ($sekarangdimana=="event")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1120"><a href='<?php echo $lokasiweb; ?>?page=event' class=' mega-menu-img mega-menu-img-left' data-level='1'><i class="fas fa-folder-plus" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Respon Cepat</span></span></a></li>

<li class="<?php if ($sekarangdimana=="berita")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1120"><a href='<?php echo $lokasiweb; ?>?page=berita' class=' mega-menu-img mega-menu-img-left' data-level='1'><i class="fas fa-newspaper" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Berita</span></span></a></li>
<?php if (@$deweedysaghakey1!="")
{ ?>
<li class="<?php if ($sekarangdimana=="memberarea")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=memberarea' data-level='1'><i class="fa fa-key" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Member Area</span></span></a></li>
<li class=" menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?metode=logout' data-level='1'><i class="fa fa-power-off" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Log Out</span></span></a></li><?php }
else
{ ?>
<li class="<?php if ($sekarangdimana=="login")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=login' data-level='1'><i class="fa fa-key" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Login</span></span></a></li>
<?php }; ?>

 </ul>

</nav></div> </div>
</div>
</div>
</div>
<div style="opacity: 0 !important;" class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-61c2d0d" data-id="61c2d0d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-dcb8be6 elementor-widget__width-auto elementor-widget-divider--view-line elementor-widget elementor-widget-divider" data-id="dcb8be6" data-element_type="widget" data-widget_type="divider.default">
<div class="elementor-widget-container">
<div class="elementor-divider">
<span class="elementor-divider-separator">
</span>
</div>
</div>
</div>

</div>
</div>

</div>
</section>
<section style="background: #fff !important;box-shadow: 1px 0 10px 1px rgba(252,178,76,0.8);" class="elementor-section elementor-top-section elementor-element elementor-element-b7bafd1 the7-e-sticky-row-yes the7-e-sticky-effect-yes elementor-section-height-min-height elementor-hidden-desktop elementor-section-boxed elementor-section-height-default elementor-section-items-middle the7-e-sticky the7-e-sticky-active the7-e-sticky-effects" data-id="b7bafd1" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;the7_sticky_row&quot;:&quot;yes&quot;,&quot;the7_sticky_effects&quot;:&quot;yes&quot;,&quot;the7_sticky_row_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;the7_sticky_row_offset&quot;:0,&quot;the7_sticky_effects_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;the7_sticky_effects_offset&quot;:0}" style="position: absolute; margin-top: 0px; margin-bottom: 0px; top: 0px;">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-fa61cfb" data-id="fa61cfb" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-957e133 elementor-widget__width-auto elementor-widget-tablet__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="957e133" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<script>
function showboxmenu() {
    
    if (jQuery("#micdrop").css("display")=="none")
        {jQuery("#micdrop").show("slow");}
    else
        {jQuery("#micdrop").hide("slow");}
    return false;
}
</script>
<style type="text/css">
    .mobilemenuz:hover, .mobilemenuz *:hover,.mobilemenuz:hover * {background:#fdb24c !important;}

</style>
<div class="the7-icon-wrapper the7-elementor-widget"><span style="cursor: pointer;" class="elementor-icon mobilemenuz" onclick="return showboxmenu();"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 4h18v2H3V4zm0 7h12v2H3v-2zm0 7h18v2H3v-2z"></path></svg></span></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-d402caf" data-id="d402caf" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-7a7ade5 the7-img-sticky-size-effect-yes elementor-widget elementor-widget-image" data-id="7a7ade5" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<a style="margin-left: -9px;" href="<?php echo $lokasiweb; ?>">
<img style="height: 97% !important;width: auto !important;" src="<?php echo $lokasiweb; ?>box/piquickresponse.png" class="attachment-full size-full wp-image-11857" alt="" loading="lazy"> </a>
</div>
</div>
</div>
</div>

<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-b7b7b8c" data-id="b7b7b8c" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1a2af8f elementor-widget__width-auto elementor-align-center elementor-widget elementor-widget-the7_icon_widget" data-id="1a2af8f" data-element_type="widget" data-widget_type="the7_icon_widget.default">
<div class="elementor-widget-container">
<div class="the7-icon-wrapper the7-elementor-widget"><a style="font-size:100% !important;" class="elementor-icon" href="tel:<?php echo $notel; ?>">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 17.002a6.002 6.002 0 0 1-4.713 5.86l-.638-1.914A4.003 4.003 0 0 0 19.465 19H17a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h2.938a8.001 8.001 0 0 0-15.876 0H7a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-5C2 6.477 6.477 2 12 2s10 4.477 10 10V17.002zM20 17v-4h-3v4h3zM4 13v4h3v-4H4z"></path></svg>&nbsp; Call Us
</a> &nbsp;</div> </div>
</div>

</div>
</div>
</div>
<style type="text/css">
    #micdrop ul {padding: 17px !important;} #micdrop li {color:#562a79;border-bottom: 1px dashed #562a79;padding: 3px 11px 6px 13px;margin-bottom: 3px;} #micdrop li:last-child {border:0;}
     {color:#562a79;} #micdrop li a:hover,#micdrop .current-menu-item * {color:#fff !important;}
</style>
<div id="micdrop" style="display:none;width: 100%;position: absolute;min-height: 100px;background: rgba(252,178,76,0.95);">

<nav class="dt-nav-menu--main dt-nav-menu__container dt-sub-menu-display-on_item_click dt-icon-align-with_text dt-icon-position-right dt-sub-icon-position-right dt-sub-icon-align-with_text indicator-off" style="visibility: visible;"><ul class="dt-nav-menu">
 <li class="<?php if (($sekarangdimana=="beranda")||($sekarangdimana=="home"))
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-home page_item page-item-363 menu-item-1124"><a href='<?php echo $lokasiweb; ?>?page=home' data-level='1'><i class="fa fa-home" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Home</span></span></a></li>
<?php if (@$deweedysaghakey1!="")
{ ?>
<li class="<?php if ($sekarangdimana=="donasiku")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=donasiku' data-level='1'><i class="fa fa-praying-hands" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Donasiku</span></span></a></li>
<?php }
else
{ ?>
<li class="<?php if (($sekarangdimana=="about")||($sekarangdimana=="gallery")||($sekarangdimana=="client")||($sekarangdimana=="contact"))
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-has-children menu-item-1123 has-children dt-mega-menu mega-full-width mega-column-4"><a href='<?php echo $lokasiweb; ?>?page=about' data-level='1'><i class="fa fa-address-card" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Tentang Kami</span></span></a></li>
<?php }; ?>

<li class="<?php if ($sekarangdimana=="event")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1120"><a href='<?php echo $lokasiweb; ?>?page=event' class=' mega-menu-img mega-menu-img-left' data-level='1'><i class="fas fa-folder-plus" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Respon Cepat</span></span></a></li>

<li class="<?php if ($sekarangdimana=="berita")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1120"><a href='<?php echo $lokasiweb; ?>?page=berita' class=' mega-menu-img mega-menu-img-left' data-level='1'><i class="fas fa-newspaper" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Berita</span></span></a></li>
<?php if (@$deweedysaghakey1!="")
{ ?>
<li class="<?php if ($sekarangdimana=="memberarea")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=memberarea' data-level='1'><i class="fa fa-key" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Member Area</span></span></a></li>
<li class=" menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?metode=logout' data-level='1'><i class="fa fa-power-off" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Log Out</span></span></a></li><?php }
else
{ ?>
<li class="<?php if ($sekarangdimana=="login")
{ echo "menu-item menu-item-type-post_type current-menu-item current_page_item act first"; } ?> menu-item-object-page menu-item-1119"><a href='<?php echo $lokasiweb; ?>?page=login' data-level='1'><i class="fa fa-key" style="margin: 0px 6px 0px 0px;"></i><span class="menu-item-text"><span class="menu-text">Login</span></span></a></li>
<?php }; ?>

</ul></nav>

</div>
</section>
</div>

<div id="main" class="sidebar-none sidebar-divider-off">
<div class="main-gradient"></div>
<div class="wf-wrap">
<div class="wf-container-main">
<div id="content" class="content" role="main">
<div data-elementor-type="wp-page" data-elementor-id="9428" class="elementor elementor-9428">

<?php
if (($sekarangdimana=="beranda")||($sekarangdimana=="home"))
{ ?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-dfc06a3 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="dfc06a3" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4cea2e5" data-id="4cea2e5" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated e-swiper-container">
<div class="elementor-element elementor-element-8344ed5 bullets-etefu owl-carousel elementor-widget elementor-widget-the7-slider e-widget-swiper" data-id="8344ed5" data-element_type="widget" data-settings="{&quot;bullets_tablet&quot;:&quot;hide&quot;,&quot;transition_speed&quot;:750,&quot;infinite&quot;:&quot;yes&quot;,&quot;transition&quot;:&quot;slide&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;autoplay_speed&quot;:5000,&quot;arrows&quot;:&quot;always&quot;,&quot;bullets&quot;:&quot;show&quot;}" data-widget_type="the7-slider.default" style="opacity: 1;">
<div class="elementor-widget-container">
<div class="elementor-swiper">
<div class="elementor-slides-wrapper elementor-main-swiper swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-autoheight" style="cursor: grab;">
<div class="swiper-wrapper the7-elementor-slides" style="height: 560px; transform: translate3d(-5052px, 0px, 0px); transition-duration: 0ms;">

<?php $cekfoto=$cekfoto2="";
$querysql="select * from mediaeo order by waktueventz desc";
$hasil = queryuniverse($querysql); $loopid=1;
$jml=queryuniverse($querysql,"num");
if (($hasil)&&($jml))
{while($tampilkanperkolomdata=mysqli_fetch_array($hasil))
{ if (strtotime($tampilkanperkolomdata["waktueventz"])<strtotime(date("Y-m-d")))
{continue;}
$loopid=$loopid+1;
$cekfoto="box/evegate/".$tampilkanperkolomdata["kodeventz"].".jpg";
if ((file_exists($cekfoto)))
    {$cekfoto=$lokasiweb.$cekfoto;}
    else
    {$cekfoto=$lokasiweb."box/pisplashscreen.jpg";}
 ?>
<div class="elementor-repeater-item-8165dce swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1263px;"><div class="the7-swiper-slide-inner"> <div data-elementor-type="the7-slider" data-elementor-id="10684" class="elementor elementor-10684 the7-slide-content">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-<?php echo $tampilkanperkolomdata["kodeventz"]; ?> elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default" data-id="<?php echo $tampilkanperkolomdata["kodeventz"]; ?>" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e2b792b" data-id="2e2b792b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-fa6fe89 elementor-widget__width-initial elementor-widget-tablet__width-inherit animated-fast elementor-widget elementor-widget-heading animated fadeInLeft" data-id="fa6fe89" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:500,&quot;the7__animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default"><?php echo $tampilkanperkolomdata["namaeventz"]; ?></h3> </div>
</div>
<div class="elementor-element elementor-element-2fd74d54 elementor-widget__width-initial animated-fast elementor-widget elementor-widget-spacer animated fadeInLeft" data-id="2fd74d54" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:1000,&quot;the7__animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-261f382 elementor-widget__width-initial animated-fast elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor animated fadeIn" data-id="261f382" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:1500,&quot;the7__animation&quot;:&quot;fadeIn&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p><?php echo @ucwords(@expimpd(@expimpd($tampilkanperkolomdata["taglineeventz"],"||"," | #"),"-"," ")); ?></p>

<span style="font-size:12px !important;">  <?php $tanggaltujuan=dapatkantanggaltujuan($tampilkanperkolomdata["waktueventz"],$tampilkanperkolomdata["durasievent"]);
  echo date("d",strtotime($tampilkanperkolomdata["waktueventz"]))." ".monthtobulan(date("m",strtotime($tampilkanperkolomdata["waktueventz"])))." ";
  if (date("Y",strtotime($tanggaltujuan))!=date("Y",strtotime($tampilkanperkolomdata["waktueventz"])))
    {echo date("Y",strtotime($tampilkanperkolomdata["waktueventz"]))." - ";}
    else
    {echo " - ";}
  echo date("d",strtotime($tanggaltujuan))." ".monthtobulan(date("m",strtotime($tanggaltujuan)))." ".date("Y",strtotime($tanggaltujuan)); ?></span>
 </div>
</div>
<div class="elementor-element elementor-element-485a7da0 elementor-widget elementor-widget-spacer" data-id="485a7da0" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-1c37066 elementor-align-left animated-fast elementor-widget elementor-widget-the7_button_widget animated fadeInUp" data-id="1c37066" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:1500,&quot;the7__animation&quot;:&quot;fadeInUp&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="the7_button_widget.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper"><a href="<?php echo $lokasiweb."event/".$tampilkanperkolomdata["kodeventz"].".html"; ?>" class="box-button elementor-button elementor-size-lg">Learn more</a></div> </div>
</div>
</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-14c182a elementor-hidden-tablet elementor-hidden-mobile" data-id="14c182a" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-6820767f elementor-widget__width-auto animated-fast elementor-widget elementor-widget-image animated fadeIn" data-id="6820767f" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;the7__animation&quot;:&quot;fadeIn&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container">
<img decoding="async" src="<?php echo $cekfoto; ?>" title="<?php echo $tampilkanperkolomdata["namaeventz"]; ?>" alt="<?php echo $tampilkanperkolomdata["namaeventz"]; ?>"> </div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
 
<?php } }; ?> 

<div class="elementor-repeater-item-8165dce swiper-slide swiper-slide-active" data-swiper-slide-index="1" style="width: 1263px;"><div class="the7-swiper-slide-inner"> <div data-elementor-type="the7-slider" data-elementor-id="10684" class="elementor elementor-10684 the7-slide-content">
<div class="elementor-section-wrap">
<section class="elementor-section elementor-top-section elementor-element elementor-element-6942c263 elementor-section-height-min-height elementor-section-items-stretch elementor-section-content-bottom elementor-section-boxed elementor-section-height-default" data-id="6942c263" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2e2b792b" data-id="2e2b792b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-fa6fe89 elementor-widget__width-initial elementor-widget-tablet__width-inherit animated-fast elementor-widget elementor-widget-heading animated fadeInLeft" data-id="fa6fe89" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:500,&quot;the7__animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default"><span style="text-transform: capitalize !important;">Pi</span> Blockchain &amp; Community</h3> </div>
</div>
<div class="elementor-element elementor-element-2fd74d54 elementor-widget__width-initial animated-fast elementor-widget elementor-widget-spacer animated fadeInLeft" data-id="2fd74d54" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:1000,&quot;the7__animation&quot;:&quot;fadeInLeft&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-261f382 elementor-widget__width-initial animated-fast elementor-widget-tablet__width-inherit elementor-widget elementor-widget-text-editor animated fadeIn" data-id="261f382" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:1500,&quot;the7__animation&quot;:&quot;fadeIn&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p><?php echo $shortdesc; ?>!</p> </div>
</div>
<div class="elementor-element elementor-element-485a7da0 elementor-widget elementor-widget-spacer" data-id="485a7da0" data-element_type="widget" data-widget_type="spacer.default">
<div class="elementor-widget-container">
<div class="elementor-spacer">
<div class="elementor-spacer-inner"></div>
</div>
</div>
</div>

</div>
</div>
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-14c182a elementor-hidden-tablet elementor-hidden-mobile" data-id="14c182a" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-6820767f elementor-widget__width-auto animated-fast elementor-widget elementor-widget-image animated fadeIn" data-id="6820767f" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:100,&quot;the7__animation&quot;:&quot;fadeIn&quot;,&quot;_animation&quot;:&quot;none&quot;}" data-widget_type="image.default">
<div class="elementor-widget-container">
<img decoding="async" src="<?php echo $lokasiweb."box/pifront.jpg"; ?>"> </div>
</div>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div> 

</div>
<div class="swiper-pagination owl-dots swiper-pagination-clickable swiper-pagination-bullets"><button role="button" class="owl-dot" aria-label="Go to slide 1" tabindex="0"><span></span></button><button role="button" class="owl-dot active" aria-label="Go to slide 2" tabindex="0"><span></span></button><button role="button" class="owl-dot" aria-label="Go to slide 3" tabindex="0"><span></span></button></div>
<div class="the7-swiper-button the7-swiper-button-prev elementor-icon" tabindex="0" role="button" aria-label="Previous slide">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M10.828 12l4.95 4.95-1.414 1.414L8 12l6.364-6.364 1.414 1.414z"></path></svg> </div>
<div class="the7-swiper-button the7-swiper-button-next elementor-icon" tabindex="0" role="button" aria-label="Next slide">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M13.172 12l-4.95-4.95 1.414-1.414L16 12l-6.364 6.364-1.414-1.414z"></path></svg> </div>
<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
<section class="elementor-section elementor-top-section elementor-element elementor-element-b885f3c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b885f3c" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-13f7f1b" data-id="13f7f1b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-ff135d7 content-align-center icon-position-top icon-vertical-align-center icon-box-vertical-align-top elementor-widget elementor-widget-the7_icon_box_grid_widget" data-id="ff135d7" data-element_type="widget" data-widget_type="the7_icon_box_grid_widget.default">
<div class="elementor-widget-container">
<div class="the7-box-grid-wrapper the7-elementor-widget loading-effect-none the7_icon_box_grid_widget-ff135d7"> <div class="dt-css-grid">
<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=cepat-tanggap" class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M17.841 15.659l.176.177.178-.177a2.25 2.25 0 0 1 3.182 3.182l-3.36 3.359-3.358-3.359a2.25 2.25 0 0 1 3.182-3.182zM12 14v2a6 6 0 0 0-6 6H4a8 8 0 0 1 7.75-7.996L12 14zm0-13c3.315 0 6 2.685 6 6a5.998 5.998 0 0 1-5.775 5.996L12 13c-3.315 0-6-2.685-6-6a5.998 5.998 0 0 1 5.775-5.996L12 1zm0 2C9.79 3 8 4.79 8 7s1.79 4 4 4 4-1.79 4-4-1.79-4-4-4z"></path></svg>  </div>
</a> <div class="box-content">
<h4 class="box-heading">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=cepat-tanggap">Cepat Tanggap</a></h4>
<div class="box-description">Kami memiliki tim yang cepat tanggap untuk membantu yang membutuhkan dan cepat tanggap darurat bencana serta bantuan kemanusiaan.</div>
<a href="<?php echo $lokasiweb;?>?page=event&tagline=cepat-tanggap" class="pigoldbutton" style="padding:2px 4px !important;">Lihat</a>
</div>
</div>
</div> </div>
<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=solusi-terbaik" class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M9.973 18h4.054c.132-1.202.745-2.194 1.74-3.277.113-.122.832-.867.917-.973a6 6 0 1 0-9.37-.002c.086.107.807.853.918.974.996 1.084 1.609 2.076 1.741 3.278zM14 20h-4v1h4v-1zm-8.246-5a8 8 0 1 1 12.49.002C17.624 15.774 16 17 16 18.5V21a2 2 0 0 1-2 2h-4a2 2 0 0 1-2-2v-2.5C8 17 6.375 15.774 5.754 15zM13 10.004h2.5l-4.5 6v-4H8.5L13 6v4.005z"></path></svg></div>
</a> <div class="box-content">
<h4 class="box-heading">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=solusi-terbaik">Solusi Terbaik </a> </h4>
<div class="box-description">Kami selalu menghadirkan solusi terbaik terutama untuk para member kami yang merupakan para pioneer di PI Network Indonesia.</div>
<a href="<?php echo $lokasiweb;?>?page=event&tagline=solusi-terbaik" class="pigoldbutton" style="padding:2px 4px !important;">Lihat</a>
</div>
 </div>
</div> </div>
<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=bencana-alam" class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M16.596 1.04l6.347 6.346a.5.5 0 0 1-.277.848l-1.474.23-5.656-5.656.212-1.485a.5.5 0 0 1 .848-.283zM4.595 20.15c3.722-3.331 7.995-4.328 12.643-5.52l.446-4.018-4.297-4.297-4.018.446c-1.192 4.648-2.189 8.92-5.52 12.643L2.454 18.01c2.828-3.3 3.89-6.953 5.303-13.081l6.364-.707 5.657 5.657-.707 6.364c-6.128 1.414-9.782 2.475-13.081 5.303L4.595 20.15zm5.284-6.03a2 2 0 1 1 2.828-2.828A2 2 0 0 1 9.88 14.12z"></path></svg>
 </div>
</a> <div class="box-content">
<h4 class="box-heading">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=bencana-alam">Penanggulangan bencana alam </a> </h4>
<div class="box-description">Penanggulangan bencana alam di seluruh dunia, seperti gempa bumi, banjir bandang, letusan gunung berapi, dan tsunami secara cepat melalui partisipasi para pionir dunia.</div>
<a href="<?php echo $lokasiweb;?>?page=event&tagline=bencana-alam" class="pigoldbutton" style="padding:2px 4px !important;">Lihat</a>
</div>
</div>
</div> </div>
<div class="wf-cell shown">
<div class="the7-icon-box-grid"> <div class="box-content-wrapper">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=tumbuh-bersama" class="elementor-icon-div"> <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 22C6.477 22 2 17.523 2 12S6.477 2 12 2s10 4.477 10 10-4.477 10-10 10zm0-2a8 8 0 1 0 0-16 8 8 0 0 0 0 16zm-3.5-6H14a.5.5 0 1 0 0-1h-4a2.5 2.5 0 1 1 0-5h1V6h2v2h2.5v2H10a.5.5 0 1 0 0 1h4a2.5 2.5 0 1 1 0 5h-1v2h-2v-2H8.5v-2z"></path></svg> </div>
</a> <div class="box-content">
<h4 class="box-heading">
<a href="<?php echo $lokasiweb;?>?page=event&tagline=tumbuh-bersama">Tumbuh Bersama </a> </h4>
<div class="box-description">Kami mengajak para pioneer pi untuk mengembangkan pi dan menjadikan pi-nya sebagai lahan sedekah untuk kegiatan kemanusiaan.</div>
<a href="<?php echo $lokasiweb;?>?page=event&tagline=tumbuh-bersama" class="pigoldbutton" style="padding:2px 4px !important;">Lihat</a>
</div>
</div>
</div> </div>
</div>
</div> </div>
</div>
</div>
</div>
</div>
</section>
<?php
} else
{ if ((file_exists("partisian/".$sekarangdimana.".php"))&&($sekarangdimana!="index"))
{$nothintodo="";
?>
<section  class="elementor-section elementor-top-section elementor-element elementor-element-37009c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="37009c9" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f6c12d" data-id="4f6c12d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-widget-container">
<div style="width:100% !important;min-height: 100px;margin-top:-13px;">
<?php require ("partisian/".$sekarangdimana.".php");
?>
</div>
</div>
</div>
</div>
<div style="position: absolute;z-index: -1;width:250px;height: 250px;right: 0;bottom: 0;margin: 90px 0 0 30px !important;"><img src="<?php echo $lokasiweb; ?>box/piquickresponselogotrans13persen.png" style="position: absolute;z-index: -1;width:250px;height: auto;margin: 33px 0 0 30px !important;"/>
</div>
</section>

<?php }
else
{$nothintodo="no";
?>

<section class="elementor-section elementor-top-section elementor-element elementor-element-37009c9 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="37009c9" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4f6c12d" data-id="4f6c12d" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-cc46796 elementor-widget elementor-widget-heading" data-id="cc46796" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h3 class="elementor-heading-title elementor-size-default">Laman Website Tidak Ada!</h3> </div>
<div style="width:100%;min-height: 100px;">
    <p style="margin-top:30px;color:#562a79;">Mohon Maaf, sepertinya laman website yang Anda buka tidak ada di data kami</p>
</div>
</div>
</div>
</div>
</div>
<div style="position: absolute;z-index: -1;width:250px;height: 250px;right: 0;bottom: 0;margin: 90px 0 0 30px !important;"><img src="<?php echo $lokasiweb; ?>box/piquickresponselogotrans13persen.png" style="position: absolute;z-index: -1;width:250px;height: auto;margin: 33px 0 0 30px !important;"/>
</div>
</section>


<?php
}
}; ?>

</div>

</div>
</div>
</div>
</div>

<footer id="footer" class="footer solid-bg elementor-footer empty-footer">
<div class="wf-wrap">
<div class="wf-container-footer">
<div class="wf-container">
<div data-elementor-type="footer" data-elementor-id="752" class="elementor elementor-752 elementor-location-footer">
<section style="background: #562a79 url('<?php echo $lokasiweb; ?>box/footerbg.png') no-repeat; background-attachment: fixed; background-size: 100% 100%;" class="elementor-section elementor-top-section elementor-element elementor-element-68523834 elementor-section-height-min-height elementor-section-full_width elementor-section-height-default elementor-section-items-middle" data-id="68523834" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-no">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7df1c0f0" data-id="7df1c0f0" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<section style="margin-bottom: -1px !important;" class="elementor-section elementor-inner-section elementor-element elementor-element-9d317da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9d317da" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-adae421" data-id="adae421" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-98dc773 elementor-widget__width-auto elementor-widget elementor-widget-image" data-id="98dc773" data-element_type="widget" data-widget_type="image.default">
<div class="elementor-widget-container">
<img style="width:100% !important;;height: auto !important;margin-top: 18px !important;" src="<?php echo $lokasiweb; ?>box/pifooterbg.png" class="attachment-full size-full wp-image-10154" alt="" loading="lazy"> 

</div>
</div>
</div>
</div>

<div style="text-align: justify !important;" class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-691996b" data-id="691996b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-79e0bd8 elementor-widget elementor-widget-heading" data-id="79e0bd8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<div class="box-content">
<h4 class="box-heading" style="color:#fbb642 !important;padding-left: 27px;">
    <a class="elementor-icon-div" style="position: absolute;margin:6px 0 0 -27px;"> 
        <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width:19px !important;height:19px !important;"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12 23.728l-6.364-6.364a9 9 0 1 1 12.728 0L12 23.728zm4.95-7.778a7 7 0 1 0-9.9 0L12 20.9l4.95-4.95zM12 13a2 2 0 1 1 0-4 2 2 0 0 1 0 4z"></path></svg>&nbsp;  
</div>
</a>  Lokasi Kami
</h4>

<div class="box-description" style="padding-left: 4px;"><?php echo $alamat; ?></div>
</div>

 </div>
</div>

<div class="elementor-element elementor-element-734cf76 dt-nav-menu_align-left dt-sub-menu_align-left elementor-widget elementor-widget-the7_nav-menu" data-id="734cf76" data-element_type="widget" data-settings="{&quot;submenu_display&quot;:&quot;on_item_click&quot;}" data-widget_type="the7_nav-menu.default">
<div class="elementor-widget-container">
<iframe id="petaz" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.996269867687!2d107.00171541404451!3d-6.264219463068971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698d75923a4685%3A0x484dcd4a79a94a9f!2sSagha%20IT!5e0!3m2!1sid!2sid!4v1627431233027!5m2!1sid!2sid" width="100%" height="250px" frameborder="0" style="border:0;margin:0;" allowfullscreen></iframe>

 </div>
</div>
</div>
</div>

<div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-691996b" data-id="691996b" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-79e0bd8 elementor-widget elementor-widget-heading" data-id="79e0bd8" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

<div class="box-content">
<h4 class="box-heading" style="color:#fbb642 !important;padding-left: 27px;">
    <a class="elementor-icon-div" style="position: absolute;margin:6px 0 0 -27px;"> 
        <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width:19px !important;height:19px !important;"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22 17.002a6.002 6.002 0 0 1-4.713 5.86l-.638-1.914A4.003 4.003 0 0 0 19.465 19H17a2 2 0 0 1-2-2v-4a2 2 0 0 1 2-2h2.938a8.001 8.001 0 0 0-15.876 0H7a2 2 0 0 1 2 2v4a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-5C2 6.477 6.477 2 12 2s10 4.477 10 10V17.002zM20 17v-4h-3v4h3zM4 13v4h3v-4H4z"></path></svg>&nbsp;  
</div>
</a>  Hubungi Kami
</h4>

<div class="box-description" style="padding-left: 4px;">
<a href="tel:<?php echo $notel; ?>"><?php echo $notel; ?></a>
</div>
</div>

<div class="box-content" style="margin-top: 27px !important;">
<h4 class="box-heading" style="color:#fbb642 !important;padding-left: 27px;">
    <a class="elementor-icon-div" style="position: absolute;margin:6px 0 0 -27px;"> 
        <div class="elementor-icon">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="width:19px !important;height:19px !important;"><path fill="none" d="M0 0h24v24H0z"></path><path d="M3 3h18a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1zm17 4.238l-7.928 7.1L4 7.216V19h16V7.238zM4.511 5l7.55 6.662L19.502 5H4.511z"></path></svg>&nbsp;  
</div>
</a>  Email Kami
</h4>

<div class="box-description" style="padding-left: 4px;">
<a href="mailto:<?php echo $alamatemail; ?>"><?php echo $alamatemail; ?></a>
</div>
</div>

 </div>
</div>
<br/><br/>
<div style="margin-top: 36px !important;" class="elementor-element elementor-element-734cf76 dt-nav-menu_align-left dt-sub-menu_align-left elementor-widget elementor-widget-the7_nav-menu" data-id="734cf76" data-element_type="widget" data-settings="{&quot;submenu_display&quot;:&quot;on_item_click&quot;}" data-widget_type="the7_nav-menu.default">
<div class="elementor-widget-container">
<nav class="dt-nav-menu--main dt-nav-menu__container dt-sub-menu-display-on_item_click dt-icon-align-with_text dt-icon-position-right dt-sub-icon-position-right dt-sub-icon-align-with_text indicator-off" style="visibility: visible;"><ul class="dt-nav-menu">
    <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-10127 first depth-0"><a href="<?php echo $lokasiweb; ?>?page=tos" data-level="1"><span class="item-content"><span class="menu-item-text"><span class="menu-text">Syarat &amp; Ketentuan</span></span></span><span class="right next-level-button" data-icon="fas fa-caret-down"><i aria-hidden="true" class="open-button fas fa-caret-right"></i> <i aria-hidden="true" class="icon-active fas fa-caret-down"></i></span></a></li>
    <?php if (@$deweedysaghakey1=="")
{ ?>
    <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-10127 first depth-0"><a href="<?php echo $lokasiweb; ?>?page=daftar" data-level="1"><span class="item-content"><span class="menu-item-text"><span class="menu-text">Pendaftaran</span></span></span><span class="right next-level-button" data-icon="fas fa-caret-down"><i aria-hidden="true" class="open-button fas fa-caret-right"></i> <i aria-hidden="true" class="icon-active fas fa-caret-down"></i></span></a></li>
<?php }; ?>
    <li class="menu-item menu-item-type-post_type menu-item-object-services menu-item-10127 first depth-0"><a href="https://minepi.com/" data-level="1"><span class="item-content"><span class="menu-item-text"><span class="menu-text">PI Network</span></span></span><span class="right next-level-button" data-icon="fas fa-caret-down"><i aria-hidden="true" class="open-button fas fa-caret-right"></i> <i aria-hidden="true" class="icon-active fas fa-caret-down"></i></span></a></li>

    <li style="display: none;" class="menu-item menu-item-type-post_type menu-item-object-services menu-item-10127 first depth-0"><a href="<?php echo $lokasiweb; ?>?page=scan" data-level="1"><span class="item-content"><span class="menu-item-text"><span class="menu-text">QR Scanner</span></span></span></a></li>
     </ul></nav> </div>
</div>
</div>
</div>


</div>
</section>
<section class="elementor-section elementor-inner-section elementor-element elementor-element-bc3caa9 elementor-section-height-min-height elementor-reverse-mobile elementor-section-boxed elementor-section-height-default" data-id="bc3caa9" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-d1600a3" data-id="d1600a3" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-d7dcd80 elementor-widget elementor-widget-text-editor" data-id="d7dcd80" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
<p>&copy; Copyright | <?php echo $namapt; ?> | <?php
if (date("Y")<=2023)
{echo "2023";} 
else
{echo "2023 - ".date("Y");}
 ?>. All rights reserved.</p> </div>
</div>
</div>
</div>

</div>
</section>
</div>
</div>
</div>
</section>
</div>
</div>
</div>
</div>
</footer>

</div>


<script type="text/javascript">
		(function () {
			var c = document.body.className;
			c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
			document.body.className = c;
		})();
	</script>
<link rel="stylesheet" id="elementor-post-12396-css" href="./plugins/post-12396.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-image-box-widget-css" href="./plugins/the7-image-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-12410-css" href="./plugins/post-12410.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-10661-css" href="./plugins/post-10661.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-10684-css" href="./plugins/post-10684.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-10784-css" href="./plugins/post-10784.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9596-css" href="./plugins/post-9596.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9647-css" href="./plugins/post-9647.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9629-css" href="./plugins/post-9629.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-9083-css" href="./plugins/post-9083.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-search-form-widget-css" href="./plugins/the7-search-form-widget.min.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-4761-css" href="./plugins/post-4761.css" type="text/css" media="all">
<link rel="stylesheet" id="elementor-post-8312-css" href="./plugins/post-8312.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-woocommerce-e-cart-css" href="./plugins/the7-woocommerce-cart.min.css" type="text/css" media="all">
<link rel="stylesheet" id="e-animations-css" href="./plugins/animations.min.css" type="text/css" media="all">
<link rel="stylesheet" id="the7-e-sticky-effect-css" href="./plugins/the7-sticky-effects.min.css" type="text/css" media="all">
<script type="text/javascript" src="./plugins/main.min.js.download" id="dt-main-js"></script>
<script type="text/javascript" src="./plugins/jquery.blockUI.min.js.download" id="jquery-blockui-js"></script>
<script type="text/javascript" id="wc-add-to-cart-js-extra">
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/elementor-corporate\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/elementor-corporate\/?wc-ajax=%%endpoint%%&elementor_page_id=9428","i18n_view_cart":"View cart","cart_url":"https:\/\/the7.io\/elementor-corporate\/shop\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
/* ]]> */
</script>
<script type="text/javascript" src="./plugins/add-to-cart.min.js.download" id="wc-add-to-cart-js"></script>
<script type="text/javascript" src="./plugins/js.cookie.min.js.download" id="js-cookie-js"></script>
<script type="text/javascript" id="woocommerce-js-extra">
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/elementor-corporate\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/elementor-corporate\/?wc-ajax=%%endpoint%%&elementor_page_id=9428"};
/* ]]> */
</script>
<script type="text/javascript" src="./plugins/woocommerce.min.js(1).download" id="woocommerce-js"></script>
<script type="text/javascript" id="wc-cart-fragments-js-extra">
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/elementor-corporate\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/elementor-corporate\/?wc-ajax=%%endpoint%%&elementor_page_id=9428","cart_hash_key":"wc_cart_hash_a2084eee6ccaf795c45c737958633fd0","fragment_name":"wc_fragments_a2084eee6ccaf795c45c737958633fd0","request_timeout":"5000"};
/* ]]> */
</script>
<script type="text/javascript" src="./plugins/cart-fragments.min.js.download" id="wc-cart-fragments-js"></script>
<script type="text/javascript" src="./plugins/public.js.download" id="dt-demostand-public-js"></script>
<script type="text/javascript" src="./plugins/jquery-mousewheel.min.js.download" id="jquery-mousewheel-js"></script>
<script type="text/javascript" src="./plugins/custom-scrollbar.min.js.download" id="the7-custom-scrollbar-js"></script>
<script type="text/javascript" src="./plugins/the7-image-widget.min.js.download" id="the7-image-box-widget-js"></script>
<script type="text/javascript" src="./plugins/the7-simple-posts.min.js.download" id="the7-elements-simple-posts-js"></script>
<script type="text/javascript" src="./plugins/frontend-common.min.js.download" id="the7-elementor-frontend-common-js"></script>
<script type="text/javascript" src="./plugins/the7-horizontal-menu.min.js.download" id="the7_horizontal-menu-js"></script>
<script type="text/javascript" src="./plugins/the7-woocommerce-menu-cart.min.js.download" id="the7-woocommerce-menu-cart-js"></script>
<script type="text/javascript" src="./plugins/the7-slider.min.js.download" id="the7-slider-js"></script>
<script type="text/javascript" src="./plugins/the7-tabs-widget.min.js.download" id="the7-tabs-widget-js"></script>
<script type="text/javascript" src="./plugins/the7-simple-posts-carousel.min.js.download" id="the7-elements-simple-posts-carousel-js"></script>
<script type="text/javascript" src="./plugins/the7-vertical-menu.min.js.download" id="the7_nav-menu-js"></script>
<script type="text/javascript" src="./plugins/the7-search-form-widget.min.js.download" id="the7-search-form-widget-js"></script>
<script type="text/javascript" src="./plugins/the7-woocommerce-cart.min.js.download" id="the7-woocommerce-e-cart-js"></script>
<script type="text/javascript" src="./plugins/webpack-pro.runtime.min.js.download" id="elementor-pro-webpack-runtime-js"></script>
<script type="text/javascript" src="./plugins/webpack.runtime.min.js.download" id="elementor-webpack-runtime-js"></script>
<script type="text/javascript" src="./plugins/frontend-modules.min.js.download" id="elementor-frontend-modules-js"></script>
<script type="text/javascript" src="./plugins/regenerator-runtime.min.js.download" id="regenerator-runtime-js"></script>
<script type="text/javascript" src="./plugins/wp-polyfill.min.js.download" id="wp-polyfill-js"></script>
<script type="text/javascript" src="./plugins/hooks.min.js.download" id="wp-hooks-js"></script>
<script type="text/javascript" src="./plugins/i18n.min.js.download" id="wp-i18n-js"></script>
<script type="text/javascript" id="wp-i18n-js-after">
wp.i18n.setLocaleData( { 'text direction\u0004ltr': [ 'ltr' ] } );
</script>
<script type="text/javascript" id="elementor-pro-frontend-js-before">
var ElementorProFrontendConfig = {"ajaxurl":"https:\/\/the7.io\/elementor-corporate\/wp-admin\/admin-ajax.php","nonce":"18486484bd","urls":{"assets":"https:\/\/the7.io\/elementor-corporate\/wp-content\/plugins\/pro-elements\/assets\/","rest":"https:\/\/the7.io\/elementor-corporate\/wp-json\/"},"shareButtonsNetworks":{"facebook":{"title":"Facebook","has_counter":true},"twitter":{"title":"Twitter"},"linkedin":{"title":"LinkedIn","has_counter":true},"pinterest":{"title":"Pinterest","has_counter":true},"reddit":{"title":"Reddit","has_counter":true},"vk":{"title":"VK","has_counter":true},"odnoklassniki":{"title":"OK","has_counter":true},"tumblr":{"title":"Tumblr"},"digg":{"title":"Digg"},"skype":{"title":"Skype"},"stumbleupon":{"title":"StumbleUpon","has_counter":true},"mix":{"title":"Mix"},"telegram":{"title":"Telegram"},"pocket":{"title":"Pocket","has_counter":true},"xing":{"title":"XING","has_counter":true},"whatsapp":{"title":"WhatsApp"},"email":{"title":"Email"},"print":{"title":"Print"}},"woocommerce":{"menu_cart":{"cart_page_url":"https:\/\/the7.io\/elementor-corporate\/shop\/cart\/","checkout_page_url":"https:\/\/the7.io\/elementor-corporate\/shop\/checkout\/","fragments_nonce":"a4ec82942e"}},"facebook_sdk":{"lang":"en_US","app_id":""},"lottie":{"defaultAnimationUrl":"https:\/\/the7.io\/elementor-corporate\/wp-content\/plugins\/pro-elements\/modules\/lottie\/assets\/animations\/default.json"}};
</script>
<script type="text/javascript" src="./plugins/frontend.min.js.download" id="elementor-pro-frontend-js"></script>
<script type="text/javascript" src="./plugins/waypoints.min.js.download" id="elementor-waypoints-js"></script>
<script type="text/javascript" src="./plugins/core.min.js.download" id="jquery-ui-core-js"></script>
<script type="text/javascript" id="elementor-frontend-js-before">
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false,"isScriptDebug":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1101,"xl":1440,"xxl":1600},"responsive":{"breakpoints":{"mobile":{"label":"Mobile","value":767,"default_value":767,"direction":"max","is_enabled":true},"mobile_extra":{"label":"Mobile Extra","value":880,"default_value":880,"direction":"max","is_enabled":false},"tablet":{"label":"Tablet","value":1100,"default_value":1024,"direction":"max","is_enabled":true},"tablet_extra":{"label":"Tablet Extra","value":1200,"default_value":1200,"direction":"max","is_enabled":false},"laptop":{"label":"Laptop","value":1366,"default_value":1366,"direction":"max","is_enabled":false},"widescreen":{"label":"Widescreen","value":2400,"default_value":2400,"direction":"min","is_enabled":false}}},"version":"3.9.0","is_static":false,"experimentalFeatures":{"e_dom_optimization":true,"e_optimized_assets_loading":true,"a11y_improvements":true,"e_import_export":true,"e_hidden_wordpress_widgets":true,"theme_builder_v2":true,"landing-pages":true,"elements-color-picker":true,"favorite-widgets":true,"admin-top-bar":true,"kit-elements-defaults":true,"page-transitions":true,"notes":true,"form-submissions":true,"e_scroll_snap":true},"urls":{"assets":"https:\/\/the7.io\/elementor-corporate\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"viewport_tablet":1100,"body_background_background":"classic","active_breakpoints":["viewport_mobile","viewport_tablet"],"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description","woocommerce_notices_elements":[]},"post":{"id":9428,"title":"The7%3A%20Elementor%20Corporate%20%E2%80%93%20The7%20%E2%80%93%20Ultimate%20WordPress%20Theme","excerpt":"","featuredImage":false}};
</script>
<script type="text/javascript" src="./plugins/frontend.min.js(1).download" id="elementor-frontend-js"></script><span id="elementor-device-mode" class="elementor-screen-only"></span>
<script type="text/javascript" src="./plugins/elements-handlers.min.js.download" id="pro-elements-handlers-js"></script><svg style="display: none;" class="e-font-icon-svg-symbols"></svg>
<script type="text/javascript" src="./plugins/jquery-sticky.min.js.download" id="the7-e-sticky-js"></script>
<script type="text/javascript" src="./plugins/sticky-effects.min.js.download" id="the7-e-sticky-effect-js"></script>
<div class="the7-e-mini-cart-template">
<div class="the7-e-woo-cart-fragment the7-e-woo-cart-fragment-content the7-e-woo-cart-content the7-e-woo-cart-status-cart-empty"></div>         <div class="the7-e-woo-cart-fragment the7-e-woo-cart-fragment-subtotal">
                    </div>
		
</div>
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
<div class="pswp__bg"></div>
<div class="pswp__scroll-wrap">
<div class="pswp__container">
<div class="pswp__item"></div>
<div class="pswp__item"></div>
<div class="pswp__item"></div>
</div>
<div class="pswp__ui pswp__ui--hidden">
<div class="pswp__top-bar">
<div class="pswp__counter"></div>
<button class="pswp__button pswp__button--close" title="Close (Esc)" aria-label="Close (Esc)"></button>
<button class="pswp__button pswp__button--share" title="Share" aria-label="Share"></button>
<button class="pswp__button pswp__button--fs" title="Toggle fullscreen" aria-label="Toggle fullscreen"></button>
<button class="pswp__button pswp__button--zoom" title="Zoom in/out" aria-label="Zoom in/out"></button>
<div class="pswp__preloader">
<div class="pswp__preloader__icn">
<div class="pswp__preloader__cut">
<div class="pswp__preloader__donut"></div>
</div>
</div>
</div>
</div>
<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
<div class="pswp__share-tooltip"></div>
</div>
<button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)" aria-label="Previous (arrow left)">
</button>
<button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)" aria-label="Next (arrow right)">
</button>
<div class="pswp__caption">
<div class="pswp__caption__center"></div>
</div>
</div>
</div>
</div>


<div class=".mobile-sticky-sidebar-overlay"></div><div class="iso-preloader dt-posts-preload dt-posts-preload-active" style="display: none;"><div class="dt-posts-preload-activity"></div></div><script src="./plugins/dialog.min.js.download"></script><script src="./plugins/swiper.min.js.download"></script>
</section>
</div>
</body></html>
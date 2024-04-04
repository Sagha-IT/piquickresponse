<?php
if (empty($namawebsite))
{die();}
?>
<?php if (@$deweedysaghakey1!="")
{ ?> <script>
jQuery(document).ready(function() {
window.location.href='<?php echo $lokasiweb; ?>?page=<?php echo (@$_REQUEST["formwhats"]==="desktop"?"forkasir&formwhats=desktop":"memberarea");  ?>';
})
</script>
	<?php };  

if($runonmobile!="mobile")
{ ?>
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;">Welcome Back</h2>
<br/><br/>
 <?php }; ?>
<section class="elementor-section elementor-top-section elementor-element elementor-element-baa22c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="baa22c3" data-element_type="section">
<div class="elementor-container elementor-column-gap-wider">
<div style="width: 80vw !important;" class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8d406a2" data-id="8d406a2" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-1ef7bc0 the7-e-tabs-nav-justify-fullwidth the7-e-tabs-view-horizontal icon-align-left elementor-widget elementor-widget-the7-tabs" data-id="1ef7bc0" data-element_type="widget" data-settings="{&quot;accordion_breakpoint&quot;:&quot;tablet&quot;}" data-widget_type="the7-tabs.default">
<div class="elementor-widget-container">

<script>
function lakukanloginfromlogin() { 
            jQuery.post('<?php echo $lokasiweb; ?>?docommand=loginbro&formname=inputandatafromlogin',jQuery("#formdaftarinfromlogin").serialize(), function(data){
            if (data=="")
            {alert("Akun Tidak ditemukan, Silahkan Ulangi");return false;} 
            alert(data);
            window.location.href='<?php echo $lokasiweb; ?>?page=<?php echo (@$_REQUEST["formwhats"]==="desktop"?"forkasir&formwhats=desktop":"memberarea");  ?>';
            return false;
        });
return false;
}

</script>
<form class="dt-contact-form dt-form privacy-form" method="post" enctype='multipart/form-data' id="formdaftarinfromlogin" onsubmit="lakukanloginfromlogin(); return false;">
<div class="form-fields">
<label >Username *</label><br/>
<input type="text" class="deweedycustom validate[required]" id="usernmboxfromloginboxs" placeholder="<?php echo (@$_REQUEST["formwhats"]==="desktop"?"Username untuk Kasir":"Username untuk Login saat pendaftaran *");  ?>" value="" name="inputandatafromlogin[]" required> <br/>
<label >Password *</label><br/><input type="password" class="deweedycustom validate[required]" placeholder="<?php echo (@$_REQUEST["formwhats"]==="desktop"?"Password":"Password untuk Login saat pendaftaran *");  ?>" name="inputandatafromlogin[]" value="" required> <br/>

<input type="submit" class="dt-btn dt-btn-m caleveact" value="Login" style="width:auto;"/> <input type="reset" class="dt-btn dt-btn-m caleve" value="Ulangi" style="width:auto;"/> <input type="button" class="dt-btn dt-btn-m calact" value="Reset Password" onclick="pingpong('usernmboxfromloginboxs');" style="width:auto;"/>
</div>
</form>


</div>
</div>
</div>
</div>
</div>
</section>

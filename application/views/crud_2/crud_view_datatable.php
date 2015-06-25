
    
<!--<div id="page-wrapper">
<div class="row">
    <?php // echo $output; ?>
</div>
</div>-->
<?php
$css = array(
    base_url('resources/bootstrap-3.2.0/css/bootstrap.min.css'),
    base_url('resources/sb_admin/css/plugins/metisMenu/metisMenu.min.css'),
    base_url('resources/sb_admin/css/sb-admin-2.css'),
    base_url('resources/sb_admin/font-awesome-4.1.0/css/font-awesome.min.css'),  
    base_url('resources/bootstrap-3.2.0/css/bootstrap-theme.css')
);
echo csslink($css);
    $js = array(
         base_url('assets/grocery_crud/themes/datatables/js/datatables.js'),
         base_url('assets/grocery_crud/js/jquery_plugins/jquery.easing-1.3.pack.js'),   
         base_url('resources/js/libs/jsPanel/source/AC_RunActiveContent.js'),
         base_url('resources/js/libs/jsPanel-bootstrap/source/jquery.jspanel.bs-1.4.0.min.js'),
    );
    echo jsload($js);  


?>
<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
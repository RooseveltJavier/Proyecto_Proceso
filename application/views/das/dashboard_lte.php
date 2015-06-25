
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Procesos</title>
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/timeline.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  
<!--    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />    
    <link href="<?= base_url('resources/AdminLTE-2.0.3') ?>/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('resources/AdminLTE-2.0.3') ?>/dist/css/skins/_all-skins.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('resources/AdminLTE-2.0.3') ?>/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
  -->
     <?php
        echo input(array('type'=>'hidden','id'=>'main_path','value'=>  base_url()));    
        $css = array(
//            base_url('resources/bootstrap-3.2.0/css/bootstrap.min.css'),
//            base_url('resources/sb_admin/css/plugins/metisMenu/metisMenu.min.css'),
//            base_url('resources/sb_admin/css/sb-admin-2.css'),
//            base_url('resources/sb_admin/font-awesome-4.1.0/css/font-awesome.min.css'),    
//            base_url('resources/bootstrap-3.2.0/css/bootstrap-theme.css'),
//            base_url('resources/js/libs/combobox/css/bootstrap-combobox.css'),    
            base_url('assets/grocery_crud/css/ui/simple/jquery-ui-1.10.1.custom.min.css'),   
            base_url('assets/grocery_crud/themes/datatables/css/demo_table_jui.css'),
            base_url('assets/grocery_crud/themes/datatables/css/datatables.css'),
            base_url('assets/grocery_crud/themes/datatables/css/jquery.dataTables.css'),
//            base_url('assets/grocery_crud/themes/datatables/extras/TableTools/media/css/TableTools.css'),
            base_url('resources/css/datepicker.css'),    
            base_url('resources/js/libs/sco.js/css/sco.message.css'),
            base_url('resources/js/libs/jsPanel-bootstrap/source/jsPanel.css'),
            base_url('resources/js/libs/autosuggest/css/style.css'),
            base_url('resources/js/libs/pick-a-color/build/1.2.3/css/pick-a-color-1.2.3.min.css'),
//            base_url('resources/css/style.css'),     
        );
        echo csslink($css);    
    
        $js = array(
            base_url('assets/grocery_crud/js/jquery-1.10.2.min.js'),
            base_url('assets/grocery_crud/js/jquery_plugins/jquery.noty.js'),
            base_url('assets/grocery_crud/js/jquery_plugins/config/jquery.noty.config.js'),
            base_url('assets/grocery_crud/js/common/lazyload-min.js'),
            base_url('assets/grocery_crud/js/common/list.js'),
            base_url('assets/grocery_crud/themes/datatables/js/jquery.dataTables.min.js'),
            base_url('assets/grocery_crud/themes/datatables/js/datatables-extras.js'),
            base_url('assets/grocery_crud/themes/datatables/extras/TableTools/media/js/ZeroClipboard.js'),
            base_url('assets/grocery_crud/themes/datatables/extras/TableTools/media/js/TableTools.min.js'),
            base_url('assets/grocery_crud/js/jquery_plugins/ui/jquery-ui-1.10.3.custom.min.js'),    
            base_url('resources/bootstrap-3.2.0/js/bootstrap.min.js'),
            base_url('resources/js/comunes/printThis.js'),
            base_url('resources/js/libs/sco.js/js/sco.valid.js'),
            base_url('resources/js/libs/sco.js/js/sco.modal.js'),
            base_url('resources/js/libs/sco.js/js/sco.message.js'),
            base_url('resources/js/libs/sco.js/js/sco.ajax.js'),
            base_url('resources/js/libs/jform/jquery.form.js'),
            base_url('resources/js/bootstrap-datepicker.js'),
            base_url('resources/js/bootstrap-datepicker.es.js'),
            base_url('resources/js/libs/autosuggest/bootstrap-typeahead.js'),
            base_url('resources/js/libs/autosuggest/hogan-2.0.0.js'),
            base_url('resources/js/libs/jsPanel/source/AC_RunActiveContent.js'),
            base_url('resources/js/libs/jsPanel-bootstrap/source/jquery.jspanel.bs-1.4.0.min.js'),              
            base_url('resources/js/libs/combobox/js/bootstrap-combobox.js'),
            base_url('resources/js/libs/numeric/jquery.numeric.js'),
            base_url('resources/js/libs/combobox/js/bootstrap-combobox.js'),    
            base_url('resources/js/libs/pick-a-color/build/dependencies/tinycolor-0.9.15.min.js'),    
            base_url('resources/js/libs/pick-a-color/src/js/pick-a-color.js'),    
            base_url('resources/js/comunes/jquery.blockUI.js'),     
            base_url('resources/js/modules/comunes.js'),
        //    base_url('resources/js/modules/ajuste_entrada.js'),
            base_url('resources/sb_admin/js/plugins/metisMenu/metisMenu.min.js'),
            base_url('resources/sb_admin/js/sb-admin-2.js'),
    base_url('resources/bootstrap-3.2.0/js/bootstrap.min.js'),
    base_url('resources/sb_admin/js/plugins/metisMenu/metisMenu.min.js'),
    base_url('resources/sb_admin/js/sb-admin-2.js'),    

        );
        echo jsload($js);    
    ?>
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
           <?php 
            echo $this->load->view('dasboard/navigation_lte','',TRUE);
            
            ?>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <!--<ul class="nav" id="side-menu">-->
                        
            
    <?php

    
        $open_content_div = '';
        $close_content_div = '';
                
                     
            if(!empty($slidebar)){                
                echo $slidebar;   
                $open_content_div = Open('div');
                $close_content_div = Close('div');                
            }
         echo $open_content_div;
        ?>


                    <!--</ul>-->
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <?php
                echo LineBreak(2);
                echo $view;
              ?>

            </div>
        </div>
        
      </div>
    
    <!--<script src="<?= base_url('resources/AdminLTE-2.0.3') ?>/dist/js/app.min.js" type="text/javascript"></script>-->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>

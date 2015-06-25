<?php

//$css = array(
//    base_url('resources/bootstrap-3.2.0/css/bootstrap.min.css'),
//    base_url('resources/sb_admin/css/plugins/metisMenu/metisMenu.min.css'),
//    base_url('resources/sb_admin/css/sb-admin-2.css'),
//    base_url('resources/sb_admin/font-awesome-4.1.0/css/font-awesome.min.css'),  
//    base_url('resources/bootstrap-3.2.0/css/bootstrap-theme.css')
//);
//echo csslink($css);

foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; 
            
        //echo Open('div', array('class'=>'row','id'=>'container-fluid'));
// echo Open('div', array('id'=>'page-wrapper'));
//        echo Open('div', array('class'=>'row'));
//        
//               echo $output; 
//        echo Close('div'); //cierra div .row
//echo Close('div'); //cierra div .row

$js = array(       
    base_url('resources/bootstrap-3.2.0/js/bootstrap.min.js'),
    base_url('resources/sb_admin/js/plugins/metisMenu/metisMenu.min.js'),
    base_url('resources/sb_admin/js/sb-admin-2.js'),    
);
echo jsload($js);
?>
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
               echo  $this->load->view('estudiantes/slidebar_lte','',TRUE);
              // print_r($jsA);
//            if(!empty($slidebar)){                
//                echo $slidebar;   
//        //        $open_content_div = Open('div');
//      //          $close_content_div = Close('div');                
//            } else{
//                echo 'no hay valor';
//            }
//        // echo $open_content_div;
        ?>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <?php
                echo LineBreak(2);
                echo $output; 
                ?>

            </div>
        </div>
        
      </div>
    
    <!--<script src="<?= base_url('resources/AdminLTE-2.0.3') ?>/dist/js/app.min.js" type="text/javascript"></script>-->
<!--    <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>
    <script src="../dist/js/sb-admin-2.js"></script>-->

</body>
    
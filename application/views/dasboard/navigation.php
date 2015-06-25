<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$title_mod = '';
if(!empty($module_title)){
    $title_mod = $module_title;
}
//echo input(array('type'=>'hidden', 'name'=>'numdecimales', 'id'=>'numdecimales', 'value'=>  get_settings('NUM_DECIMALES')));

?>
<style>
     .navbar-default {
            background-color: #bbb;
            border-color: #34b617;
    }
    
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
        border: 1px solid #bbb;
        color: #fff;
        font-weight: bold;
    }    
</style>
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;font-family: 'lucida grande',tahoma,verdana,arial,sans-serif">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" style="font-weight: bold; font-size: 38px" href="<?= base_url() ?>">B</a>
            </div>
            <!-- /.navbar-header -->

        <div class="navbar-collapse collapse">
          <?php
          if(!empty($top_nav_actions)){
                echo $top_nav_actions;              
          }
            $help_link = tagcontent('a', 'Ayuda', array('class'=>'navbar-link','target'=>'_blank','href'=> base_url('/help/')));    
            echo tagcontent('p', $help_link, array('class'=>'navbar-text navbar-right'));          
          ?>
            <!--<p class="navbar-text navbar-right"><a href="#" class="navbar-link">Ventas</a></p>-->
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff">
                        <i class="glyphicon glyphicon-th-list"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <?php
                            echo 'linea 1';
                            echo 'linea 2';
                            echo 'linea 3';
                            
                        ?>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="color: #fff">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i>dfdasd</a>
                        </li>
                        <li><a href="<?= base_url('login/editprofile') ?>"><i class="fa fa-gear fa-fw"></i> Configuraci&oacute;n</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=  base_url('login/welcome/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php
                if(!empty($slidebar)){
                    echo $slidebar;
                }
            ?>
            </div>            
        </nav>
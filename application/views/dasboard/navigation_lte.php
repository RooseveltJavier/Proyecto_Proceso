<style>
    .skin-blue .main-header .navbar {
        background-color:#fbcb09;
    } 
    .skin-blue .main-header .logo {
        background-color: #fbcb09;
        border-bottom: 0 solid transparent;
        color: #ffffff;
        font-weight: bold; font-size: 30px; text-decoration: none; 
        font-family: "lucida grande",tahoma,verdana,arial,sans-serif            
    }
    .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
       
        border: 1px solid #bbb;
        color: #fff;
        font-weight: bold;
    }      
</style>     
<header class="main-header">
        <!-- Logo -->
        <a class="logo" href="<?= base_url() ?>">GP_TESIS</a>        
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                  
                  <!-- Este menu se envia como parametro -->
              <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                 
                  <ul class="dropdown-menu">
                      
                            <?php
//                            if(!empty($top_nav_actions)){
//                                  echo $top_nav_actions;              
//                            }
                            ?>                      
                    <!-- User image -->
<!--                    <li class="user-header">
                      <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                      <p>
                        Alexander Pierce - Web Developer
                        <small>Member since Nov. 2012</small>
                      </p>
                    </li>-->
                    <!-- Menu Body -->
<!--                    <li class="user-body">
                      <div class="col-xs-4 text-center">
                        <a href="#">Followers</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Sales</a>
                      </div>
                      <div class="col-xs-4 text-center">
                        <a href="#">Friends</a>
                      </div>
                    </li>-->
                    <!-- Menu Footer-->
<!--                    <li class="user-footer">
                      <div class="pull-left">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                      </div>
                      <div class="pull-right">
                        <a href="#" class="btn btn-default btn-flat">Sign out</a>
                      </div>
                    </li>-->
                  </ul>
                </li>                  
                  <!---------------------------------------->               
                
              <!-- Notifications: style can be found in dropdown.less -->
              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-th-list"></i>
                  <!--<span class="label label-warning">10</span>-->
                </a>
                  
                <ul class="dropdown-menu">
                  <li class="header">Modulos Habilitados</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <?php
                   
                       ?>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?= base_url() ?>">Ver Todos</a></li>
                </ul>
              </li>

              <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="glyphicon glyphicon-user"></i>
                  <!--<span class="label label-warning">10</span>-->
                </a>
                  
                <ul class="dropdown-menu">
                  <li class="header">Opciones De Usuario</li>
                  <li>
                    <!-- inner menu: contains the actual data -->
                    <ul class="menu">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> <?=  $this->user->username ?></a>
                        </li>
                        <li><a href="<?= base_url('login/editprofile') ?>"><i class="fa fa-gear fa-fw"></i> Configuraci&oacute;n</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="<?=  base_url('login/welcome/logout') ?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                  </li>
                  <li class="footer"><a href="<?= base_url('login/editprofile') ?>">Mas Opciones</a></li>
                </ul>
              </li>
              <!-- Tasks: style can be found in dropdown.less -->
              </ul>
          </div>
        </nav>
      </header>
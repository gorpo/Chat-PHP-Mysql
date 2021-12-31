
<!-- @Gorpo Orko - 2020 -->




<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Corporate Smart Control</title>
  <meta property="og:site_name" content="Corporate Smart Control"/>
  <meta property="og:title" content="Corporate Smart Control"/>
  <meta property="og:url" content="https://corporatesmartcontrol.com/"/>
  <meta property="og:description" content="Corporate Smart Control"/>
  <meta property="og:image" content="assets/images/logo.svg"/>
  <link rel="shortcut icon" href="assets/images/icon.png" />
  <script src="https://kit.fontawesome.com/a80232805f.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Rubik&display=swap" rel="stylesheet">
  <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="assets/css/style_claro_cinza.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

  <link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js" rel="stylesheet">
<link href="vendor/twbs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/twbs/bootstrap/dist/js/bootstrap.bundle.js" rel="stylesheet">
    <!--Add jQuery library-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>















      <!-- Messages Dropdown Menu ------------------------------------------------------------------------------>

      


        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

          <script>
            //pega o nome da mensagem recebida e passa via cookies
            window.addEventListener('message', function(event) {
              if(event.origin === 'http://localhost/chat.php/')
              {
              alert('Received message: ' + event.data.message);
              }
              else
              {   
              document.cookie = "cookieName="+event.data.nomes+"";
              document.cookie = "cookieBtn="+event.data.botoes+"";
              var botoes = event.data.botoes;
              }
            }, true);

            //função que pega o nome dos cookies salvos
            function getCookie(name){
                var pattern = RegExp(name + "=.[^;]*")
                var matched = document.cookie.match(pattern)
                if(matched){
                    var cookie = matched[0].split('=')
                    return cookie[1]
                }
                return false
            }

            //função que ativ
            function abreChat(indice) {
            var cookie_btn = getCookie('cookieBtn').split(',')[indice];
            //alert(aaa);
            var iframe = document.getElementById("iframe1");
            var elmnt = iframe.contentWindow.document.getElementById(cookie_btn);
            elmnt.click();
          }
          </script>

          <?php 
          echo $_COOKIE['cookieBtn'];
          //recebe os cookies $_COOKIE['cookieName']
          $array_usuarios = explode(",",$_COOKIE['cookieName']);
          $calc = 0;
          foreach ($array_usuarios as $value) {
            echo ' <a href="#" class="dropdown-item" name="start_request"  onclick="abreChat('.$calc.')">
                    <div class="media">
                    <img src="images/1640838357-1948208017.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                    <div class="media-body">
                      <h3 class="dropdown-item-title">'.$value.'</h3>
                      <p class="text-sm">Texto aparecerá aqui.</p>
                      <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Horas</p>
                    </div>
                  </a></div><div class="dropdown-divider"></div>';
                  $calc = $calc +1;
          }
          ?>
          
        

          <a href="#" class="dropdown-item dropdown-footer">Ver todas as mensagens</a>
        </div>
      </li>
      











    


      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Widgets
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Layout Options
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Top Navigation + Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar-custom.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar <small>+ Custom Area</small></p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Charts
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ChartJS</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Flot</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/uplot.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>uPlot</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                UI Elements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Icons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Forms
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>General Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Advanced Elements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Tables
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Tables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>DataTables</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">EXAMPLES</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/gallery.html" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Gallery
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/kanban.html" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Kanban Board
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/faq.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>FAQ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contact-us.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contact us</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v1
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v1</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v1</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Login & Register v2
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="pages/examples/login-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Login v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/register-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Register v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/forgot-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Forgot Password v2</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/examples/recover-password-v2.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Recover Password v2</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-search"></i>
              <p>
                Search
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/search/simple.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Simple Search</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/search/enhanced.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enhanced</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="iframe.html" class="nav-link">
              <i class="nav-icon fas fa-ellipsis-h"></i>
              <p>Tabbed IFrame Plugin</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.1/" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


<!-- <iframe src="chat.html" id="iframe1" style="width: 100%; height: 1200px;"></iframe> -->




<div class="content"></div>

    <div class="container-fluid" id="minhaDiv">

      
        <div style="width: 300px; height: auto; z-index: 1; position:absolute; float: right; margin-bottom: 0; position: absolute; right: 0px; bottom: 0;">
    <div id="chat_msg_area1" class="pt-2 pb-2" style="height: 38vh;">
 
    <div class="card-header">
        <div class="row">
            <div class="col" id="chat_user_data1" style="margin-bottom: 7px;">
                <span  id="login_user_image"></span>
            </div>
            <div class="col"><button type="button" class="btn btn-danger btn-sm float-end" id="close_chat1" onclick="Mudarestado('minhaDiv')">Fechar</button>
        </div>
        <div id="notification_area" class=""></div>
        <div class="pt-4 pb-4 h-50 overflow-auto">
        <input type="text" name="search_people" id="search_people" class="form-control" placeholder="Procure usuário" autocomplete="off" />
        <div id="search_people_area" class="mt-3"></div>
    </div>
    Conecte-se
    <div  id="connected_people_area"></div>
    
                <div id="chat_area"></div></div>
<button type="hidden" class="btn btn-secondary btn-sm" id="setting_button">Setting</button>
<button type="hidden" class="btn btn-primary btn-sm" id="logout_button">Logout</button>
</div></div></div></div></div></div></div></div></div></div>




</body>
</html>




<style type="text/css">
    fab{
  position: fixed;
  bottom:10px;
  right:10px;
}
.fab button{
  cursor: pointer;
  width: 48px;
  height: 48px;
  border-radius: 30px;
  background-color: #cb60b3;
  border: none;
  box-shadow: 0 1px 5px rgba(0,0,0,.4);
  font-size: 24px;
  color: white;
    
  -webkit-transition: .2s ease-out;
  -moz-transition: .2s ease-out;
  transition: .2s ease-out;
}
.fab button.main{
  position: absolute;
  width: 60px;
  height: 60px;
  border-radius: 30px;
  background-color: #5b19b7;
  right: 0;
  bottom: 0;
  z-index: 20;
}
</style>

<div class="fab"  ontouchstart="">
  <button class="main" onclick="Mudarestado('minhaDiv')">💬</button>
</div>




<script>

    function Mudarestado(el) {
        var display = document.getElementById(el).style.display;
        if(display == "none")
            document.getElementById(el).style.display = 'block';
        else
            document.getElementById(el).style.display = 'none';
    }



function $(selector)
{
  return document.querySelector(selector);
}

check_login();

reset_chat_area();

var interval;

function check_login()
{
    fetch('backend/check_login.php').then(function(response){

        return response.json();

    }).then(function(responseData){

        if(responseData.user_name && responseData.image)
        {
           
            _('login_user_image').innerHTML = '<img src="'+responseData.image+'" class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"/>' +'' + responseData.user_name + '';

            load_chat_request();
        }
        else
        {
            window.location.href = 'index.html';
        }
    });
}

$('#logout_button').onclick = function(){
    var form_data = new FormData();

    form_data.append('action', 'logout');

    fetch('backend/logout.php', {

        method:"POST",

        body:form_data

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        window.location.href = 'index.html';

    });
}

$('#search_people').onkeyup = function(){
    var query = _('search_people').value;

    if(query.length > 2)
    {
        var form_data = new FormData();

        form_data.append('query', query);

        fetch('backend/search_user.php', {

            method:"POST",

            body:form_data

        }).then(function(response){

            return response.json();

        }).then(function(responseData){

            var html = '<div class="d-flex text-muted pt-3">';
            if(responseData.length > 0)
            {                
                for(var i = 0; i < responseData.length; i++)
                {
                    html += '<img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="images/'+responseData[i].ui+'" />';
                    html += '<div class="pb-4 mb-0 small lh-sm border-bottom w-100">';
                    html += '<div class="d-flex justify-content-between">';
                    html += '<strong class="text-gray-dark">'+responseData[i].un+'</strong>';
                    html += '<button type="button" name="chat_connect" class="btn btn-primary btn-sm chat_connect" id="'+responseData[i].uc+'">Conectar</button>'
                    html += '</div>';
                    html += '</div>';
                }
            }
            else
            {
                html += '<strong class="text-gray-dark">Não encontramos usuário com este nome.</strong>';
            }
            html += '</div>';

            _('search_people_area').innerHTML = html;

            if(responseData.length > 0)
            {
                $('.chat_connect').onclick = function(){

                    let uc = this.getAttribute('id');

                    send_request(uc);
                };
            }
        });
    }
};

function send_request(uc)
{
    $('#'+uc+'').disabled = true;

    var form_data = new FormData();

    form_data.append('uc', uc);

    form_data.append('action', 'send_request');

    fetch('backend/chat_request.php', {

        method:"POST",

        body:form_data

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        $('#'+uc+'').disabled = true;

        $('#'+uc+'').classList.add('btn-success');

        $('#'+uc+'').classList.remove('btn-primary');

        $('#'+uc+'').innerHTML = 'Request Send';

    });
}

load_chat_request();

function load_chat_request()
{
    var form_data = new FormData();

    form_data.append('action', 'load_request');

    fetch('backend/chat_request.php', {

        method:"POST",

        body:form_data

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        var html = '<div class="d-flex text-muted pt-3">';
        if(responseData.length > 0)
        {
            for(var i = 0; i < responseData.length; i++)
            {
                html += '<img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="images/'+responseData[i].ui+'" />';
                html += '<div class="pb-4 mb-0 small lh-sm border-bottom w-100">';
                html += '<div class="d-flex justify-content-between">';
                html += '<strong class="text-gray-dark">'+responseData[i].un+'</strong>';
                html += '<button type="button" name="accept_request" class="btn btn-primary btn-sm accept_request" id="'+responseData[i].rc+'">Aceitar</button>';
                html += '</div>';
                html += '</div>';
            }
        }
        else
        {   //por texto Sem solicitações de contato abaixo
            html += '<strong class="text-gray-dark"></strong>';
        }
        $('#notification_area').innerHTML = html;

        load_chat_connected_people();

        if(responseData.length > 0)
        {


            $('.accept_request').onclick = function(){

                let rc = this.getAttribute('id');

                accept_request(rc);

            };
        }

    });
}

function accept_request(rc)
{
    $('#'+rc+'').disabled = true;

    var form_data = new FormData();

    form_data.append('rc', rc);

    form_data.append('action', 'accept_request');

    fetch('backend/chat_request.php', {

        method:"POST",

        body:form_data

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        $('#'+rc+'').classList.add('btn-success');

        $('#'+rc+'').classList.remove('btn-primary');

        $('#'+rc+'').innerHTML = 'Accepted';

        load_chat_connected_people();

    });
}

load_chat_connected_people();

function load_chat_connected_people()
{
    var form_data = new FormData();

    form_data.append('action', 'load_connected_people');

    fetch('backend/chat_request.php', {

        method:"POST",

        body:form_data

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        var html = '';
        if(responseData.length > 0)
        {
            //pega o nome das pessoas e grava em um array que vai via cookies
            const array_nomes = [];
            const array_botoes = [];
            for(var i = 0; i < responseData.length; i++)
            {
                html += '<div class="d-flex text-muted pt-3">';
                html += '<img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="images/'+responseData[i].ui+'" />';
                html += '<div class="pb-4 mb-0 small lh-sm border-top w-100">';
                html += '<div class="d-flex justify-content-between">';
                html += '<strong class="text-gray-dark">'+responseData[i].un+'</strong>';
                html += '<button type="button" name="start_request" class="btn btn-warning btn-sm start_request" id="'+responseData[i].uc+'">Entrar</button>';
                html += '</div>';
                html += '</div></div>';
            

            }


           

        }
        else
        {
            html += '<strong class="text-gray-dark">Não encontramos usuários</strong>';
        }
        $('#connected_people_area').innerHTML = html;

        if(responseData.length > 0)
        {
            var elements = document.getElementsByClassName("start_request");

            //console.log(elements);
            for(var i = 0; i < elements.length; i++)
            {


                elements[i].onclick = function(){

                    let uc = this.getAttribute('id');

                    start_chat(uc);

                };
            }
        }
    });
}

function reset_chat_area()
{
    //var html = '<div class="row vh-100 align-items-center justify-content-center text-muted fw-bold">Selecione um usuário para iniciar o chat.</div>';
    //$('#chat_area').innerHTML = html;
    //clearInterval(interval);
}

function start_chat(uc)
{
    reset_chat_area();
    var html = '<div style="width: 300px; height: 850px; z-index: 9; position:absolute; float: right; margin-bottom: 0; position: absolute; right: 0px; bottom: 0;">';
    html += '<div id="chat_msg_area" class="pt-2 pb-2" style="height: 38vh;">';
    html += '<div class="card h-100">';
    html += '<div class="card-header"><div class="row"><div class="col" id="chat_user_data"></div><div class="col"><button type="button" class="btn btn-danger btn-sm float-end" id="close_chat">Fechar</button></div></div></div>';
    html += '<div class="card-body overflow-auto" id="chat_conversion"></div>';
    html += '<textarea rows="1" name="type_chat_message" id="type_chat_message" class="form-control" placeholder="Mensagem..." aria-label="Escreva sua mensagem..." aria-describedby="button-addon2"></textarea>';
    html += '<input type="hidden" name="hidden_receiver_id" id="hidden_receiver_id" value="'+uc+'" /><input type="hidden" id="hidden_last_chat_datetime" />';
    html += '<button class="btn btn-success" type="button" id="button-addon2">Enviar</button>';
    html += '</div>';
    html += '</div>';
 
    
    
    
    html += '</div>';
    $('#chat_area').innerHTML = html;

    fetch_chat_data(uc);


    //meu codigo----- que envia as mensagens com enter
    document.getElementById('type_chat_message')
    .addEventListener('keyup', function(event) {
        if (event.code === 'Enter')
        {
        var form_data = new FormData();

        form_data.append('action', 'send_chat');
        form_data.append('receiver_user_id', $('#hidden_receiver_id').value);
        form_data.append('msg', $('#type_chat_message').value);

        fetch('backend/chat_request.php', {
            method:"POST",
            body:form_data
        }).then(function(response){

            return response.json();

        }).then(function(responseData){
            $('#button-addon2').disabled = false;
            if(responseData.error != '')
            {
                alert(responseData.error);
            }
            else
            {
                $('#type_chat_message').value = '';
                //$('#chat_conversion').innerHTML += responseData.lc;
                //scroll_top();
            }

        });

        }
    });



    $('#close_chat').onclick = function(){
        $('#chat_area').innerHTML = '';
        reset_chat_area();
    };

    $('#close_chat1').onclick = function(){
        $('#chat_area1').innerHTML = '';
        reset_chat_area1();
    };

    $('#button-addon2').onclick = function(){

        $('#button-addon2').disabled = true;

        var form_data = new FormData();

        form_data.append('action', 'send_chat');

        form_data.append('receiver_user_id', $('#hidden_receiver_id').value);

        form_data.append('msg', $('#type_chat_message').value);

        fetch('backend/chat_request.php', {

            method:"POST",

            body:form_data

        }).then(function(response){

            return response.json();

        }).then(function(responseData){

            $('#button-addon2').disabled = false;

            if(responseData.error != '')
            {
                alert(responseData.error);
            }
            else
            {
                $('#type_chat_message').value = '';

                //$('#chat_conversion').innerHTML += responseData.lc;

                //scroll_top();
            }

        });
    };

    interval = setInterval(function(){

        fetch_chat_data(uc, $('#hidden_last_chat_datetime').value);

    }, 1000);
}

function fetch_chat_data(receiver_user_id, last_chat_datetime)
{
    var form_data = new FormData();

    form_data.append('action', 'load_chat');

    form_data.append('receiver_user_id', receiver_user_id);

    form_data.append('last_chat_datetime', last_chat_datetime);

    fetch('backend/chat_request.php', {

        method:"POST",

        body:form_data, 

        cache:"no-cache"

    }).then(function(response){

        return response.json();

    }).then(function(responseData){

        if(responseData.receiver_image && responseData.receiver_name)
        {
            $('#chat_user_data').innerHTML = '<div class="d-flex text-muted"><img class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" src="images/'+responseData.receiver_image+'" /><div class="mb-0 small lh-sm w-100 align-middle"><div class="d-flex justify-content-between"><strong class="text-gray-dark">'+responseData.receiver_name+'</strong></div></div></div>';
        }

        var chat_html = '';

        if(responseData.cm)
        {
            for(var i = 0; i < responseData.cm.length; i++)
            {
                if(responseData.cm[i].action == 'Send')
                {
                    chat_html += '<div class="card text-white bg-info mb-3 w-75 float-end">';
                    chat_html += '<div class="card-footer "><img src="images/'+responseData.sender_image+'" width="25" class="rounded-circle me-2" /><b>'+responseData.sender_name+'</b><br><div style="text-align: left">'+responseData.cm[i].msg+'</div></div>';
                    chat_html += '</div>';
                }
                else
                {
                    chat_html += '<div class="card text-white bg-dark mb-3 w-75">';
                    chat_html += '<div class="card-footer "><img src="images/'+responseData.receiver_image+'" width="25" class="rounded-circle me-2" /><b>'+responseData.receiver_name+'</b><br><div style="text-align: left">'+responseData.cm[i].msg+'</div></div>';

                    chat_html += '</div>';
                }
                
            }

            $('#hidden_last_chat_datetime').value = responseData.last_chat_datetime;

            if(last_chat_datetime == '')
            {
                $('#chat_conversion').innerHTML = chat_html;
            }
            else
            {
                $('#chat_conversion').innerHTML += chat_html;
            }

            scroll_top();
        }
        

    });
}



function scroll_top()
{
    $('#chat_conversion').scrollTop = $('#chat_conversion').scrollHeight;
}

function setting_page()
{
    var user_data = '';
    fetch('backend/fetch_user_data.php').then(function(response){

        return response.json();

    }).then(function(responseData){

        var html = '<div class="row vh-100 align-items-center justify-content-center"><div class="col col-sm-8 align-self-center"><span id="register_error"></span>';
        html += '<form class="p-4 p-md-5 border rounded-3 bg-light" id="setting" method="POST" enctype="multipart/form-data" autocomplete="off"><button type="button" class="btn-close float-end" id="close_setting_page" aria-label="Fechar"></button>';
        html += '<h1 class="display-6 fw-bold mb-4 text-center">Setting</h1>';
        html += '<div class="row">';
        html += '<div class="col-md-6">';
        html += '<div class="form-floating mb-3">';
        html += '<input type="text" class="form-control" id="user_first_name" placeholder="Nome" name="user_first_name" required autocomplete="off" value="'+responseData.ufn+'">';
        html += '<label for="user_first_name">Nome</label>';
        html += '</div>';
        html += '</div>';
        html += '<div class="col-md-6">';
        html += '<div class="form-floating mb-3">';
        html += '<input type="text" class="form-control" id="user_last_name" placeholder="Sobrenome" name="user_last_name" required autocomplete="off" value="'+responseData.uln+'">';
        html += '<label for="user_last_name">Sobrenome</label>';
        html += '</div>';
        html += '</div>';
        html += '</div>';
        html += '<div class="form-floating mb-3">';
        html += '<input type="email" class="form-control" id="user_email" placeholder="name@example.com" name="user_email" autocomplete="off" required value="'+responseData.ue+'">';
        html += '<label for="user_email">Email</label>';
        html += '</div>';
        html += '<div class="form-floating mb-3">';
        html += '<input type="password" class="form-control" id="user_password" placeholder="Senha" name="user_password" autocomplete="off" required value="'+responseData.up+'">';
        html += '<label for="user_password">Senha</label>';
        html += '</div>';
        html += '<div class="mb-3">';
        html += '<input type="file" name="user_image" id="user_image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required><input type="hidden" name="hidden_user_image" id="hidden_user_image" value="'+responseData.ui+'" /><br />';
        html += '<img src="images/'+responseData.ui+'" id="user_uploaded_image" class="img-fluid rounded mt-2 mb-1" />';
        html += '</div>';
        html += '<button class="w-100 btn btn-lg btn-primary" id="save_button" type="submit">Enviar</button>';
        html += '</form></div></div>';

        $('#chat_area').innerHTML = html;

        $('#close_setting_page').onclick = function(){
            reset_chat_area();
        }

        $('#save_button').onclick = function(){

            var form_data = new FormData($('#setting'));

            $('#save_button').disabled = true;

            $('#save_button').innerHTML = 'Aguarde...';

            fetch('backend/setting.php', {

                method:"POST",

                body:form_data

            }).then(function(response){

                return response.json();

            }).then(function(responseData){

                $('#save_button').disabled = false;

                $('#save_button').innerHTML = 'Save';

                if(responseData.error != '')
                {
                    var error = '<div class="alert alert-danger"><ul>'+responseData.error+'</ul></div>';
                    $('#register_error').innerHTML = error;
                }
                else
                {
                    $('#register_error').innerHTML = '<div class="alert alert-success">' + responseData.success + '</div>';

                    $('#user_image').value = '';

                    check_login();

                    $('#user_uploaded_image').src = 'images/'+responseData.ui+'';

                    $('#hidden_user_image').value = responseData.ui;

                }

                setTimeout(function(){

                    _('register_error').innerHTML = '';

                }, 10000);

            });
        }
        
    });

    
}

$('#setting_button').onclick = function(){

    reset_chat_area();

    setting_page();
};



function _(element)
{
    return document.getElementById(element);
}





</script>

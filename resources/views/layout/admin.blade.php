<!--
Bonjour {{ session('client')->prenom }}
<a href="/logout">Deconnection</a>
<br /> <br />
-->
@if (session('status'))
    <a href="/logout"> {{ session('status') }} </a>
@endif

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Accueil | IRTSS/ZIG</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="/backend/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/backend/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/backend/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="/backend/plugins/summernote/summernote-bs4.min.css">

    <!-- LINK DEPENDENCIES -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }} ">
    <!-- IonIcons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css')}} ">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    <!-- CDN BOOTSTRAP ICON -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>

        @yield('page-content')
        
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Image-->
            <a href="/home"> <img src="/backend/dist/img/senegal.png" width="30%"
                class="center mt-2" alt="">
            </a>
              <h3 class="text-center text-white">IRTSS / ZIG</h3>
            <p style="color:white; text-align:center">Inspection Régionale du Travail et de la Sécurité Sociale
                de Ziguinchor</p>
            <!-- Sidebar Menu -->
           <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                TABLEAU DE BORD
                <i class=""></i>
              </p>
            </a>
          </li>  
        <!-- DEBUT PLAINTE -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-arrow-down-right"></i>
              <p>
                LES PLAINTES
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/plainte" class="nav-link">
                  <i class="bi bi-arrow-right-short nav-icon"></i>
                  <p>Liste des plaintes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="bi bi-arrow-right-short nav-icon"></i>
                  <p>Ajouter une plainte</p>
                </a>
              </li>
            </ul>
          </li>
          <!-- FIN PLAINTES -->

          <!-- DEBUT CONVOCATIONS -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon bi bi-box-arrow-down-right"></i>
              <p>
                LES CONVOCATIONS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="bi bi-arrow-right-short nav-icon"></i>
                  <p>Liste des convocations</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="bi bi-arrow-right-short nav-icon"></i>
                  <p>Ajouter une convocation</p>
                </a>
              </li>
            </ul>
          </li>

          <!-- FIN CONVOCATIONS -->




          <!-- BOUTTON DE DECONNEXION -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/logout">
            <i class="bi bi-box-arrow-left"></i>
            <span class= "btn btn-danger">Se deconnecter</span>
          </a>
        </li>
      <!-- FIN BOUTTON DE DECONNEXION -->
        </ul>
      </nav>
            <!-- FIN DU SIDEBAR-->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper" style="background-color:white">
        </div>
        <!-- DEBUT DU FOOTER -->
        <footer class="main-footer">
          <strong>Copyright &copy; 2024 <a href="https://github.com/ashsthegeek">Birama DIOP</a>.</strong>
            <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 0.0.1
            </div>
        </footer>
        <!-- jQuery -->
        <script src="/backend/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="/backend/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="/backend/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="/backend/plugins/moment/moment.min.js"></script>
        <script src="/backend/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/backend/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="/backend/dist/js/adminlte.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="/backend/dist/js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/backend/dist/js/pages/dashboard.js"></script>
    </div>

    <style>
        .center {
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 65px;
        }
        nav, ul, li {
          list-style-type: none;
          padding: 5px;
        }
        
    </style>
</body>

</html>

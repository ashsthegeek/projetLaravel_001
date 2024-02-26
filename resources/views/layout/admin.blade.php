<!--
Bonjour {{ session('client')->prenom }}

<a href="/logout">Deconnection</a>

<br /> <br />
-->
@if (session('status'))
    <a href="/logout"> {{ session('status') }} </a>
@endif


<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Accueil | IRTSSZIG</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/backend/assets/img/favicon.png" rel="icon">
  <link href="/backend/assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Link Icon 8 -->
  

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/backend/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/backend/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/backend/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/backend/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/backend/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/backend/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/backend/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/backend/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Jan 29 2024 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Sidebar ======= -->
    @yield('page-content')
  <aside id="sidebar" class="sidebar">
    <a href="/home">
        <p class="text-center"><img src="/backend/assets/img/senegal.png" width="50%">
        </p>
    </a>
    <h4 class="text-center">IRTSS / ZIG</h4>
    <p class="text-center">Inspection Régional du Travail et de la Sécurité Sociale de Ziguinchor</p>

    <ul class="sidebar-nav" id="sidebar-nav">
      <li class="nav-item">
        <a class="nav-link " href="#">
          <i class="bi bi-grid"></i>
          <span>Tableau de bord</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

        <!-- DEBUT PLAINTE -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#plaintes-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-box-arrow-down-right"></i><span>LES PLAINTES</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="plaintes-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste des plaintes</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- FIN PLAINTES -->

      <!-- DEBUT CONVOCATIONS -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#convocations-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar-check"></i><span>LES CONVOCATIONS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="convocations-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste des convocations</span>
            </a>
          </li>
        </ul>
      </li>
      <!-- FIN CONVOCATON -->

      <!-- DEBUT REGLEMENT DU LITIGE -->
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#litige-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-book-half"></i><span>REGLEMENT DU LITIGE</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="litige-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste des convocations</span>
            </a>
          </li>

          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Accordion</span>
            </a>
          </li>
        </ul>
      </li>
        <!-- FIN REGLEMENT DU LITIGE -->

        <!-- DEBUT TRANSMISSION AU TRIBUNAL -->
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#transmissions-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-arrow-up-circle-fill"></i><span>TRANSMISSIONS</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="transmissions-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste des procés Verbal</span>
            </a>
          </li>
          
          <li>
            <a href="#">
              <i class="bi bi-circle"></i><span>Liste des procés Verbal</span>
            </a>
          </li>

        </ul>
      </li>

      <!-- FIN TRANSMISSION AU TRIBUNAL -->

      <!-- BOUTTON DE DECONNEXION -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="/logout">
          <i class="bi bi-box-arrow-left"></i>
          <span class= "btn btn-danger">Se deconnecter</span>
        </a>
      </li>
      <!-- FIN BOUTTON DE DECONNEXION -->
    </ul>
  </aside>
  <!-- FIN DU SIDEBAR-->

  <footer>
    <div class="fixed-bottom text-end p-3">
        © 2024 Copyright :
        <a class="text-black" href="https://github.com/ashsthegeek"> Birama DIOP</a>
    </div>
  </footer>


  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/backend/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/backend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/backend/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/backend/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/backend/assets/vendor/quill/quill.min.js"></script>
  <script src="/backend/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/backend/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/backend/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
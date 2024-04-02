<?php
include "connexion.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="assets/css/css" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
  
  <link href="assets/css/select2.min.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 10 2024 with Bootstrap v5.3.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<body>
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/logo.jpeg" alt="">
        <span class="d-none d-lg-block">Membre</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <span class="d-none d-lg-block"><h4>Membre</h4></span>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block ps-2">Administrateur</span>
          </a><!-- End Profile Iamge Icon -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="dashboard.php">
          <i class="bi bi-grid"></i>
          <span>Tableau de bord</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-house"></i><span>Association</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="AddAssociation.php">
              <i class="bi bi-circle"></i><span>Creer une association</span>
            </a>
          </li>
          <li>
            <a href="listAssociation.php">
              <i class="bi bi-circle"></i><span>Afficher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-people-fill"></i><span>Membres</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="createMember.php">
              <i class="bi bi-circle"></i><span>Ajouter un membre</span>
            </a>
          </li>
          <li>
            <a href="listMember.php">
              <i class="bi bi-circle"></i><span>Afficher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Forms Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-cash-stack"></i><span>Tontines</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="creerTontine.php">
              <i class="bi bi-circle"></i><span>Creer une tontine</span>
            </a>
          </li>
          <li>
            <a href="listTontine.php">
              <i class="bi bi-circle"></i><span>Afficher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Tables Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-hospital"></i><span>Assurance</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="enregistrerPaie.php">
              <i class="bi bi-circle"></i><span>Enregistrer</span>
            </a>
          </li>
          <li>
            <a href="listPaiement.php">
              <i class="bi bi-circle"></i><span>Afficher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Charts Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-basket"></i><span>Caisse</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="caisse.php">
              <i class="bi bi-circle"></i><span>Afficher</span>
            </a>
          </li>
        </ul>
      </li><!-- End Icons Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-box-arrow-right"></i>
          <span>Deconnexion</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-faq.html">
          <i class="bi bi-question-circle"></i>
          <span>Session</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Membre</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Membre</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

           <div class="col-sm-4">
            <?php $anneeCourante = date("Y");?>
            <b>Année <?php echo $anneeCourante;?></b>
           </div>
           <div class="col-sm-4"></div>
           <div class="col-sm-4">
            <select id="mySelect" data-placeholder="Sélectionnez un mois" data-allow-clear="true">
              <option></option>
              <option value="1">Janvier</option>
              <option value="2">Février</option>
              <option value="3">Mars</option>
              <option value="4">Avril</option>
              <option value="5">Mai</option>
              <option value="6">Juin</option>
              <option value="7">Juillet</option>
              <option value="8">Août</option>
              <option value="9">Septembre</option>
              <option value="10">Octobre</option>
              <option value="11">Novembre</option>
              <option value="12">Décembre</option>
              <!-- Ajoutez vos autres options ici -->
            </select>
           </div>
          </div>
          <br>
        </div><!-- End Left side columns -->

          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                    <tr>
                        <th>CNI</th>
                        <th>noms</th>
                        <th>prenoms</th>
                        <th>Telephone</th>
                        <th>Quartier</th>
                        <th>Date d'inscription</th>
                        <th>frais d'adhesion</th>
                        <th>Actions</th>
                </tr>
                </thead>
                <tbody> <?php include "fichier_include/selectlistMember.php"; ?></tbody>
              </table>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <script src="assets/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/select2.min.js"></script>
  <!-- Template Main JS File -->
  <script>
    $(document).ready(function() {
      $('#mySelect').select2();
    });
  </script>

<script src="assets/js/filterMonth.js"></script>
  <script src="assets/js/main.js"></script>

</body>

</html>
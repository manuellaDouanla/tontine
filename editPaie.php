<?php
include("connexion.php");

include("fichier_include/selectPaie.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="dist/css/jq.multiinput.min.css" rel="stylesheet">

    <title>Dashboard - NiceAdmin Bootstrap Template</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="assets/css/googleeapis.css" rel="stylesheet">
  
    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
    
    <link href="assets/css/select2.min.css" rel="stylesheet" />
  
      <link crossorigin="anonymous" href="assets/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" rel="stylesheet">
      <link href="dist/css/jq.multiinput.min.css" rel="stylesheet">
  
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
        <span class="d-none d-lg-block">Assurance</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <span class="d-none d-lg-block"><h4>Assurance</h4></span>
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
            <a href="addMemberTontine.php">
              <i class="bi bi-circle"></i><span>Ajouter un Membre</span>
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
      <h1>Assurance</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
          <li class="breadcrumb-item active">Assurance</li>
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
           <div class="col-sm-4"></div>
          </div>
          <br>
        </div><!-- End Left side columns -->
          <!-- Website Traffic -->
          <div class="card">

            <div class="card-body pb-0">
              <div class="container">
                  <div class="row">
                      <div class="col-xs-12">
                          <h1>MultiInput Demo</h1>
                          <form action="modifPaie.php" method="POST">
                            <table id="dataTable" >
                              <tbody>
                                <tr>
                                  <input type="hidden"  name="plafondAssurance" value="<?php echo '' . $plafondAssurance . '' ?>" id="plafondAssurance" readonly/>
                                  <td><input type="hidden" name="ID_paiement" value="<?php echo $row['ID_paiement']; ?>"></td>
                                  <td>Nom<input type="text" name="Nom" value="<?php echo $Nom; ?>" readonly/></td>
                                  <td>Date paiement<input type="date" name="Date_paiement" value="<?php echo $Date_paiement; ?>" /></td>
                                  <td>1ere Tranche<input type="number" name="Tranche1" id="tranche1" value="<?php echo $Tranche1; ?>" min="0"/></td>
                                  <td>2eme Tranche<input type="number" name="Tranche2" id="tranche2" value="<?php echo $Tranche2; ?>" min="0"/></td>
                                  <td>Statut du paiement<input type="text" name="Statut_paiement" id="statut" value="<?php echo $Statut_paiement; ?>" /></td>
                                </tr>
                              </tbody>
                            </table>
                        <br>
                        <button type="submit" class="btn btn-info" id="enregistrer" name="update">Modifier</button>
                        <a class="btn btn-danger" type="annuler" href="listPaiement.php"><i class="bi bi-trash"></i>Annuler</a>

                        </form>
                      </div>
                  </div>
              </div>

</div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->

  <script src="assets/js/main.js"></script>

  <script crossorigin="anonymous" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" src="assets/js/jquery-3.3.1.min.js"></script>
  <script crossorigin="anonymous" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="src/js/jq.multiinput.js"></script>
  <script src="src/js/jquery-3.6.0.min.js"></script>
  <script src="assets/js/select2.min.js"></script>
    <!-- Fonction pour ajouter, suprimer et modifier le statut de chaque lignes clonnées du formulaiire -->
  <script>
    function updateStatut() {
  const valeurTranche1 = parseFloat(inputTranche1.value);
  const valeurTranche2 = parseFloat(inputTranche2.value);
  const plafondAssurance = parseFloat(inputPlafond.value);
  const total = valeurTranche1 + valeurTranche2;

  if (total === 0 && valeurTranche1 === 0 && valeurTranche2 === 0) {
    inputStatut.value = 'En Attente';
  } else if (total > 0 && total < plafondAssurance) {
    inputStatut.value = 'En cours';
  } else if (total >= plafondAssurance) {
    inputStatut.value = 'Payé';
  } else {
    inputStatut.value = '';
  }
}
  </script>
</body>
</html>
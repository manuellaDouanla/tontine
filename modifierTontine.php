<?php
    include('connexion.php');
    if (isset($_GET['modifier'])) {
        $sqlr= "SELECT * FROM tontines WHERE id_tontine=".$_GET['modifier'] ;
        $liste = mysqli_query($conn,$sqlr);

    if (isset($_POST["save"])) {
        $ids = $_POST['ids'];
        $code = $_POST['code'];
        $nom = $_POST['nom'];
        $montant = $_POST['montant'];
        $ordrebenef = $_POST['ordrebenef'];
        $sanctionBenef = $_POST['sanctionBenef'];
        $sanctionNonBenef = $_POST['sanctionNonBenef'];
        $sql = "UPDATE tontines SET `code`='$code', `Nom`='$nom', `montant`='$montant', `ordrebenef`='$ordrebenef', `sanctionBenef`='$sanctionBenef', `sanctionNonBenef`='$sanctionNonBenef' WHERE `id_tontine`='$ids'";
        $result = mysqli_query($conn, $sql);

        //if($result){
          header('location: listTontine.php');
        //}
        
       // mysqli_close($conn);
    }
  }

    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - NiceAdmin Bootstrap Template</title>


  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
 
  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/jquery-ui-1.13.2.custom/jquery-ui-css" rel="stylesheet">
  <link rel="stylesheet" href="member.css">

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
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Memebres</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
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
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">Administrateur</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Nom de l'Administrateur</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-person"></i>
                <span>Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-gear"></i>
                <span>Parametre</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
              <i class="bi bi-box-arrow-right"></i>
                <span>Deconnexion</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
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
          <i class="bi bi-menu-button-wide"></i><span>Association</span><i class="bi bi-chevron-down ms-auto"></i>
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
          <i class="bi bi-journal-text"></i><span>Membres</span><i class="bi bi-chevron-down ms-auto"></i>
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
          <i class="bi bi-layout-text-window-reverse"></i><span>Tontines</span><i class="bi bi-chevron-down ms-auto"></i>
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

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="index.php">
          <i class="bi bi-person"></i>
          <span>Profile</span>
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
          <li class="breadcrumb-item active">modifier Tontine</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Top Selling -->

          </div>
        </div><!-- End Left side columns -->

          <!-- Website Traffic -->

          
          <div class="card">

            <div class="card-body pb-0">
              <div class="form-container">
                <h2>Modifier Tontine </h2>
            <?php if(isset($liste)):?>
                <form action="" method="POST">
                    <?php foreach ($liste as $row):?>
                        <input type="hidden" name="ids"  id = ""  value="<?php echo $row['id_tontine']; ?>">
                        <div class="form-row">
                            <div class="form-group">
                            <label for="CNI">Code :</label>
                            <input type="text" name="code"  id = ""  value="<?php echo $row['code']; ?>" required>
                            </div>
                            <div class="form-group">
                            <label for="nom">Nom :</label>
                            <input type="text" name="nom"  id = ""  value="<?php echo $row['Nom']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                            <label for="Prénom">Montant :</label>
                            <input type="text"  name="montant"  id = ""  value="<?php echo $row['montant']; ?>" required>
                            </div>
                            <div class="form-group">
                            <label for="Téléphone">Ordre énéficiere :</label>
                            <input type="text" name="ordrebenef"  id = ""  value="<?php echo $row['ordrebenef']; ?>" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                            <label for="Quartier">sanction(2000) :</label>
                            <input type="number"  name="sanctionBenef"  id = ""  value="<?php echo $row['sanctionBenef']; ?>" >
                            </div>
                            <div class="form-group">
                            <label for="Date d'inscription ">sanction(4000) :</label>
                            <input type="number" name="sanctionNonBenef"  id = ""  value="<?php echo $row['sanctionNonBenef']; ?>" >
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                            <input type="submit" name="save" id = "" value="Enregistrer">
                            </div>
                        </div>
                      <?php endforeach;?>
                 </form>
                 <?php endif;?>
              </div>
            </div>
            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>


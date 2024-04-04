<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tontine</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
    <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">
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
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">Tontines</span>
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
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                                <i class="bi bi-person"></i>
                                <span>Profile</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
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
                    <span>Tablleau de bord</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-menu-button-wide"></i><span>Association</span><i
                        class="bi bi-chevron-down ms-auto"></i>
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
                    <i class="bi bi-layout-text-window-reverse"></i><span>Tontines</span><i
                        class="bi bi-chevron-down ms-auto"></i>
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
            <h1>Tontines</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
                    <li class="breadcrumb-item active">Tontines</li>
                </ol>
            </nav>
            <?php
      include('connexion.php');
        $sql = "SELECT code FROM tontines";
        $result = $conn->query($sql);

        $sum = "SELECT SUM(montant) AS total_amount FROM tontines";
        $restatsum = $conn->query($sum);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $constantData = $row['code'];
                echo "<h1>".'CODE : ' .$constantData . "<h1>";
            }
        }   
        
    ?>
            <div style="text-align: right;">
                <a href="Tontinefpdf.php"><i class="btn btn-success">Affiche PDF</i></a>
            </div>

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
                    <!-- Top Selling -->
                    <br>

                </div>
            </div><!-- End Left side columns -->

            <!-- Website Traffic -->
            <div class="card">

                <div class="card-body pb-0">
                    <!-- Table with stripped rows -->
                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th>
                                    <b>Date</b>
                                </th>
                                <th>Nom</th>
                                <th>Montant</th>
                                <th>ordre</th>
                                <th>sanction (2000)</th>
                                <th>sanction (4000)</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                    $sql = "SELECT * FROM tontines";
                    $runsql1 = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($runsql1) > 0) {
                        while ($row = mysqli_fetch_assoc($runsql1)) {
                            ?>
                            <tr>
                                <td><?php echo $row['created_date']; ?></td>
                                <td><?php echo $row['Nom']; ?></td>
                                <td><?php echo $row['montant']; ?></td>
                                <td><?php echo $row['ordrebenef']; ?></td>
                                <td><?php echo $row['sanctionBenef']; ?></td>
                                <td><?php echo $row['sanctionNonBenef']; ?></td>
                                <td>
                                    <a class="btn btn-info"
                                        href="modifierTontine.php?modifier=<?php echo $row['id_tontine'] ?>"><i
                                            class="bi bi-pencil-square"></i></a>
                                    &nbsp;
                                    <a href="deleteMember.php?deletes=<?php echo $row['id_tontine'] ?>"
                                        onclick="decrement()"><i class="btn btn-danger"><i
                                                class="bi bi-trash"></i></i></a>
                                </td>
                            </tr>
                            <?php
                        }
                    }
                    if ($restatsum->num_rows > 0) {
                      // Parcours des lignes de résultats
                      while ($row = $restatsum->fetch_assoc()) {
                        echo "<tr>
                          <td colspan='3' align='right'><strong>Total Montant: ".$row["total_amount"]." XAF</strong></td>
                        </tr>";
                      }
                  
                      echo "</table>";
                  } else {
                      echo "Aucun résultat trouvé.";
                  }
                    mysqli_close($conn);
                    ?>
                        </tbody>
                    </table>
                </div><!-- End News & Updates -->

            </div><!-- End Right side columns -->

            </div>
        </section>

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

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

    <script src="assets/js/filterTontines.js"></script>
    <script src="assets/js/main.js"></script>

</body>

</html>
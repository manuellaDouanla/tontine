<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <link href="dist/css/jq.multiinput.min.css" rel="stylesheet">

    <title>Tontine</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpeg" rel="icon">
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

    <link crossorigin="anonymous" href="assets/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" rel="stylesheet">
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
                <span class="d-none d-lg-block">Membre</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <div class="search-bar">
            <span class="d-none d-lg-block">
                <h4>Membre</h4>
            </span>
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
                        <div class="col-sm-4"></div>
                    </div>
                    <br>
                </div><!-- End Left side columns -->
                <!-- Website Traffic -->
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Enter Data</h5>
                            <form action="addMember.php" method="POST">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">CNI</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Prénom</th>
                                            <th scope="col">Quartier</th>
                                            <th scope="col">Téléphone</th>
                                            <th scope="col">adhésion(10000)</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="container">
                                        <tr>
                                            <td>
                                                <input type="text" class="form-control input-lg" name="CNI[]" value=""
                                                    id="" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control input-lg" name="nom[]" value=""
                                                    id="" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control input-lg" name="prenom[]"
                                                    value="" id="" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control input-lg" name="quartier[]"
                                                    value="" id="" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control input-lg" name="telephone[]"
                                                    value="" id="" required>
                                            </td>
                                            <td>
                                                <input type="number" class="form-control input-lg"
                                                    name="FraisAdhesion[]" value="10000" id="">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger form-control"
                                                    onclick="removeInputField(this)">Retirer</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="button" class="btn btn-primary" onclick="addInputField()">Ajouter des
                                    lignes</button>
                                <button type="submit" name="save" class="btn btn-primary">Submit</button>
                                <button type="reset" class="btn btn-danger">Tout Effacer</button>
                            </form>
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
    <script>
    // Function to add input fields
    var rowCount = document.getElementById("container").childElementCount;

    function addInputField() {
        var container = document.getElementById("container");
        var newRow = document.createElement("tr");
        newRow.innerHTML = `
  <td>
    <input type="text" class="form-control"  name="CNI[]" value="" id="" required>
  </td>
  <td>
    <input type="text" class="form-control"  name="nom[]" value="" id="" required>
  </td>
  <td>
    <input type="text" class="form-control" name="prenom[]" value="" id="" required>
  </td>
  <td>
    <input type="text" class="form-control" name="quartier[]" value="" id="" required>
  </td>
  <td>
    <input type="text" class="form-control" name="telephone[]" value="" id="" required>
  </td>
  <td>
    <input type="number" class="form-control"  name="FraisAdhesion[]" value="10000" id="" >
  </td>
  <td>
    <button type="button" class="btn btn-danger form-control" onclick="removeInputField(this)">Retirer</button>
  </td>
  `;
        container.appendChild(newRow);

        rowCount++; // Increment row count for the next row
    }
    // Function to remove input fields
    function removeInputField(a) {
        var row = a.parentNode.parentNode;
        if (row.parentNode.getElementsByTagName('tr').length <= 1) {

        } else {

            row.parentNode.removeChild(row);
        }
    }
    </script>
</body>

</html>
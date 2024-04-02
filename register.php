<?php
// Configuration de la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "loging";

// Création de la connexion à la base de données
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérification des erreurs de connexion
if ($conn->connect_error) {
    die("Échec de la connexion à la base de données : " . $conn->connect_error);
}

// Vérification du formulaire d'inscription
if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Échapper les valeurs utilisateur pour éviter les attaques par injection SQL
    $escapedUsername = $conn->real_escape_string($username);
    $escapedPassword = $conn->real_escape_string($password);

    // Requête SQL pour vérifier si le nom d'utilisateur existe déjà
    $checkQuery = "SELECT * FROM utilisateurs WHERE username = '$escapedUsername'";
    $checkResult = $conn->query($checkQuery);

    if ($checkResult->num_rows > 0) {
        // Le nom d'utilisateur existe déjà, affichage d'un message d'erreur
        $error_message = "Le nom d'utilisateur est déjà utilisé.";
    } else {
        // Insertion du nouvel utilisateur dans la base de données
        $insertQuery = "INSERT INTO utilisateurs (username, password) VALUES ('$escapedUsername', '$escapedPassword')";
        if ($conn->query($insertQuery) === TRUE) {
            // Utilisateur enregistré avec succès, rediriger vers la page de connexion ou afficher un message de succès
            header("Location: index.php");
            exit();
        } else {
            // Erreur lors de l'insertion de l'utilisateur, affichage d'un message d'erreur
            $error_message = "Une erreur s'est produite lors de l'inscription. Veuillez réessayer.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pages / Login </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

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

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.jpeg" alt="">
                  <span class="d-none d-lg-block">Petite Tontine</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">S'enregistrer</h5>
                    <p class="text-center small">Entrez votre Nom d'utilisateur & votre Mot de passe</p>
                  </div>

                  <?php if (isset($error_message)) { ?>
                    <p><?php echo $error_message; ?></p>
                <?php } ?>
                  <form class="row g-3 needs-validation" novalidate method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Utilisateur</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Entrez votre nom d'utilisateur.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Entrez votre mot de passe!</div>
                    </div>

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                        <label class="form-check-label" for="rememberMe">Me rappeler</label>
                      </div>
                    </div>
                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="register" value="">S'Enregistrer</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vous n'avez pas de compte? <a href="register.php">Creer un compte</a></p>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
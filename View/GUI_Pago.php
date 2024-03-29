<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Easy Health</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna - v4.11.0
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <?php
  include 'header.php';
  ?>

  <main id="main">

    <!-- ======= Pharmacy section ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Pagar productos</h2>
        </div>

      </div>
    </section><!-- End Pharmacy section -->

    <!-- ======= Medicines section ======= -->
    <section class="team" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="500">
      <div class="container">
        <div class="paymentContainer">
          <div class="paymentCard">
            <h3 style="color: floralwhite ;margin-top: 0.5em;">Forma de pago</h3>
            <input type="text" style="width: 70%; margin-top: 2em; height: 2.3em; border-radius: 0.4em; padding:1em" placeholder="Nombre del titular">
            <input type="text" style="width: 70%; margin-top: 2em; height: 2.3em; border-radius: 0.4em; padding:1em" placeholder="VISA/MASTERCARD/AMERICANEXPRESS">
            <input type="text" style="width: 70%; margin-top: 2em; height: 2.3em; border-radius: 0.4em; padding:1em" placeholder="Numero de tarjeta">
            <input type="text" style="width: 70%; margin-top: 2em; height: 2.3em; border-radius: 0.4em; padding:1em" placeholder="Fecha de expiracion">
            <input type="password" style="width: 70%; margin-top: 2em; height: 2.3em; border-radius: 0.4em; padding:1em" placeholder="CVV">
            <div style="margin-top: 1.3em; width: 50%;">
              <form action="../View/GUI_PagoExitoso.php">
                <button class="btn btn-primary" style="width: 100%;">Pagar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Medicines section -->

  </main><!-- End #main -->

  <?php
  include 'footer.php';
  ?>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

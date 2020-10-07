<?php ob_start('comprimir_pagina'); ?> 
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="assets/css/default.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/component.css" />
  <script src="assets/js/modernizr.custom.js"></script>

  <title>Meison Homecenter- Producto 1</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets/img/favicon.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <?php include('header.php'); ?>
  <!-- End Header -->
  <main class="main">
    <div class="breadcrumbsproductos" data-aos="fade-in">
      <div class="container">
        <h2>Producto 1</h2>
        <p>Est dolorum ut non facere possimus quibusdam eligendi voluptatem. Quia id aut similique quia voluptas sit quaerat debitis. Rerum omnis ipsam aperiam consequatur laboriosam nemo harum praesentium. </p>
      </div>
    </div><!-- End Breadcrumbs -->
        <section id="about" class="about">
          <div class="container">
          <div class="container demo-3">
            <ul class="grid cs-style-4">
                <li>
                    <figure>
                        <div><img src="assets/img/imagenes/im1.jpg" alt="img04"></div>
                        <figcaption>
                            <h3>Safari</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1116775-Safari">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <div><img src="assets/img/imagenes/2.png" alt="img06"></div>
                        <figcaption>
                            <h3>Game Center</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1118904-Game-Center">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>                    <figure>
                        <div><img src="assets/img/imagenes/3.png" alt="img02"></div>
                        <figcaption>
                            <h3>Music</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1115960-Music">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <div><img src="assets/img/imagenes/4.png" alt="img03"></div>
                        <figcaption>
                            <h3>Settings</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1116685-Settings">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <div><img src="assets/img/imagenes/5.png" alt="img01"></div>
                        <figcaption>
                            <h3>Camera</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1115632-Camera">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
                <li>
                    <figure>
                        <div><img src="assets/img/imagenes/6.png" alt="img05"></div>
                        <figcaption>
                            <h3>Phone</h3>
                            <span>Jacob Cummings</span>
                            <a href="http://dribbble.com/shots/1117308-Phone">Take a look</a>
                        </figcaption>
                    </figure>
                </li>
            </ul>
            </div>
          </div>
        </section><!-- #hero -->
        <script src="assets/js/toucheffects.js"></script>
      </main>
<!-- Footer-->
<?php include('footer.php'); ?>
<!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
ob_end_flush(); 
function comprimir_pagina($buffer) { 
    $busca = array('/\>[^\S ]+/s','/[^\S ]+\</s','/(\s)+/s'); 
    $reemplaza = array('>','<','\\1'); 
    return preg_replace($busca, $reemplaza, $buffer); 
} 
?>
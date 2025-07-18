<?php

$path = TemplateController::path();
/*echo '<pre>'; print_r($path); echo '</pre>';*/

?>

<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>ECOMMERCE - SISCONET</title>

  <!--Favicon / iconos-->
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path ?>views/assets/img/iconos/iconoWhite.png"/>

  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&family=Ubuntu:wght@400;500;700&display=swap" rel="stylesheet">
  
  <!-- CSS -->
  
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/fontawesome-free/css/all.min.css">
  
  <!-- Latest compiled and minified CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- JDSlider -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/plugins/jdSlider/jdSlider.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/adminlte/adminlte.min.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/template/template.css">
  <link rel="stylesheet" href="<?php echo $path ?>views/assets/css/productos/productos.css">

  <!-- JS -->

  <!-- jQuery -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jquery/jquery.min.js"></script>
  
  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JDSlider -->
  <script src="<?php echo $path ?>views/assets/js/plugins/jdSlider/jdSlider.js"></script>

  <!-- Knob -->
  <script src="<?php echo $path ?>views/assets/js/plugins/knob/knob.js"></script>


</head>

<body class="hold-transition sidebar-collapse layout-top-nav">
  <div class="wrapper">

    <?php

    include "modules/top.php";
    include "modules/navbar.php";
    include "modules/sidebar.php";
    include "pages/home/home.php";
    include "modules/footer.php";


    ?>



   

    <?php 
    
    /*include "modules/sidebar.php"; 
    include "modules/footer.php";*/
    
    ?>


  </div>
  <!-- ./wrapper -->

  <!-- REQUIRED SCRIPTS -->

  <!-- AdminLTE App -->
  <script src="<?php echo $path ?>views/assets/js/plugins/adminlte/adminlte.min.js"></script>
  <script src="<?php echo $path ?>views/assets/js/productos/productos.js"></script>
  
</body>

</html>
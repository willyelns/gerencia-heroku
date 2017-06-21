<!DOCTYPE html>
<html class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Guia de Horários do Circular UFRN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap and Font Awesome css-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
    <!-- Google fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Pacifico">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700">
    <!-- Vue.JS -->
    <script type="text/javascript" src='https://unpkg.com/vue'></script>
    <!-- Theme stylesheet-->
    <link rel="stylesheet" href="assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
  <?php require_once("C:/xampp71/htdocs/ufrn-bus/routes.php"); ?>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <h1 class="text-center">Lista Horários Circulares UFRN</h1>
                </div>  
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <h2 class="text-center">Direto</h2>
                    <div class="text-center" id="lista-circular-direto">
                            <h4 v-for="item in lista">
                                {{item.hora}}:{{item.minuto}} ({{item.empresa}})
                            </h4>
                    </div>
                </div>
            </div>
        </div>


  <!-- JAVASCRIPT FILES -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="javascripts/vendor/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.cookie.js"></script>
    <script src="assets/js/jquery.countdown.min.js"></script>
    <script src="assets/js/front.js"></script>
    <script src="/assets/js/lista-circular-front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>
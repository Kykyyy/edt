<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>EDT MIAGE NANTERRE</title>
    <meta name="viewport"    content="width=device-width, initial-scale=1.0">
    <meta name="description" content="EDT de la MIAGE Nanterre Paris OUEST 2013">
    <meta name="author"      content="ABADA-AUTEROCHE-MIKAELIAN-NDYAE-MAILLAC-PELOUARD">

    <!-- Le styles -->
    <link href="./style/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }

      @media (max-width: 980px) {
        /* Enable use of floated navbar text */
        .navbar-text.pull-right {
          float: none;
          padding-left: 5px;
          padding-right: 5px;
        }
      }
    </style>
  </head>

  <body>
    <?php require('./composants/navbar.php'); ?> <!-- NAV BAR -->
    <div class="container-fluid">
      <div class="row-fluid">
        <?php require('./composants/menuFixedLeft.php'); ?>  <!-- MENU FIXE GAUCHE -->
        <div class="span9">
          <?php require('./composants/welcomeDiv.php'); ?>  <!-- DIV CENTRAL DE BIEVENUE -->
          <?php require_once('./composants/breadcrump.php'); ?> <!-- FIL D'ARIANE -->
          <?php if( !empty($_GET) && $_GET['formulaire'] == true ) require('./composants/formulaires.php');
                else require('./composants/EDT.php'); ?> <!--  EDT ou Un formulaires de gestion -->
        </div><!--/span-->
      </div><!--/row--> 

      <hr>

      <footer>
        <p>&copy; Copyright 2013 - EDT MIAGE NANTERRE - Mikaelian - Auteroche - Maillac - Abada - Ndiaye - Pelouard</p>
      </footer>

    </div><!--/.fluid-container-->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./javascript/jquery.js"></script>
    <script src="./javascript/bootstrap-transition.js"></script>
    <script src="./javascript/bootstrap-alert.js"></script>
    <script src="./javascript/bootstrap-modal.js"></script>
    <script src="./javascript/bootstrap-dropdown.js"></script>
    <script src="./javascript/bootstrap-scrollspy.js"></script>
    <script src="./javascript/bootstrap-tab.js"></script>
    <script src="./javascript/bootstrap-tooltip.js"></script>
    <script src="./javascript/bootstrap-popover.js"></script>
    <script src="./javascript/bootstrap-button.js"></script>
    <script src="./javascript/bootstrap-collapse.js"></script>
    <script src="./javascript/bootstrap-carousel.js"></script>
    <script src="./javascript/bootstrap-typeahead.js"></script>

  </body>
</html>

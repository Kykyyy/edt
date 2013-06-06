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

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="brand" href="#">EDT MIAGE NANTERRE</a>
          <div class="nav-collapse collapse">


             <?php 
             /*
              if( $_SESSION['connexion'] != 'success'){

                var_dump($_SESSION);
              
                   // echo("<p class='navbar-text pull-right'>Connecté en tant que <a href='#' class='navbar-link'>".$_SESSION['user_data']['nom_u']." ".$_SESSION['user_data']['prenom_u']."</a></p>");

              }
              */
            ?>
            
            <ul class="nav">
              <li class="active">
                <a href="#">Home</a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Formation <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li class="nav-header">L3</li>
                  <li><a href="#">Apprentissage</a></li>
                  <li><a href="#">Classique</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">M1</li>
                  <li><a href="#">Apprentissage</a></li>
                  <li><a href="#">Classique</a></li>
                  <li class="divider"></li>
                  <li class="nav-header">M2</li>
                  <li><a href="#">Apprentissage</a></li>
                  <li><a href="#">Classique</a></li>
                </ul>
              </li>
              <li>
                <a href="#about">About</a>
              </li>
              <li>
                <a href="#contact">Contact</a>
              </li>
            </ul>
            <?php 
            /*
              if($_SESSION == NULL || $_SESSION['connexion'] != 'success') {
 
                require('./composants/formLogin.php');

              }
              */
            ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
            <div class="thumbnail">
      
            </div>
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <div class="accordion" id="accordion2">
                <div class="accordion-group">
                  <div class="accordion-heading">
                    <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                      Consultation EDT
                    </a>
                  </div>
                  <div id="collapseOne" class="accordion-body collapse" style="height: 0px; ">
                    <div class="accordion-inner">
                      <li><a href="#">EDT L3 Apprentissage</a></li>
                      <li><a href="#">EDT L3 Classique</a></li>
                      <li><a href="#">EDT M1 Apprentissage</a></li>
                      <li><a href="#">EDT M1 Classique</a></li>
                      <li><a href="#">EDT M2 Apprentissage</a></li>
                      <li><a href="#">EDT M2 Classique</a></li>
                    </div>
                  </div>
                </div>
                <?php 
                /*
                if( $_SESSION != NULL && $_SESSION['connexion'] == 'success' && $_SESSION['admin'] == true){
 
                    require('./composants/menuGestion.php');
 
                }

                */
                ?>
                
              </div>
            </ul>
          </div><!--/.well -->

        </div><!--/span-->

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

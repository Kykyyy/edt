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
                        <li>
                        <a href="./vue/deconnexion.php">Déconnexion</a>
                      </li>
                    </ul>
                    <?php 
                      if($_SESSION == NULL || $_SESSION['connexion'] != 'success') {
         
                        require('./composants/formLogin.php');
                      }
                      else echo("<p class='navbar-text pull-right'>Connecté en tant que <a href='#' class='navbar-link'>".strtoupper($_SESSION['user_data']['nom_u'])." ".ucfirst($_SESSION['user_data']['prenom_u'])."</a></p>");
                    ?>
                  </div><!--/.nav-collapse -->
                </div>
              </div>
            </div>
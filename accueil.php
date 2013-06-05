
<!DOCTYPE html>

<?php
 
 TEST DE COMMIT 

?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

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
              if( (!empty($_SESSION)) && (!empty($_SESSION['user_data']))){
              
              echo("<p class='navbar-text pull-right'>Logged in as <a href='#' class='navbar-link'>Username</a></p>");
              }
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
              if( ( empty($_SESSION) ) && ( empty($_SESSION['user_data']) )){
 
                require('./composants/formLogin.html');
              }
            ?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
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
 
                if( ( !empty($_SESSION) ) /*&& ( $_SESSION['user_data']->admin == true)*/ ){
 
                    require('./composants/menuGestion.html');
 
                }
 
                ?>
                
              </div>
            </ul>
          </div><!--/.well -->
        </div><!--/span-->
        <div class="span9">
          <div class="hero-unit">
            <h1>Bienvenue sur l'emploi du temps de la MIAGE Nanterre!</h1>
            <p>Cet emploi du temps vous permet de consulter les différents créneaux de cours de votre année en cours et des années précédentes.</p>
          </div>
          <ul class="breadcrumb">
            <li><a href="#">Home</a> <span class="divider">/</span></li>
            <li><a href="#">Consultation</a> <span class="divider">/</span></li>
            <li><a href="#">L3 App</a> <span class="divider">/</span></li>
            <li class="active">Semestre 1</li>
          </ul>

          <div class="accordion" id="accordion2">
            <div class="accordion-group">
              <div class="accordion-heading">
                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseS1">
                Semaine 1
                </a>
    </div>
    <div id="collapseS1" class="accordion-body collapse in">
      <div class="accordion-inner">
        <table class="calendar table table-bordered table-striped">
            <caption>Semaine 1</caption>
              <thead>
        <tr>
            <th>&nbsp;</th>
            <th width="20%">Sunday</th>
            <th width="20%">Monday</th>
            <th width="20%">Tuesday</th>
            <th width="20%">Wednesday</th>
            <th width="20%">Thursday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>08:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>08:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:00</td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                            Someone</a></span> <span class="location">23/111</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Prof.
                            Else <span class="location">44/654</span>

                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Prof.
                            If</a></span> <span class="location">54/222</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events conflicts " rowspan="4">

                <div class="row-fluid practice" style="width: 49.5%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Mr.
                            Someone</a></span> <span class="location">12/444</span>
                </div>

                <div class="row-fluid lecture" style="width: 49.5%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Prof.
                            Foo</a></span> <span class="location">66/321</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Prof.
                            Oak</a></span> <span class="location">54/224</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>14:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Prof.
                            Oak</a></span> <span class="location">33/111</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="6">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Dr.
                            Ok</a></span> <span class="location">12/54</span>
                </div>
            </td>

        </tr>
        <tr>
            <td>14:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>16:00</td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Mrs.
                            Ak</a></span> <span class="location">54/125</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Ms.
                            Nice</a></span> <span class="location">99/411</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Ms.
                            K</a></span> <span class="location">24/900</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Mr.
                            Ben</a></span> <span class="location">54/214</span>
                </div>
            </td>

        </tr>
        <tr>
            <td>16:30</td>

        </tr>
        <tr>
            <td>17:00</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>17:30</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
    </tbody>
          </table>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseS2">
        Semaine 2
      </a>
    </div>
    <div id="collapseS2" class="accordion-body collapse">
      <div class="accordion-inner">
        <table class="calendar table table-bordered table-striped">
            <caption>Semaine 2</caption>
              <thead>
        <tr>
            <th>&nbsp;</th>
            <th width="20%">Sunday</th>
            <th width="20%">Monday</th>
            <th width="20%">Tuesday</th>
            <th width="20%">Wednesday</th>
            <th width="20%">Thursday</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>08:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>08:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>09:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:00</td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Prof.
                            Someone</a></span> <span class="location">23/111</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Prof.
                            Else <span class="location">44/654</span>

                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Prof.
                            If</a></span> <span class="location">54/222</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>10:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>11:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events conflicts " rowspan="4">

                <div class="row-fluid practice" style="width: 49.5%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Mr.
                            Someone</a></span> <span class="location">12/444</span>
                </div>

                <div class="row-fluid lecture" style="width: 49.5%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Prof.
                            Foo</a></span> <span class="location">66/321</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Algebra 2</span> <span class="lecturer"><a>Prof.
                            Oak</a></span> <span class="location">54/224</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>12:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>13:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>14:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Prof.
                            Oak</a></span> <span class="location">33/111</span>
                </div>
            </td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" has-events" rowspan="6">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Dr.
                            Ok</a></span> <span class="location">12/54</span>
                </div>
            </td>

        </tr>
        <tr>
            <td>14:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>15:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>16:00</td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Calculus 1</span> <span class="lecturer"><a>Mrs.
                            Ak</a></span> <span class="location">54/125</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid lecture" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Ms.
                            Nice</a></span> <span class="location">99/411</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Combinatorics</span> <span class="lecturer"><a>Ms.
                            K</a></span> <span class="location">24/900</span>
                </div>
            </td>

            <td class=" has-events" rowspan="4">

                <div class="row-fluid practice" style="width: 99%; height: 100%;">


                    <span class="title">Data Structures</span> <span class="lecturer"><a>Mr.
                            Ben</a></span> <span class="location">54/214</span>
                </div>
            </td>

        </tr>
        <tr>
            <td>16:30</td>

        </tr>
        <tr>
            <td>17:00</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>17:30</td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>18:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:00</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
        <tr>
            <td>19:30</td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

            <td class=" no-events" rowspan="1"></td>

        </tr>
    </tbody>
          </table>
      </div>
    </div>
  </div>
</div>
          
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

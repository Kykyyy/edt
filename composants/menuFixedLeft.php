<div class="span3">
  <div class="thumbnail"></div>
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
        <?php if( $_SESSION != NULL && $_SESSION['connexion'] == 'success' &&  $_SESSION['admin'] == true) require('./composants/menuGestion.php');?>
      </div>
    </ul>
  </div><!--/.well -->
</div><!--/span-->
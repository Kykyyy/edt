<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutSalle">
        Ajout d'un salle
      </a>
    </div>
    <div id="collapseAjoutSalle" class="accordion-body collapse in">
      <div class="accordion-inner">
       <?php require_once('./formulaires/salles/ajoutSalles.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifSalle">
        Modification d'un salle
      </a>
    </div>
    <div id="collapseModifSalle" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/salles/modifSalles.php');?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSuppressionSalle">
        Suppression d'un salle
      </a>
    </div>
    <div id="collapseSuppressionSalle" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/salles/suppSalles.php'); ?>
      </div>
    </div>
  </div>
</div>
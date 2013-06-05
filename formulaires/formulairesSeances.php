<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutSeances">
        Ajout d'un seances
      </a>
    </div>
    <div id="collapseAjoutSeances" class="accordion-body collapse in">
      <div class="accordion-inner">
       <?php require_once('./formulaires/seances/ajoutSeances.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifSeances">
        Modification d'un seances
      </a>
    </div>
    <div id="collapseModifSeances" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/seances/modifSeances.php');?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSuppressionSeances">
        Suppression d'un seances
      </a>
    </div>
    <div id="collapseSuppressionSeances" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/seances/suppSeances.php'); ?>
      </div>
    </div>
  </div>
</div>
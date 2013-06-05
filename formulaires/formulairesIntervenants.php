<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutIntervenant">
        Ajout d'un intervenant
      </a>
    </div>
    <div id="collapseAjoutIntervenant" class="accordion-body collapse in">
      <div class="accordion-inner">
       <?php require_once('./formulaires/intervenants/ajoutIntervenants.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifIntervenant">
        Modification d'un intervenant
      </a>
    </div>
    <div id="collapseModifIntervenant" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/intervenants/modifIntervenants.php');?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSuppressionIntervenant">
        Suppression d'un intervenant
      </a>
    </div>
    <div id="collapseSuppressionIntervenant" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/intervenants/suppIntervenants.php'); ?>
      </div>
    </div>
  </div>
</div>
<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutIntervenant">
        <h3>Ajout d'un intervenant</h3>
      </a>
    </div>
    <div id="collapseAjoutIntervenant" class="accordion-body collapse">
      <div class="accordion-inner">
       <?php require_once('./formulaires/intervenants/ajoutIntervenants.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifIntervenant">
        <h3>Modification d'un intervenant</h3>
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
        <h3>Suppression d'un intervenant</h3>
      </a>
    </div>
    <div id="collapseSuppressionIntervenant" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/intervenants/suppIntervenants.php'); ?>
      </div>
    </div>
  </div>
</div>
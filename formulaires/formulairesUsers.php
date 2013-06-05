<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutUser">
        Ajout d'un user
      </a>
    </div>
    <div id="collapseAjoutUser" class="accordion-body collapse in">
      <div class="accordion-inner">
       <?php require_once('./formulaires/users/ajoutUsers.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifUser">
        Modification d'un user
      </a>
    </div>
    <div id="collapseModifUser" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/users/modifUsers.php');?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseSuppressionUser">
        Suppression d'un user
      </a>
    </div>
    <div id="collapseSuppressionUser" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/users/suppUsers.php'); ?>
      </div>
    </div>
  </div>
</div>
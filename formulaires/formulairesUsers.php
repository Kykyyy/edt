<div class="accordion" id="accordion2">
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseAjoutUser">
        <h3>Ajout d'un user</h3>
      </a>
    </div>
    <div id="collapseAjoutUser" class="accordion-body collapse">
      <div class="accordion-inner">
       <?php require_once('./formulaires/users/ajoutUsers.php'); ?>
      </div>
    </div>
  </div>
  <div class="accordion-group">
    <div class="accordion-heading">
      <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseModifUser">
        <li><h3>Modification d'un user</h3>
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
        <h3>Suppression d'un user</h3>
      </a>
    </div>
    <div id="collapseSuppressionUser" class="accordion-body collapse">
      <div class="accordion-inner">
        <?php require_once('./formulaires/users/suppUsers.php'); ?>
      </div>
    </div>
  </div>
</div>
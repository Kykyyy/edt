<?php

if( $_SESSION != NULL && $_SESSION['connexion'] == 'success' &&  $_SESSION['admin'] == true){

	$typeForm = $_GET['typeForm'];

	switch ($typeForm) {
		case 'users':
				require_once('./formulaires/formulairesUsers.php');
			break;

		case 'intervenants':
				require_once('./formulaires/formulairesIntervenants.php');
			break;

		case 'salles':
				require_once('./formulaires/formulairesSalles.php');
			break;

		case 'seances':
				require_once('./formulaires/formulairesSeances.php');
			break;
		
		default:
			echo "DEFAULT";
			break;
	}

}
else{
echo('<div class="alert alert-block">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>Attention !</h4>
  Vous n\'avez pas accés à cette partie du site, veuillez-vous connecter !
</div>');
$_GET['typeForm'] = NULL;
$_GET['formulaire'] = NULL;

}




?>
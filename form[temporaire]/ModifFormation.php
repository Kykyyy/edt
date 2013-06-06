<?php

require('../Classes/Class_formation.php');
require('../Classes/Connex.inc.php');
$idcom=connex('edt','myparam');

// On récupère les infos sur l'intervenant en question
$sql = mysql_query("Select * FROM formation WHERE id_formation = 1");

// $sql = mysql_query("Select * FROM formation WHERE id_formation = ".$_GET['id']);

if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
$ligne=mysql_fetch_array($sql);	

?>


<head><title>Modifier formation</title></head><body>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post"enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Modifier formation</b></legend><table>
<input type="hidden" name="id" value = <?php /*echo $_GET['id'];*/ echo "1"?>" size="40" maxlength="30"/> <!-- Champs caché ou l'on met l'id passé en paramètre url -->

<tr><td>Nom : </td><td><input type="text" name="nom" value = <?php echo $ligne['nom_formation']?> size="40" maxlength="30"/></td></tr>

<tr><td><input type="reset" value=" Effacer "></td>
<td><input type="submit" value=" Envoyer "></td></tr></table></fieldset>
</form>

<?php
if(!empty($_POST['nom']))
{
	$id = $_POST['id'];
	$nom_formation = $_POST['nom'];
	
	// On crée un nouveau formation
	$nouvel_formation = new formation ($id, $nom_formation);
	// On l'insère dans la table
	$nouvel_formation->modifSQL();
}
else 
{
	echo "Formulaire à compléter!";
}
?>
</body>
</html>
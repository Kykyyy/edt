<?php

require('../Classes/Class_Enseignant.php');
require('../Classes/Connex.inc.php');
$idcom=connex('edt');

// On récupère les infos sur l'intervenant en question
$sql = mysql_query("Select * FROM enseignant WHERE id_enseignant = 1");

// $sql = mysql_query("Select * FROM enseignant WHERE id_enseignant = ".$_GET['id']);

if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
$ligne=mysql_fetch_array($sql);	

// Sur son poste
$sql2 = mysql_query("Select * FROM type_poste where id_numtypeposte = ".$ligne['id_numtypeposte']);
if(!$sql2) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
$ligne2=mysql_fetch_array($sql2);	

?>


<head><title>Modifier enseignant</title></head><body>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post"enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Modifier enseignant</b></legend><table>
<input type="hidden" name="id" value = <?php /*echo $_GET['id'];*/ echo "1"?>" size="40" maxlength="30"/> <!-- Champs caché ou l'on met l'id passé en paramètre url -->
<tr><td>Nom : </td><td><input type="text" name="nom" value = <?php echo $ligne['nom_enseignant']?> size="40" maxlength="30"/></td></tr>
<tr><td>Prénom : </td><td><input type="text" name="prenom_ens" value = <?php echo $ligne['prenom_ens']?> size="40"maxlength="30"/></td></tr>
<tr><td>Date de naissance : </td><td><input type="date" name="date" value = <?php echo $ligne['date_naissance_ens'] ?> size="40" maxlength="10"/>
<tr><td>Adresse du CV : </td><td><input type="url" value = <?php echo $ligne['cv'] ?> name="cv" size="40"maxlength="30"/></td></tr>
<tr><td>Poste : <?php
						$sql = mysql_query("Select * FROM type_poste where id_numtypeposte <> ".$ligne2['id_numtypeposte']);
						echo "<td><select name='idposte' class='input'>";
						echo "<option value=".$ligne2['id_numtypeposte'].">".$ligne2['description']." </option>";
						while($result=mysql_fetch_array($sql))
						{ echo "<option value='".$result['id_numtypeposte']."'>".$result['description']."</option>";}
						echo "</select></td>";
						?></tr>

<tr><td><input type="reset" value=" Effacer "></td>
<td><input type="submit" value=" Envoyer "></td></tr></table></fieldset>
</form>

<?php
if(!empty($_POST['nom']) && !empty($_POST['prenom_ens']) && !empty($_POST['date'])&& !empty($_POST['idposte']))
{
	$id= $_POST['id'];
	$nom_ens= $_POST['nom'];
	$prenom_ens=$_POST['prenom_ens'];
	$date=$_POST['date'];
	$cv = $_POST['cv'];
	$idposte = $_POST['idposte'];
	
	// On crée un nouveau enseignant
	$nouvel_enseignant = new enseignant ($id,$prenom_ens, $nom_ens, $date, $cv, $idposte);
	// On l'insère dans la table
	$nouvel_enseignant->modifSQL();
}
else 
{
	echo "Formulaire à compléter!";
}
?>
</body>
</html>
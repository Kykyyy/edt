<?php

require('../Classes/Class_Enseignant.php');
require('../Classes/Connex.inc.php');
$idcom=connex('edt');
?>


<head><title>Ajout d'un enseignant</title></head><body>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post"enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Ajout d'un enseignant</b></legend><table>
<tr><td>Nom : </td><td><input type="text" name="nom" size="40" maxlength="30"/></td></tr>
<tr><td>Prénom : </td><td><input type="text" name="prenom_ens" size="40"maxlength="30"/></td></tr>
<tr><td>Date de naissance : </td><td><input type="date" name="date" size="40" maxlength="10"/>
<tr><td>Adresse du CV : </td><td><input type="url" value="http://" name="cv" size="40"maxlength="30"/></td></tr>
<tr><td>Poste : <?php
						$sql=mysql_query("Select * FROM type_poste");
						echo "<td><select name='idposte' class='input'>";
						echo "<option value='0'>-- Choix --</option>";
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
	$sql = mysql_query("SELECT MAX(id_enseignant) as id_enseignant FROM enseignant");
	if($sql)
	{
		$result = mysql_fetch_array($sql);
		$id = $result['id_enseignant']+1;
	}
	else $id = 1;
	
	$nom_ens= $_POST['nom'];
	$prenom_ens=$_POST['prenom_ens'];
	$date=$_POST['date'];
	$cv = $_POST['cv'];
	$idposte = $_POST['idposte'];
	
	// On crée un nouveau enseignant
	$nouvel_enseignant = new enseignant ($id,$prenom_ens, $nom_ens, $date, $cv, $idposte);
	// On l'insère dans la table
	$nouvel_enseignant->insertSQL();
}
else 
{
	echo "Formulaire à compléter!";
}
?>
</body>
</html>
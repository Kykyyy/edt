<?php

require('../Classes/Class_Promotion.php');
require('../Classes/Connex.inc.php');
$idcom=connex('edt','myparam');
?>


<head><title>Création eeeeed'une promotion</title></head><body>
<form action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post"enctype="application/x-www-form-urlencoded">
<fieldset>
<legend><b>Création d'une promotion</b></legend><table>

<tr><td>Formation : <?php
						$sql=mysql_query("Select * FROM formation");
						echo "<td><select name='idformation' class='input'>";
						echo "<option value='0'>-- Choix --</option>";
						while($result=mysql_fetch_array($sql))
						{ echo "<option value='".$result['id_formation']."'>".$result['nom_formation']."</option>";}
						echo "</select></td>";
						?></tr>

<tr><td>Parcours : <?php
						$sql1=mysql_query("Select * FROM parcours");
						echo "<td><select name='idparcours' class='input'>";
						echo "<option value='0'>-- Choix --</option>";
						while($result1=mysql_fetch_array($sql1))
						{ echo "<option value='".$result1['id_parcours']."'>".$result1['lib_parcours']."</option>";}
						echo "</select></td>";
						?></tr>


<tr><td>Grade : <?php
						$sql2=mysql_query("Select * FROM grade_niveau");
						echo "<td><select name='idgrade' class='input'>";
						echo "<option value='0'>-- Choix --</option>";
						while($result2=mysql_fetch_array($sql2))
						{ echo "<option value='".$result2['id_grade_formation']."'>".$result2['lib_grade_formation']."</option>";}
						echo "</select></td>";
						?></tr>

<tr><td>Année promotion : </td><td><input type="date" name="date" size="8" maxlength="8"/></td></tr>

						
<tr><td><input type="reset" value=" Effacer "></td>
<td><input type="submit" value=" Envoyer "></td></tr></table></fieldset>
</form>

<?php
if(!empty($_POST['idformation']) && !empty($_POST['idparcours']) && !empty($_POST['idgrade'])&& !empty($_POST['date']))
{
	$sql = mysql_query("SELECT MAX(id_promotion) as id_promotion FROM promotion");
	if($sql)
	{
		$result = mysql_fetch_array($sql);
		$id_promotion = $result['id_promotion']+1;
	}
	else $id_promotion= 1;
	
	$annee_promo= $_POST['date'];
	$id_formation =$_POST['idformation'];
	$id_parcours =$_POST['idparcours'];
	$id_grade_formation = $_POST['idgrade'];
	
	// On crée une nouvelle promotion
	$nouvelle_promotion = new promotion ($id_promotion,$annee_promo, $id_formation, $id_parcours, $id_grade_formation);
	// On l'insère dans la table
	$nouvelle_promotion->insertSQL();
}
else 
{
	echo "Formulaire à compléter!";
}
?>
</body>
</html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

include("../Classes/Class_Utilisateur.php");
include("../Classes/Connex.inc.php");
$idcom = connex('si','myparam');

?>
<body>
	
<div class="contenu">
	<div class="form-actions">
		<form  class="form-horizontal" action= "" method="post" enctype="application/x-www-form-urlencoded">
			<fieldset>
			<legend><b>Choisir une Formation</b></legend>
				<div class="control-group">
					<div class="controls">
						<div class="input-append">
							<select name="choixFormation">
								<option value=-1>Choisir une Formation</option>
									<?php
											
											$x= Matchs::listeFormation();
											foreach($x as $k){
											echo "<option value='".$k->getIdperiode()."'>".$k->getlibPeriode()."</option>";
											}
										?>
							</select>
							 <button name="periode" class="btn" type="submit">Ajouter</button>
						</div>
					</div>
				</div>
			</fieldset>
		</form>

<?php
/*
		

if(isset($_POST["Matchs"])){
	if($_POST["choixMatchs"]>0){

		$data=Matchs::ChargerMatch($_POST['choixMatchs']);
?>

		<form class="form-horizontal" action="" method="post" enctype="application/x-www-form-urlencoded">

			<input name="idMatchs" type="hidden" value='<?php echo $_POST['choixMatchs'];?>' />

			<div class="control-group">
				<label class="control-label">IdFranchise 1 </label><div class="controls"><input type="text" name="IdFranchise1" value='<?php echo $data->getFranchise1()->getIdFranchise(); ?>' required/></div>
			</div>
			<div class="control-group">
				<label class="control-label">IdFranchise2 </label><div class="controls"><input type="text" name="IdFranchise2" value='<?php echo $data->getFranchise2()->getIdFranchise(); ?>' required/></div>
			</div>
			<div class="control-group">
				<label class="control-label">Salle </label><div class="controls"><input type="text" name="Salle" value='<?php echo $data->getSalle() ; ?>'  required/></div>
			</div>
			
			<div class="control-group">
			    	<label class="control-label">Date du match </label><div class="controls"><input type="date" name="DateMatch" value="<?php echo date("Y-m-d");?>"  required/></div>
			    </div>
								    
			 <div class="control-group">
			    <div class="controls"><input type="submit" name="Valider" value="Valider" class="btn btn-primary"></div>
			</div>
		</form>

		<?php
		}
		else
		{
			echo "<div class='alert alert-alert'>";
			echo "<strong>Attention!</strong> Veuillez saisir un Match !";
			echo "</div>";
		}
}


if(isset($_POST["Valider"])){

	$Matchs = new Matchs($_POST['idMatchs'],$_POST['IdFranchise1'],$_POST['IdFranchise2'],$_POST['Salle'],$_POST['DateMatch']);
	$Matchs->updateSQL();
}
?>


</div>
</div> */
?>
</body>

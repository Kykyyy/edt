<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

include("../Classes/Class_Periode.php");
include("../Classes/Class_Formation.php");
include("../Classes/Connex.inc.php");
$idcom = connex('si','myparam');

?>
<body>
	
<div id="contenu">
	<div class="form-actions">
		<form  class="form-horizontal" action= "<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="application/x-www-form-urlencoded">
			<fieldset>
			<legend><b>Ajouter Periode</b></legend>
			<table>
		
				<div class="control-group">
					<div class="controls">
						<div class="input-append">
						<tr>
							<select name="choixFormation">
								<option value=0>Choisir une Formation</option>
									<?php
											
											$x= Formation::listeFormation();
											foreach($x as $k){
											echo "<option value='".$k->getidFormation()."'>".$k->getlibFormation()."</option>";
											}
										?>
							</select>
						</tr>
						
							<div class="control-group">
							<tr><td><label class="control-label">Libelle Periode</label></td><td><div class="controls"><input type="text" name="libelle" placeholder="libelle periode" required/></div></td></tr>
							</div>
							<div class="control-group">
							<tr><td><label class="control-label">Date Debut periode </label></td><td><div class="controls"><input type="date" name="Datedebut" value="<?php echo date("Y-m-d");?>"  required/></div></td></tr>
							</div>
							<div class="control-group">
							<tr><td><label class="control-label">Date Fin periode </label></td><td><div class="controls"><input type="date" name="Datefin" value="<?php echo date("Y-m-d");?>"  required/></div></td></tr>
							</div>
							<div class="control-group">
							<tr><td><div class="controls"><input type="submit" name="ajouter" value="ajouter" class="btn btn-primary"></div></td></tr>
							</div>
						</div>
					</div>
					</div>
				</table>
			</fieldset>
		</form>

<?php
	if(isset($_POST['ajouter']))
	{

		$Periode = new Periode('',$_POST['libelle'],$_POST['Datedebut'],$_POST['Datefin'],$_POST['choixFormation']);
		$Periode->insertSQL();
	}
?>
</body>

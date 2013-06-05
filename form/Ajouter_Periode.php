<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php

include("../Classes/Class_Periode.php");
include("../Classes/Class_Formation.php");
include("../Classes/Connex.inc.php");
$idcom = connex('si','myparam');

?>
<body>
	
<div class="contenu">
	<div class="form-actions">
		<form  class="form-horizontal" action= "" method="post" enctype="application/x-www-form-urlencoded">
			<fieldset>
			<legend><b>Ajouter Periode</b></legend>
				<div class="control-group">
					<div class="controls">
						<div class="input-append">
							<select name="choixFormation">
								<option value=-1>Choisir une Formation</option>
									<?php
											
											$x= Formation::listeFormation();
											foreach($x as $k){
											echo $k->getlibFormation();
											echo "<option value='".$k->getidFormation()."'>".$k->getlibFormation()."</option>";
											}
										?>
							</select>
							
							
							
							 <button name="periode" class="btn" type="submit">Ajouter</button>
						</div>
					</div>
				</div>
			</fieldset>
		</form>


</body>

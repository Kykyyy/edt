<?php require_once('./classes/Class_Type_Poste.php'); ?>

<div class="container" style="position:relative;">
 		<section class="formulaire" id="formulaire">
			<h3>Inscription d'un nouvelle intervenant</h3>
			<div class="hero-unit">
				<form action="" method="post" class="form">
				<table >
				<tr>
				<td></td><td><input  type="text" name="nom_insc" placeholder="Nom" class="autoempty input-large" required></td>
				</tr>
				<tr>
				<td></td><td><input  type="text" name="prenom_insc" placeholder="Prénom" class="autoempty input-large" required></td>
				</tr>
				<tr>
				<td></td><td><input  type="text" name="login_insc"  placeholder="Login" class="autoempty input-large" required></td>
				</tr>
				<tr>
				</td><td><SELECT name="role_insc" size="1">

						<OPTION value="0">Aucun
				  <?php 
				  		$result=Class_Type_Poste::getRole();
				  		foreach ($result as $index => $role) {
				  			echo("<OPTION value=".$index.">".$role); ?>
				  }

				</SELECT>
				</tr>
				<tr>
				<td></td><td><input  type="password" name="password_insc" placeholder="Mot de passe" class="autoempty input-large" required></td>
				</tr>
				<tr>
				</tr>
				<tr>
				<td></td><td align="center"><input class="btn" type="reset"  name="annul" value="Effacer" ></td>
				<td></td><td align="center"><input class="btn"  type="submit" value="Valider" ></td>
				</tr>
				</table>
				</form>
			</div>
		</section>
		</div>';
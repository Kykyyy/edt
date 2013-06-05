<?php

class Creneau{

	private $id_promo;
	private $id_type_creneau;
	private $id_salle;
	private $plage_horaire;
	private $date;
	private $id_enseignant;
	private $id_ec;
	private $etat;

	public function __construct($id_promo, 
								$id_type_creneau, 
								$id_salle, 
								$plage_horaire,
								$date,
								$id_enseignant,
								$id_ec,
								$etat){

		$this->id_promo = $id_promo;
		$this->id_type_creneau = $id_type_creneau;
		$this->id_salle = $id_salle;
		$this->plage_horaire = $plage_horaire;
		$this->date = $date;
		$this->id_enseignant = $id_enseignant;
		$this->id_ec = $id_ec;
		$this->etat = $etat;

	}

	public function insertSQL(){
		$sql =("INSERT into creneau values('id_promo','$this->id_type_creneau','$this->salle','$this->plage_horaire','$this->date','$this->id_enseignant','$this->id_ec','$this->etat')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode enregistrée !')</script>";
	}
	
	public function modifSQL(){
		$sql = ("UPDATE creneau SET
				id_type_creneau = '$this->id_type_creneau'
				id_salle = '$this->id_salle' 
				plage_horaire = '$this->plage_horaire'
				date = '$this->date'
				id_enseignant = '$this->id_enseignant'
				id_ec = '$this->id_ec'
				etat = '$this->etat'
				where id_promo = '$this->id_promo' AND id_type_creneau = '$this->id_type_creneau' AND id_salle = '$this->id_salle' AND id_enseignant = '$this->id_enseignant' AND id_ec = '$this->id_ec'");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur modification \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode modifiée !')</script>";
	}
	
	public function selectSQL() 
	{
		$sql = mysql_query("Select * FROM creneau WHERE id_promo ='$this->id_promo' AND id_type_creneau = '$this->id_type_creneau' AND id_salle = '$this->id_salle' AND id_enseignant = '$this->id_enseignant' AND id_ec = '$this->id_ec'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->id = $ligne['lib_formation'];
			$this->date_debut_periode =  $ligne['date_debut_periode'];
			$this->date_fin_periode =  $ligne['date_fin_periode'];
			$this->id_ue = $ligne['id_ue'];
			
	
		}
		return $this;
	}
	
	public function supprSQL(){
	$sql = ("DELETE from creneau where id_promo = '$this->id_promo' AND id_type_creneau = '$this->id_type_creneau' AND id_salle = '$this->id_salle' AND id_enseignant = '$this->id_enseignant' AND id_ec = '$this->id_ec'");
		$result = 	mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur suppression \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode supprimée !')</script>";
	}
}


?>
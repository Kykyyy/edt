<?php

class Formation{

	private $id_bat;
	private $nom_bat;
	private $id_salle;

	public function __construct($id_bat, $nom_bat, $id_salle)
	{
		$this->id_bat = $id_bat;
		$this->nom_bat = $nom_bat;
		$this->id_salle = $id_salle;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créée)
	{
		$requete=("INSERT INTO formation values('$this->id_bat','$this->nom_bat','$this->id_salle')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Formation enregistrée !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE formation SET nom_bat = '$this->nom_bat', id_salle = '$this->id_salle' WHERE id_bat ='$this->id_bat'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Formation n°".$this->id_bat." modifiée !')</script>";
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM formation WHERE id_bat ='$this->id_bat'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->nom_bat = $ligne['nom_bat'];
			$this->id_salle =  $ligne['id_salle'];
			$this->id_promo =  $ligne['id_promo'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE formation WHERE id_bat ='$this->id_bat'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Formation supprimée !')</script>";
	}

}


?>
<?php

class Salle{

	private $id_salle;
	private $nom_salle;
	private $capacite_salle;
	private $id_bat;
	private $id_type_salle;

	public function __construct($id_salle, $nom_salle, $capacite_salle, $id_bat, $id_type_salle)
	{
		$this->id_salle = $id_salle;
		$this->nom_salle = $nom_salle;
		$this->capacite_salle = $capacite_salle;
		$this->id_bat = $id_bat;
		$this->id_type_salle = $id_type_salle;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créé)
	{
		$requete=("INSERT INTO salle values('$this->id_salle','$this->nom_salle','$this->capacite_salle','$this->id_bat','$this->id_type_salle')");
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Salle enregistrée !')</script>";
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE salle SET nom_salle = '$this->nom_salle', capacite_salle = '$this->capacite_salle', id_bat = '$this->id_bat', id_type_salle = '$this->id_type_salle' WHERE id_salle ='$this->id_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Salle n°".$this->id_salle." modifiée !')</script>";
	}
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM salle WHERE id_salle ='$this->id_salle'");		
		if(!$sql) echo "<h2>Erreur de sélection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->nom_salle = $ligne['nom_salle'];
			$this->capacite_salle =  $ligne['capacite_salle'];
			$this->id_bat =  $ligne['id_bat'];
			$this->id_type_salle =  $ligne['id_type_salle'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE salle WHERE id_salle ='$this->id_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Salle supprimée !')</script>";
	}

}


?>
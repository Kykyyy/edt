<?php

class Salle{

	private $id_salle;
	private $nom_salle;

	public function __construct($id_salle, $nom_salle, $capacite_salle)
	{
		$this->id_salle = $id_salle;
		$this->nom_salle = $nom_salle;
		$this->capacite_salle = $capacite_salle;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créée)
	{
		$requete=("INSERT INTO salle values('$this->id_salle','$this->nom_salle','$this->capacite_salle')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Salle enregistrée !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE salle SET nom_salle = '$this->nom_salle','$this->capacite_salle' WHERE id_salle ='$this->id_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('salle n°".$this->id_salle." modifiée !')</script>";
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM salle WHERE id_salle ='$this->id_salle'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->nom_salle = $ligne['nom_salle'];
			$this->capacite_salle = $ligne['capacite_salle'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE salle WHERE id_salle ='$this->id_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('salle supprimée !')</script>";
	}


}


?>
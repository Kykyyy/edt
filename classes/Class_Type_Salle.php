<?php

class Type_Salle{

	private $id_type_salle;
	private $lib_type_salle;

	public function __construct($id_type_salle, $lib_type_salle)
	{
		$this->id_type_salle = $id_type_salle;
		$this->lib_type_salle = $lib_type_salle;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créé)
	{
		$requete=("INSERT INTO Type_Salle values('$this->id_type_salle','$this->lib_type_salle')");
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Le type de la salle est enregistré !')</script>";
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE Type_Salle SET lib_type_salle = '$this->lib_type_salle' WHERE id_type_salle ='$this->id_type_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Salle n°".$this->id_type_salle." modifiée !')</script>";
	}
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM type_salle WHERE id_type_salle ='$this->id_type_salle'");		
		if(!$sql) echo "<h2>Erreur de sélection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->lib_type_salle =  $ligne['lib_type_salle'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE Type_Salle WHERE id_type_salle ='$this->id_type_salle'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Type de la salle supprimé !')</script>";
	}

}


?>
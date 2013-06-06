<?php

class type_poste{

	private $id_numtypeposte;
	private $description;
	private $nb_heures;
	private $id_enseignant;

	public function __construct($id_numtypeposte, $description, $nb_heures, $id_enseignant)
	{
		$this->id_numtypeposte = $id_numtypeposte;
		$this->description = $description;
		$this->nb_heures = $nb_heures;
		$this->id_enseignant = $id_enseignant;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créée)
	{
		$requete=("INSERT INTO type_poste values('$this->id_numtypeposte','$this->description','$this->nb_heures','$this->id_enseignant')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('type_poste enregistrée !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE type_poste SET description = '$this->description', nb_heures = '$this->nb_heures', id_enseignant = '$this->id_enseignant' WHERE id_numtypeposte ='$this->id_numtypeposte'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('type_poste n°".$this->id_numtypeposte." modifiée !')</script>";
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM type_poste WHERE id_numtypeposte ='$this->id_numtypeposte'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->description = $ligne['description'];
			$this->nb_heures =  $ligne['nb_heures'];
			$this->id_enseignant =  $ligne['id_enseignant'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE type_poste WHERE id_numtypeposte ='$this->id_numtypeposte'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('type_poste supprimée !')</script>";
	}

	public static function getRole()
	{
		$requete = ("SELECT * FROM type_poste")

	}

}


?>
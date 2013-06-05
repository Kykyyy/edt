<?php

class Enseignant{

	private $id_enseignant;
	private $prenom_ens;
	private $nom_ens;
	private $date_naissance_ens;
	private $cv;
	private $id_poste;

	public function __construct($id_enseignant, $prenom_ens, $nom_ens, $date_naissance_ens, $cv, $id_poste)
	{
		$this->id_enseignant = $id_enseignant;
		$this->prenom_ens = $prenom_ens;
		$this->nom_ens = $nom_ens;
		$this->date_naissance_ens = $date_naissance_ens;
		$this->cv = $cv;
		$this->id_poste = $id_poste;
	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créée)
	{
		$idcom=Connex('edt','myparam');
		$requete=("INSERT INTO enseignant values('$this->id_enseignant','$this->nom_ens','$this->prenom_ens','$this->date_naissance_ens','$this->cv','$this->id_poste')");
		$result = mysql_query($requete,$idcom) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('enseignant enregistré !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE enseignant SET prenom_ens = '$this->prenom_ens', nom_enseignant = '$this->nom_ens', date_naissance_ens = '$this->date_naissance_ens', cv = '$this->cv', id_numtypeposte = '$this->id_poste' WHERE id_enseignant ='$this->id_enseignant'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Enseignant n°".$this->id_enseignant." modifié !')</script>";
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM enseignant WHERE id_enseignant ='$this->id_enseignant'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->prenom_ens = $ligne['prenom_ens'];
			$this->nom_ens =  $ligne['nom_enseignant'];
			$this->date_naissance_ens =  $ligne['date_naissance_ens'];	
			$this->cv =  $ligne['cv'];
			$this->id_poste =  $ligne['id_numtypeposte'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE enseignant WHERE id_enseignant ='$this->id_enseignant'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('enseignant supprimé !')</script>";
	}

}


?>
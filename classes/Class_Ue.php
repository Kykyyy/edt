<?php

class ue{

	private $id_ue;
	private $nom_ue;
	private $quota_horaire_ue;
	private $id_periode;

	public function __construct($id_ue, $nom_ue, $quota_horaire_ue, $id_periode)
	{
		$this->id_ue = $id_ue;
		$this->nom_ue = $nom_ue;
		$this->quota_horaire_ue = $quota_horaire_ue;
		$this->id_periode = $id_periode;

	}
	
	public function insertSQL()	// Insère un objet (nécessite qu'il soit créée)
	{
		$requete=("INSERT INTO ue values('$this->id_ue','$this->nom_ue','$this->quota_horaire_ue','$this->id_periode')");
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('ue enregistrée !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE ue SET nom_ue = '$this->nom_ue', quota_horaire_ue = '$this->quota_horaire_ue', id_periode = '$this->id_periode' WHERE id_ue ='$this->id_ue'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('ue n°".$this->id_ue." modifiée !')</script>";
	}
	
	public function selectSQL() // Select à partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM ue WHERE id_ue ='$this->id_ue'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->nom_ue = $ligne['nom_ue'];
			$this->quota_horaire_ue =  $ligne['quota_horaire_ue'];
			$this->id_periode =  $ligne['id_periode'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE ue WHERE id_ue ='$this->id_ue'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('ue supprimée !')</script>";
	}

}


?>
<?php

class Type_Creneau{

	private $id_type_creneau;
	private $lib_type_creneau;

	public function __construct($id_type_creneau, $lib_type_creneau)
	{
		$this->id_type_creneau = $id_type_creneau;
		$this->lib_type_creneau = $lib_type_creneau;
	}
	
	public function insertSQL()	// Ins�re un objet (n�cessite qu'il soit cr��)
	{
		$requete=("INSERT INTO Type_Creneau values('$this->id_type_creneau','$this->lib_type_creneau')");
		if(!$result) echo "<h2>Erreur d'insertion \n n�",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Le type du cr�neau est enregistr� !')</script>";
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE Type_Creneau SET lib_type_creneau = '$this->lib_type_creneau' WHERE id_type_creneau ='$this->id_type_creneau'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Cr�neau n�".$this->id_type_creneau." modifi� !')</script>";
	}
	}
	
	public function selectSQL() // Select � partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM type_creneau WHERE id_type_creneau ='$this->id_type_creneau'");		
		if(!$sql) echo "<h2>Erreur de s�lection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->lib_type_creneau =  $ligne['lib_type_creneau'];
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE Type_Creneau WHERE id_type_creneau ='$this->id_type_creneau'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Type du cr�neau supprim� !')</script>";
	}

}


?>
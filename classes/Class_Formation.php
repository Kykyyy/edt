<?php

class Formation{

	private $id_formation;
	private $nom_formation;


	public function __construct($id_formation, $nom_formation)
	{
		$this->id_formation = $id_formation;
		$this->nom_formation = $nom_formation;

	}
	
	public function insertSQL()	// Ins�re un objet (n�cessite qu'il soit cr��e)
	{
		$requete=("INSERT INTO formation values('$this->id_formation','$this->nom_formation')");
		$result = mysql_query($sql) ;		
		if(!$result) echo "<h2>Erreur d'insertion \n n�",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('Formation enregistr�e !')</script>";
	}
	
	public function modifSQL() // modifier un objet
	{
		$requete = ("UPDATE formation SET nom_formation = '$this->nom_formation' WHERE id_formation ='$this->id_formation'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Formation n�".$this->id_formation." modifi�e !')</script>";
	}
	
	public function selectSQL() // Select � partir d'un objet ne contenant que l'id, renvoi l'objet ($this)
	{
		$sql = mysql_query("Select * FROM formation WHERE id_formation ='$this->id_formation'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->nom_formation = $ligne['nom_formation'];
		
		}
		return $this;
	}
	
	public function supprSQL() // supprimer un objet
	{
		$requete = ("DELETE formation WHERE id_formation ='$this->id_formation'");		
		mysql_query($requete) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('Formation supprim�e !')</script>";
	}
	
	public static function listeFormation(){
		$liste = array();
		$sql=mysql_query("Select * from formation") or die (mysql_error());
		while($resultat = mysql_fetch_object($sql))
		{
			$liste[]=new Formation($resultat->id_formation,$resultat->nom_formation);
		}
		return $liste;
	}

}


?>
<?php

class Promotion{

	private $id_promo;
	private $annee_promo;
	private $id_formation;
	
	public function __construct($id_promo, 
								$annee_promo, 
								$id_formation, 
								
		$this->id_promo = $id_promo;
		$this->annee_promo = $annee_promo;
		$this->id_formation = $id_formation;
	

	}

	public function insertSQL(){
		$sql =("INSERT into promotion values('','$this->annee_promo','$this->id_formation')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('promotion enregistrée !')</script>";
	}
	
	public function modifSQL(){
		$sql = ("UPDATE promotion SET
				annee_promo = '$this->annee_promo'
				id_formation = '$this->id_formation' 
				where id_promo = '$this->id_promo'");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur modification \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('promotion modifiée !')</script>";
	}
	
	public function selectSQL() 
	{
		$sql = mysql_query("Select * FROM promo WHERE id_promo ='$this->id_promo'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->id_promo = $ligne['id_promo'];
			$this->annee_promo =  $ligne['annee_promo'];
			$this->id_formation =  $ligne['id_formation'];			
	
		}
		return $this;
	}
	
	public function supprSQL(){
	$sql = ("DELETE from promotion where id_promo = '$this->id_promo'");
		$result = 	mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur suppression \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('promotion supprimée !')</script>";
	}
}


?>
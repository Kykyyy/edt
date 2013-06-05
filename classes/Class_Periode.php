<?php

class Periode{

	private $id_periode;
	private $lib_periode;
	private $date_debut_periode;
	private $date_fin_periode;
	private $id_ue;

	public function __construct($id_periode, 
								$lib_periode, 
								$date_debut_periode, 
								$date_fin_periode,
								$id_ue){

		$this->id_periode = $id_periode;
		$this->lib_periode = $lib_periode;
		$this->date_debut_periode = $date_debut_periode;
		$this->date_fin_periode = $date_fin_periode;
		$this->id_ue = $id_ue;

	}
	
	public function getlibPeriode()
	{
		return $this->lib_periode;
	}
	public function getIdperiode()
	{
		return $this->id_periode;
	}
	
	public function insertSQL(){
		$sql =("INSERT into periode values('','$this->lib_periode','$this->date_debut_periode','$this->date_fin_periode','$this->id_ue')");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode enregistrée !')</script>";
	}
	
	public function modifSQL(){
		$sql = ("UPDATE periode SET
				lib_periode = '$this->lib_periode'
				date_debut_periode = '$this->date_debut_periode' 
				date_fin_periode = '$this->date_fin_periode'
				id_ue = '$this->id_ue'
				where id_periode = '$this->id_periode'");
		$result = mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur modification \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode modifiée !')</script>";
	}
	
	public function selectSQL() 
	{
		$sql = mysql_query("Select * FROM periode WHERE id_periode ='$this->periode'");		
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$ligne=mysql_fetch_array($sql);
			$this->lib_formation = $ligne['lib_formation'];
			$this->date_debut_periode =  $ligne['date_debut_periode'];
			$this->date_fin_periode =  $ligne['date_fin_periode'];
			$this->id_ue = $ligne['id_ue'];
			
	
		}
		return $this;
	}
	
	public function supprSQL(){
		$sql = ("DELETE from periode where id_periode = '$this->id_periode'");
		$result = 	mysql_query($sql) ;
		if(!$result) echo "<h2>Erreur suppression \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		
		else echo "<script type=\"text/javascript\">alert('periode supprimée !')</script>";
	}
	
	public static function listePeriode(){
		$liste = array();
		$sql=mysql_query("Select * from periode") or die (mysql_error());
		while($resultat = mysql_fetch_object($sql))
		{
			$liste[]=new Utilisateur($resultat->id_periode,$resultat->lib_periode,$resultat->date_debut_periode,$resultat->date_fin_periode,$resultat->id_formation);
		}
		return $liste;
	}
}


?>
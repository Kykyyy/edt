<?php

class Utilisateur{
	
	private $id_user;
	private $nom_u;
	private $prenom_u;
	private $id_type_poste;
	private $login;
	private $mdp;

	public function __construct($id_user,$nom_u,$prenom_u,$id_type_poste,$login,$mdp){
		
		$this->id_user = $id_user;
		$this->nom_u = $nom_u;
		$this->prenom_u = $prenom_u;
		$this->login = $login;
		$this->mdp = $mdp;
		$this->id_type_poste = $id_type_poste;
	}
	
	public function insertSQL(){
		
		$sql = ("INSERT INTO utilisateur values('$this->id_user','$this->nom_u','$this->prenom_u','$this->id_type_poste','$this->login','$this->mdp')");
		$result = mysql_query($sql);
		if(!$result) echo "<h2>Erreur d'insertion \n n¡",mysql_errno()," : ",mysql_error()."</h2>";
		else echo "<script type=\"text/javascript\">alert('user enregistré !')</script>";
	}
	
	public function modifSQL(){
		
		$sql = (" UPDATE utilisateur set nom_u = '$this->nom_u', prenom_u = '$this->prenom_u', login = '$this->login',mdp = '$this->mdp',id_type_poste = '$this->id_type_poste' WHERE id_user = '$this->id_user')");
		mysql_query($sql) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('utilisateur n°".$this->id-user." modifié !')</script>";
		
	}
	
	public function selectSQL(){
	
		$sql = mysql_query("SELECT * from utilisateur WHERE id_user ='$this->id_user'");
		if(!$sql) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		else
		{
			$profil = mysql_fetch_array($sql);
			$this->nom_u = $profil['nom_u'];
			$this->prenom_u = $profil['prenom_u'];
			$this->id_type_poste = $profil['id_type_poste'];
			
		}
		return $this;
		
	}
	
	public function supprSQL(){
		$sql = (" DELETE utilisateur WHERE id_user = 'this->id_user'");
		mysql_query($sql) or die(mysql_error());
		echo "<script type=\"text/javascript\">alert('utilisateur supprimé !')</script>";
	}





}



?>
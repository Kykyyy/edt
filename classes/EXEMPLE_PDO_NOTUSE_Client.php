<?php

class Client{
	private $nom;
	private $prenom;
	private $login;
	private $age;
	private $adresse;
	private $ville;
	private $mail;
	private $pwd;
	private $adm;
	
	public function Client($n,$p,$l,$a,$adr,$v,$m,$pass,$admin){
		$this->nom = $n;
		$this->prenom = $p;
		$this->login = $l;
		$this->age = $a;
		$this->adresse = $adr;
		$this->ville = $v;
		$this->mail = $m;
		$this->pwd = $pass;
		$this->adm = $admin;
	}
	
	public function inscription(){
		
		require('../modele/base/scriptDbConnex.php');
		$db = $pdo->prepare("INSERT INTO client VALUES('',:nom,:prenom,:login,:age,:adresse,:ville,:mail,:password,'')");
		$db->bindParam(':nom', $this->nom);
		$db->bindParam(':prenom', $this->prenom);
		$db->bindParam(':login', $this->login);
		$db->bindParam(':age', $this->age);
		$db->bindParam(':adresse', $this->adresse);
		$db->bindParam(':ville', $this->ville);
		$db->bindParam(':mail', $this->mail);
		$db->bindParam(':password', $this->pwd);
		$db->execute();

		$_SESSION['connecte'] = 1;
		$_SESSION['login'] = $this->login;
		Client::connexion($this->login,$this->pwd);
	}
	
	public static function connexion($l,$p){
		global $cpteUser;
		require('../modele/base/scriptDbConnex.php');
		$db = $pdo->prepare("SELECT * FROM client WHERE login = :login AND password = :password");
		$db->bindParam(':login', $l);
		$db->bindParam(':password', $p);
		$db->execute();
		$resultat = $db->fetch(PDO::FETCH_OBJ);
		
		if(!$resultat){
			$_SESSION['connecte'] = 0;
			$_SESSION['login'] = '';
		}
		else{
			$_SESSION['connecte'] = 1;
			$_SESSION['login'] = $resultat->login;
			$_SESSION['id_client'] = $resultat->id_client;
			$_SESSION['admin'] = $resultat->admin;
		}
	}
	
	public static function getListReservation(){
		require('./modele/base/scriptDbConnex.php');
		$response = '';
		$db = $pdo->prepare("SELECT r.id_reservation as resa, c.nom as nom, c.prenom as prenom, 
								t.type_train as type, t.gare_depart as gare_depart, t.ville_depart as ville_depart, 
								t.ville_arrivee as ville_arrivee, t.gare_arrivee as gare_arrivee, 
								t.type_trajet as type_trajet, t.date as dateda, t.prix as prix, 
								t.heure_depart as heure_depart, t.heure_arrivee as heure_arrivee 
							FROM reservation r 
							INNER JOIN client c ON c.login = :login AND c.id_client = r.id_client
							INNER JOIN trajet t ON t.id_trajet = r.id_trajet							
							ORDER BY r.id_reservation");
		$db->bindParam(':login', $_SESSION['login']);
		$db->execute();
	
		if($resultat = $db->fetchAll(PDO::FETCH_OBJ)){
	
			$response .= "<table id='tableau' border='1'>
			<thead>
			<tr>
			<th>Num&eacute;ro de r&eacute;servation</th>
			<th>Type de train</th>
			<th>Gare de d&eacute;part</th>
			<th>Ville de d&eacute;part</th>
			<th>Gare d'arriv&eacute;e</th>
			<th>Ville d'arriv&eacute;e</th>
			<th>Type de trajet</th>
			<th>Date</th>
			<th>Prix</th>
			<th>Heure de d&eacute;part</th>
			<th>Heure d'arriv&eacute;e</th>
			</tr>
			</thead>";
	
			foreach ($resultat as $row){
	  			$response .= "<tr>";
	  			$response .= "<td>" . $row->resa . "</td>";	  
	  			$response .= "<td>" . $row->type . "</td>";
	  			$response .= "<td>" . $row->gare_depart . "</td>";
	  			$response .= "<td>" . $row->ville_depart . "</td>";
	  			$response .= "<td>" . $row->gare_arrivee . "</td>";	  
	  			$response .= "<td>" . $row->ville_arrivee . "</td>";
	  			$response .= "<td>" . $row->type_trajet . "</td>";

	  			//Date anglais vers français
				$dateFr = date("d-m-Y", strtotime($row->dateda)); 

	  			$response .= "<td>" . $dateFr . "</td>";
	  			$response .= "<td>" . $row->prix . "</td>";
	  			$response .= "<td>" . $row->heure_depart . "</td>";
	  			$response .= "<td>" . $row->heure_arrivee . "</td>";
	  			$response .= "</tr>";
			}
			$response .= "</table>";
			echo $response;
		}
		else{
			echo '<span style="color: white; font-family: Century Gothic; font-size: 15px; margin-left: 470px; margin-right:290px; margin-bottom: 14px; float: left;">Vous avez actuellement aucune r&eacute;servation</span>';  
		}
	}

	public static function getIdReservation(){
		require('./modele/base/scriptDbConnex.php');
		$db = $pdo->prepare("SELECT id_reservation FROM reservation WHERE id_client = :idClient");
		$db->bindParam(':idClient', $_SESSION['id_client']);
		$db->execute();
		$resultat = $db->fetchAll(PDO::FETCH_OBJ);
		foreach($resultat as $row){
			echo '<option value="'.$row->id_reservation.'">'.$row->id_reservation.'</option>';
		}
	}

	public static function deleteReservation(){
		require('../modele/base/scriptDbConnex.php');
		$db = $pdo->prepare("DELETE FROM reservation WHERE id_reservation = :idResa");
		$db->bindParam(':idResa', $_POST['idResa']);
		$db->execute();
		echo('Suppression bien effectu&eacute;e!');
		header('Refresh:2; url=../index.php?page=suppression');
	}


}

?>
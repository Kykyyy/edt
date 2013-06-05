<?php 

session_start(); 
$_SESSION['erreur'] = NULL; 
$_SESSION['connexion'] = NULL; 

if(!empty($_POST['id']) && !empty($_POST['pass'])) 
{  
	 
	// Connexion à la base  
	var_dump($_POST);
	$requete = "SELECT * FROM utilisateur, type_poste WHERE login = '".$_POST['id']."' AND mdp = '".$_POST['pass']."' AND id_numtypeposte = '6'";

	/*
	$query = $db->prepare($requete);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_OBJ); 
	*/

	$res=mysql_query($requete);
	if(!$res) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		$result=mysql_fetch_assoc($res);
	var_dump($result);


	if( empty($result) || !sizeof($result) ) // Login / Mot de passe invalide  
		{ 
			$_SESSION['erreur'] = 'Login ou mot de passe non valide'; 

			 header("Location: ../index.php" ); 
		} 
	elseif($result->id_client == 1){  
		$_SESSION['connexion']   =  'success';
		$_SESSION['user_data']   =  $result;
		$_SESSION['first_login'] = 0;
		$_SESSION['admin'] = true;

	 	header('Location: ../index.php');   
	 	}  
	else{
		$_SESSION['connexion'] = 'success';
		$_SESSION['user_data']   =  $result;
	    $_SESSION['first_login'] = 0;
	    $_SESSION['admin'] = false;

		header('Location: ../index.php'); 
	} 
	 
} 

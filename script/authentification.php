<?php 

session_start(); 
$_SESSION['erreur'] = NULL; 
$_SESSION['connexion'] = NULL; 

if(!empty($_POST['mail']) && !empty($_POST['password'])) 
{  
	 
	// Connexion à la base  
	require './script.php';
	$db = connect();
	$requete = "SELECT * FROM client WHERE mail = '".$_POST['mail']."' and password = '".$_POST['password']."'";
	$query = $db->prepare($requete);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_OBJ); 
	if (empty($result) || !sizeof($result)) // Login / Mot de passe invalide  
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

<?php 

session_start(); 
$_SESSION['erreur'] = NULL; 
$_SESSION['connexion'] = NULL; 

if(!empty($_POST['id']) && !empty($_POST['pass'])) 
{  
	 
	// Connexion à la base  

	$requete = "SELECT * FROM user, type_poste WHERE login = '".$_POST['id']."' AND mdp = '".$_POST['pass']."' AND id_numtypeposte = '0'";

	/*
	$query = $db->prepare($requete);
	$query->execute();
	$result = $query->fetch(PDO::FETCH_OBJ); 
	*/

	$res=mysql_query($requete);
	if(!$res) echo "<h2>Erreur de selection \n n",mysql_errno()," : ",mysql_error()."</h2>";
		$result=mysql_fetch_assoc($res);	


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

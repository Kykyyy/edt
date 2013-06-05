<?php

try{
	
	$hote='localhost';
	$dbname='edt';
	$user='root';
	$pw='';
	$pdo = new PDO('mysql:host='.$hote.';dbname='.$dbname, $user, $pw);
	
}
catch(Exception $e){
	die('Erreur : '.$e->getMessage());
}

?>

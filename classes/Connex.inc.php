<?php
function connex($base)
{

	$idcom=mysql_connect("localhost", "root", "");
	
	$idbase=mysql_select_db($base);
	if(!$idcom | !$idbase)
	{
    echo "<script type=text/javascript>";
		echo "alert('Connexion Impossible � la base  $base')</script>";
	}
	return $idcom;
}
?>


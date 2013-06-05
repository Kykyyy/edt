<?php
function connex($base,$param)
{
	//include($param.".inc.php");
	//$idcom=mysql_connect(MYHOST,MYUSER,MYPASS);
	$idcom=mysql_connect("localhost", "root", "");
	
	$idbase=@mysql_select_db($base);
	if(!$idcom | !$idbase)
	{
    echo "<script type=text/javascript>";
		echo "alert('Connexion Impossible à la base  $base')</script>";
	}
	return $idcom;
}
?>


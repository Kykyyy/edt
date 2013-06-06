<?php
	class stat
	{
		public static function get_jour_semaine($date)
		{
			$date = convertDate($date); 

			$jour = date('d', strtotime($date));
			$mois =  date('m', strtotime($date));
			$annee =  date('Y', strtotime($date));
			$jour_fr = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi");

			$timestamp = mktime (0, 0, 0, $jour, $mois, $annee);

			$wd = date("w", $timestamp);

			$str_dat = $jour_fr[$wd];

			return ($str_dat);	
		
		}
		//Convertie une date anglaise en date française
		function static convertDate($date)
		{
			 $tabDate = explode('-' , $date);
			 $enDate  = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0];
			 return $enDate;
		}
		
		function static recup_Annee_promo($idpromo)
		{
			include('connex.inc.php');
			$idcom=Connex('edt','myparam');
			$requete="SELECT c.annee_promo";
			$requete+="FROM creneau c";
			$requete+="$c.id_promo = $idpromo";
			$res=mysql_query($req,$idcom);
			return $res;
			
		}
		
		function static get_anne($date)
		{
			$annee =  date('Y', strtotime($date));
			return $annee;
		}
		
	}	
?>


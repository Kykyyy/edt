<?php
	Affich_EDT	{
	private $id_promo;
	private $id_salle;
	private $id_intervenant;
	private $id_ec;
	
	public function __construct($id_promo, $salle,$intervenant,$ec)
	{	
		$this->id_promo;
		$this->id_salle;
		$this->id_intervenant;
		$this->id_ec;	
	}
	
	//Listing des formations pour choix et affichage de l'emploi du temps complet de la formation selectionné.
	public function affich_par_promo($annee)
	{
		include('connex.inc.php');
		$idcom=Connex('edt','myparam');
		$requete="SELECT c.id_salle, c.id_enseignant, c.id_ec, c.date, p.h_debut, p.h.fin, p.duree";
		$requete+="FROM creneau c, plage_horaire p";
		$requete+="WHERE c.promotion = $this->id_promotion and and c.annee_promo = $annee c.id_plage_horaire = p.id_plage_horaire";
		$requete+="ORDER BY date";
		$res=mysql_query($req,$idcom);
		return $res;
	}
	
	
	//Listing des salles pour choix et affichage de l'emploi du temps complet de la salle selectionné.	
	public function affich_par_salle()
	{
		include('connex.inc.php');
		$idcom=Connex('edt','myparam');
		$requete="SELECT c.id_salle, c.id_enseignant, c.id_ec, c.date, p.h_debut, p.h.fin, p.duree";
		$requete+="FROM creneau c, plage_horaire p";
		$requete+="WHERE c.id_salle = $this->id_salle and c.id_plage_horaire = p.id_plage_horaire";
		$requete+="ORDER BY date";
		$res=mysql_query($req,$idcom);
		return $res;
	
	}
	
	//Listing des intervenant pour choix et affichage de l'emploi du temps complet de la salle selectionné.
	public function affich_par_intervenant()
	{
		include('connex.inc.php');
		$idcom=Connex('edt','myparam');
		$requete="SELECT c.id_salle, c.id_enseignant, c.id_ec, c.date, p.h_debut, p.h.fin, p.duree";
		$requete+="FROM creneau c, plage_horaire p";
		$requete+="WHERE c.id_intervenant = $this->id_intervenant and c.id_plage_horaire = p.id_plage_horaire";
		$requete+="ORDER BY date";
		$res=mysql_query($req,$idcom);
		return $res;	
	}
	
	//Listing des EC pour choix et affichage de l'emploi du temps complet de l'EC selectionné.
	public function affich_par_ec()
	{
		include('connex.inc.php');
		$idcom=Connex('edt','myparam');
		$requete="SELECT c.id_salle, c.id_enseignant, c.id_ec, c.date, p.h_debut, p.h.fin, p.duree";
		$requete+="FROM creneau c, plage_horaire p";
		$requete+="WHERE c.id_ec = $this->id_ec and c.id_plage_horaire = p.id_plage_horaire";
		$requete+="ORDER BY date";
		$res=mysql_query($req,$idcom);
		return $res;
	
	}
	
    //Via une fourchette de date on affiche l'EDT de la formation
	public function affich_par_intervalle_date($dt_deb, $dt_fin)
	{
		include('connex.inc.php');
		$idcom=Connex('edt','myparam');
		$requete="SELECT c.id_salle, c.id_enseignant, c.id_ec, c.date, p.h_debut, p.h.fin, p.duree";
		$requete+="FROM creneau c, plage_horaire p";
		$requete+="WHERE (c.date BETWEEN $dt_deb and $dt_fin) and c.id_plage_horaire = p.id_plage_horaire";
		$requete+="ORDER BY date";
		$res=mysql_query($req,$idcom);
		return $res;
	
	}
	public function get_jour_semaine($date)
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
	
		
	
	}
	//Convertie une date anglaise en date française
	function convertDate($date)
{
     $tabDate = explode('-' , $date);
     $enDate  = $tabDate[2].'-'.$tabDate[1].'-'.$tabDate[0];
     return $enDate;
}

?>
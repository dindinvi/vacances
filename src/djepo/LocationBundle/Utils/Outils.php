<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Outils
 *
 * @author HOME
 */
class Outils {
    //put your code here
     function compareDateForLocationPrestation($dateDebut,$dateFin)
         {
		    $DBEBUT = explode("/", $dateDebut);
			$DFIN = explode("/", $dateFin);
			$somme = 0;
			
			$dD = $DBEBUT[2].$DBEBUT[1].$DBEBUT[0];
			$dF = $DFIN[2].$DFIN[1].$DFIN[0];
			

			if($dD > $dF)
			{
			  $message = '<span class="erreur">date de début superieur à la date de fin.</span><br>';
			  $contenu='';
			   $somme = 1;
			}
			else {
			        $message='';
					$contenu = 'ok';
					
			}
			
			$information=array($message,$contenu,$somme);
			return $information;
		 
		 }
           
                    function compareDate($dateDebut,$dateFin)
         {
		    $DBEBUT = explode("/", $dateDebut);
			$DFIN = explode("/", $dateFin);
			
			$dD = $DBEBUT[2].$DBEBUT[1].$DBEBUT[0];
			$dF = $DFIN[2].$DFIN[1].$DFIN[0];
			
			
			if($dD > $dF) return 'date de début superieur à la date de fin';
			else return 'ok';
		 
		 }
                 
                 
                 function html($string)
		{
			return utf8_encode(htmlspecialchars($string, ENT_QUOTES));
		}

		function url_format($string)
		{
			$string = str_replace(' ', '-', strtolower($string));
			return html(preg_replace('#[^a-z0-9-]#', '', $string));
		}
                
                function changeDateUsEnFr($date)
{

   $dateus =  str_replace('-', '/', $date);
	$datefr=$dateus{8}.$dateus{9}."-".$dateus{5}.$dateus{6}."-".$dateus{0}.$dateus{1}.$dateus{2}.$dateus{3};
	return $datefr;
}

function changeDateFrEnUs($date)// pour insertion mysql
{
	$datefr = str_replace('/', '-', $date);
	$dateus=$datefr{6}.$datefr{7}.$datefr{8}.$datefr{9}."-".$datefr{3}.$datefr{4}."-".$datefr{0}.$datefr{1};
	return $dateus;
} 

function generateurMdp()
	{
		// générer un mot de passe  Ensemble des caractères utilisés pour le créer
		$cars="az0erty2ui3op4qs_5df6gh7jk8lm9wxcvbn-";
		$wlong=strlen($cars);
		$wpas="";
		$taille=rand(4,10);
		// On initialise la fonction aléatoire
		srand((double)microtime()*1000000);
		for($i=0;$i<$taille;$i++){
		// Tirage aléatoire d'une valeur entre 1 et wlong
		      $wpos=rand(0,$wlong-1);
			  $wpas=$wpas.substr($cars,$wpos,1);
		     
		}
		
		return  $wpas;
  }



}

?>

<?php
// inclusion de la page de configuration des constantes afin de rendre 
// code aisÃ©ment portable
include("config.php");

//inclusion du haut de la page, en utilisant la constante dÃ©finie dans config.php
include(PAGES."header.php");

// test sur l'existance du paramÃ¨tre action d'l'URL
if(isset($_GET["action"]))
{
	// rÃ©cupartion de l'action passÃ©e dans l'url
	$action=$_GET["action"];
        // test de la valeur de la variable
	switch ($action) {
		case 'accueil':
			include(PAGES."accueil.php");
			break;

		case 'contact':
			include(PAGES."contact.php");
			break;

		case 'annonce':
			include(PAGES."annonce.php");
			break;

		case 'emploi':
			include(PAGES."emploi.php");
			break;

		case 'epreuve':
			include(PAGES."epreuve.php");
			break;

		case 'portfolio':
			include(PAGES."portfolio.php");
			break;

		default:
			include(PAGES."accueil.php");
			break;
	}
}
//si pas d'action dans l'url
else
{
	include(PAGES."accueil.php");
}
include(PAGES."footer.php");
?>

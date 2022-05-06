<?PHP
include_once '../../core/ReclamationC.php';



if (isset($_GET['id'])){
	$ReclamationC=new ReclamationC();
	$ReclamationC->Supprimerreclamation($_GET["id"]);


header('Location: reclamation.php');
}

?>
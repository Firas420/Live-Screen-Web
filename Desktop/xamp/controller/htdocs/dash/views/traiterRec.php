<?PHP
include_once '../../core/ReclamationC.php';
include_once '../../entities/reclamation.php';


if (isset($_GET['id'])){
		$r = new Reclamation(0,"","","traite",4);
	$ReclamationC=new ReclamationC();
	$ReclamationC->modifierreclamation($r,$_GET["id"]);


header('Location: reclamation.php');
}

?>
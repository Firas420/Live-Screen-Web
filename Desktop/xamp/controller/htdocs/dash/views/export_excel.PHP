<?php
	// header("Content-Type: application/xls");    
	// header("Content-Disposition: attachment; filename=file.xls");  
	// header("Pragma: no-cache"); 
	// header("Expires: 0");

	include_once '../../core/UserC.php';
	
	
	// $output = "";
	
	// $output .="
	
	// ";
	{
		$config = config::getConnexion();
		
			$querry = $config->prepare('
			select nom as nom , prenom as prenom , mail as mail  , role as role from user');
			$querry->execute();
			$data = $querry->fetchAll();
			// print_r($data);exit();
			// $datas = array();
	// 		foreach($data as $article)
	// 		{
	// 			$datas[]= array (

					
    //                 'nom'=>$article->getNom(),
    //                 'categorie'=>$article->getCategorie(),
    //                 'description'=>$article->getDescription(),

	// 			);
			require_once 'XLS.PHP';
		XLS::export($data,'Export fichier');
		}

	

	

	
	// $output .="
	// 		</tbody>
			
	// 	</table>
	// ";
	
	// echo $output;
	
	
?>
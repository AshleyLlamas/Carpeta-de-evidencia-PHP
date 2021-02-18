<?php

class EnlacesPaginas{

	static function enlacesPaginasModel($enlacesModel){

		#Lista blanca:
		if($enlacesModel == "nosotros" ||
			$enlacesModel == "servicios" ||
			$enlacesModel == "contactenos"){

			$module = "views/modules/".$enlacesModel.".php";
		}

		else if($enlacesModel == "index"){
			$module = "views/modules/inicio.php";
		}
		else{
			$module = "views/modules/inicio.php";
		}

		return $module;
	}

}

?>
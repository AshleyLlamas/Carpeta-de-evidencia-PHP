<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#----------------------
	public function plantilla(){

		#con el include estoy incluyendo el archivo template.php (echo)
		include "views/template.php";
	}

	#INTERACCIÓN DEL USUARIO
	#-----------------------
	public function enlacesPaginasController(){

		#isset significa que trae cntenido
		if(isset($_GET["action"])){
			$enlacesController = $_GET["action"];
		}
		else{
			$enlacesController = "index.php";
		}

		$respuesta=EnlacesPaginas::enlacesPaginasModel($enlacesController);
		include $respuesta;
	}

}

?>
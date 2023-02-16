<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>
		<?php
		echo $this->lang["web"]["title"];
		?>
	</title>
	
	<!-- SCRIPTS -->
	<?php
	if (!is_null($this->js)) {
	    LogModel::create(new Log("Carga de JS."));
	    
	    foreach ($this->js as $file) {
	        if (file_exists("js/$file.js")) {
	            LogModel::create(new Log("Carga de $file.js."));
	            echo "<script type=\"text/javascript\" src=\"js/$file.js\"></script>";
	        } else {
	            LogModel::create(new Log("El fichero, $file.js, no existe."));
	        }
	    }
	}
	?>
	
	<!-- ESTILOS -->
	<?php
	
	if (!is_null($this->js)) {
	   LogModel::create(new Log("Carga de CSS."));
	   
	   foreach ($this->css as $file) {
	       if (file_exists("styles/$file.css")) {
	           LogModel::create(new Log("Carga de $file.css."));
	           echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"styles/$file.css\" />";
	       } else {
	           LogModel::create(new Log("El fichero, $file.css, no existe."));
	       }
	   }
	}
	
	?>
</head>

<body>

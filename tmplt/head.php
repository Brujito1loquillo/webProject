<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>
		<?php
            echo $this->lang["web"]["title"];
		?>
	</title>
	
	<!-- SCRIPTS -->
	<?php
	if (isset($this->js)) {
	    LogModel::create(new Log("Cargando ficheros JS."));
	    
	    foreach ($this->js as $file) {
	        if (file_exists("js/$file.js")) {
	           LogModel::create(new Log("Cargando $file.js."));
	           echo "<script type=\"text/javascript\" src=\"js/$file.js\"></script>";
	        } else {
	            LogModel::create(new Log("El fichero js/$file.js no existe."));
	        }
	    }
	}
	?>
	
	<!-- CSS -->
	<?php
	
	if (isset($this->css)) {
	    LogModel::create(new Log("Cargando ficheros CSS."));
	    
	    foreach ($this->css as $file) {
	        if (file_exists("styles/$file.css")) {
	           LogModel::create(new Log("Cargando $file.css."));
	           echo "<link type=\"text/css\" rel=\"stylesheet\" href=\"styles/$file.css\" />";
	        } else {
	            LogModel::create(new Log("El fichero styles/$file.css no existe."));
	        }
	    }
	}
	
	?>
</head>

<body>
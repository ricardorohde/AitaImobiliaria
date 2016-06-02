<?php 
	phpinfo();

	var_dump(gd_info());

	if(extension_loaded("gd"))
		echo "Biblioteca GD carregada";
	else
		echo "Biblioteca GD não foi carregada ou não existe";

	echo($_SERVER['DOCUMENT_ROOT'].'/'.$dirformated.'/'.$file_name);

?>
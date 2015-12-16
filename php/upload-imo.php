<?php
$uploaddir = '/htdocs/img/';
if(count($_FILES['file']['name'])) {
	foreach ($_FILES['file']['name'] as $file) {
		$dir = 'file';
		$uploaddir = $uploaddir . $dir;
	    $uploadfile = $uploaddir . basename($_FILES['file']['name']);
	    if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
 			echo "File is valid, and was successfully uploaded.\n";
		} else {
   			echo "Upload failed";
				}
		//do your upload stuff here
		echo $file;
		
	}
}
?>
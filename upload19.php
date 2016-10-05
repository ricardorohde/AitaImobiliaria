<form action="" method="post" enctype="multipart/form-data" id="something" class="uniForm">
    <input name="files[]" id="files" size="30" type="file" class="fileUpload" multiple/>
    <button name="submit" type="submit" class="submitButton">Upload/Resize Image</button>
 
<?php
    $time_start = microtime(true);
    if(isset($_POST['submit'])){
      if (isset ($_FILES['files'])){
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
          
          $imagename = $_FILES['files']['name'][$key];
          $source = $_FILES['files']['tmp_name'][$key];
          $target = "teste/".$imagename;
          move_uploaded_file($source, $target);
          $imagepath = $imagename;
          $save = "teste/" . $imagepath; //This is the new file you saving
          $file = "teste/" . $imagepath; //This is the original file
          list($width, $height) = getimagesize($file);
          $tn = imagecreatetruecolor($width, $height);
          $image = imagecreatefromjpeg($file);
          imagecopyresampled($tn, $image, 0, 0, 0, 0, $width, $height, $width, $height);
          imagejpeg($tn, $save, 50);
  }
          
          #$save = "images/sml_" . $imagepath; //This is the new file you saving
          #$file = "images/" . $imagepath; //This is the original file
          #list($width, $height) = getimagesize($file) ; 
          #$modwidth = 130; 
          #$diff = $width / $modwidth;
          #$modheight = 185; 
          #$tn = imagecreatetruecolor($modwidth, $modheight) ; 
          #$image = imagecreatefromjpeg($file) ; 
          #imagecopyresampled($tn, $image, 0, 0, 0, 0, $modwidth, $modheight, $width, $height) ; 
          #imagejpeg($tn, $save, 70) ; 
        #echo "Large image: <img src='images/".$imagepath."'><br>"; 
        #echo "Thumbnail: <img src='images/sml_".$imagepath."'>"; 
      }
    } 
    $time_finish = microtime(true);
    $exec_time = $time_finish - $time_start;
    print_r($exec_time);
?>
<?php
$target_dir = "js/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo "Il file esiste già.";
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
  echo "Il file è troppo grande.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Solo i file JPG, JPEG, PNG & GIF sono consentiti.";
  $uploadOk = 0;
}

$file = $_FILES["fileToUpload"]['tmp_name'];
list($width, $height) = getimagesize($file);

if($width > "1000" || $height > "1000") {
    echo "La dimensione della pagina deve essere 1000 x 1000 pixels.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {

} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "Il file ". basename( $_FILES["fileToUpload"]["name"]). " è stato caricato.";
  } else {
    echo "Il file non è stato caricato.";
  }
}
?>
<html>
<body>

<form action="carica.php" method="post" enctype="multipart/form-data">
  Seleziona l'immagine da caricare:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>

</body>
</html>
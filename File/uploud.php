<?php
$file = "unggah/";
$target = $file . basename($_FILES["cover"]["name"]);
$upload = 1;
$tipeImage = strtolower(pathinfo($target,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["cover"]["tmp_name"]);
  if($check !== false) {
    echo "Gambar " . $check["mime"] . ".<br>";
    $uploadOk = 1;
  } else {
    echo "Bukan gambar.<br>";
    $uploadOk = 0;
  }
}

if ($_FILES["cover"]["size"] > 500000) {
  echo "Berkas terlalu besar.<br>";
  $uploadOk = 0;
}

if($tipeImage != "jpg" && $tipeImage != "png" && $tipeImage != "jpeg"
&& $tipeImage != "gif" ) {
  echo "hanya bisa input jpg, png dan gif";
  $uploadOk = 0;
}

if ($upload == 0) {
  echo "Gagal Di uploud.<br>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["cover"]["tmp_name"], $target)) {
    echo "file". htmlspecialchars( basename( $_FILES["cover"]["name"])). "Berhasil diUploud<br>";
  } else {
    echo "Ada error";
  }
}
?>
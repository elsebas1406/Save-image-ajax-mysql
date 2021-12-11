<?php
  include ('conn.php');
  $descr = "";
  $binariosImagen = "";
  
  if (!empty($_POST['descrip'])) {
      $descr = $_POST['descrip'];
  }

  if(!empty($_FILES['image']['name'])){
    $tipoArchivo = $_FILES['image']['type'];
    $nombreArchivo = $_FILES['image']['name'];
    $tamanoArchivo = $_FILES['image']['size'];
    $imagenSubida = fopen($_FILES['image']['tmp_name'], 'r');
    $binariosImagen = fread($imagenSubida, $tamanoArchivo);
    $binariosImagen = mysqli_escape_string($conn, $binariosImagen);
  } 
  
  $query = "INSERT INTO `imagen`(`titulo`, `image`) VALUES ('$descr','$binariosImagen')";

  echo mysqli_query($conn,$query);
?>
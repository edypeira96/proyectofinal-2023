<?php
require 'db_conn.php';
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $info = $_POST["info"];
  $link = $_POST["link"];
  if($_FILES["imagen"]["error"] == 4){
    echo
    "<script> alert('Image Does Not Exist'); </script>"
    ;
  }
  else{
    $fileName = $_FILES["image"]["name"];
    $fileSize = $_FILES["image"]["size"];
    $tmpName = $_FILES["image"]["tmp_name"];

    $validImageExtension = ['jpg', 'jpeg', 'png'];
    $imageExtension = explode('.', $fileName);
    $imageExtension = strtolower(end($imageExtension));
    if ( !in_array($imageExtension, $validImageExtension) ){
      echo
      "
      <script>
        alert('Invalid Image Extension');
      </script>
      ";
    }
    else if($fileSize > 1000000){
      echo
      "
      <script>
        alert('Image Size Is Too Large');
      </script>
      ";
    }
    else{
      $newImageName = uniqid();
      $newImageName .= '.' . $imageExtension;

      move_uploaded_file($tmpName, 'images/' . $newImageName);
      $query = "INSERT INTO cosmetologo VALUES('', '$name','$info','$link', '$newImageName')";
      mysqli_query( $mysqli, $query);
      echo
      "
      <script>
        alert('Successfully Added');
        document.location.href = 'tabla_cosme.php';
      </script>
      ";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Administrador</title>
  </head>
  <body>

 <div align="center"><img src="imagencare.jpg" class="img-rounded" alt="logo" width="304" height="236"> 
        <h1>Registro de cosmetologo</h1></div>
   </nav>

   <div class="container">
      <div class="text-center mb-4">
      <script src="https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js" defer></script>
    <script src="/js/validation.js" defer></script>
    <link rel="stylesheet" href="nani.css">
         <p class="text-muted">Completa el formulario para registrar un nuevo cosmetologo </p>
      </div>
      <div class="container d-flex justify-content-center">
    <form class="" action="" method="post" autocomplete="off" enctype="multipart/form-data">
    <div align="center"><label for="name">Nombre : </label>
      <input type="text" name="name" id = "name" required value=""> <br>
      <label for="name">información : </label>
      <input type="text" name="info" id = "info" required value=""> <br><br>
      <label for="link">Link : </label><br>
      <input type="text" name="link" id = "link" required value=""> <br>
      <label for="image">Imagen : </label>
      <input type="file" name="image" id = "imagen" accept=".jpg, .jpeg, .png" value=""> <br> <br>
</div><div>
      <div align="center"><button type="submit" class="btn btn-success" name="submit">Registrar</button>
               <a href="adm-tabla_cosme.php" class="btn btn-danger">atras</a></div>
            </div>
    </form>
    <br>
    <a href="tabla_cosme.php"></a>
</div>





            


   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>





  </body>
</html>
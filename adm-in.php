<?php
include "db_conn.php";
?>
<?php
session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/db_conn.php";
    
    $sql = "SELECT * FROM adm
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html lang="en">

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
  <nav class="navbar navbar-light justify-content-center fs-3 mb-5" style="background-color: #F1085D;">
   Interfaz de administrador BeginningCare
   <img src="./images/thr1.png" width="80" height="80" alt="logo">


   <?php if (isset($user)): ?>
        
        <div align="left"><p><h3><b>Hola administrador <?= htmlspecialchars($user["name"]) ?></b></h3></p></div>
    
    

       
    
  
  </nav>

  <div align="center"><a href="amd-logout.php">
          <button class="btn btn-dark mb-3" style="height:50 px;" >   cerrar sesión</button>
          </a></div> 
    
    <?php else: ?>
    
    
    
    <?php endif; ?>
  
 


  <div class="container">
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>

        
    <a href="adm-signup.html" class="btn btn-dark mb-3">Nuevo administrador</a>
    <a href="tabla_cosme.php" class="btn btn-dark mb-3">cosmetologos</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <h3>usuarios<h3>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nombre</th>
          
          <th scope="col">Email</th>
         
       
        </tr>
      </thead>
      <tbody>
        <?php
        $sql = "SELECT * FROM `user`";
        $result = mysqli_query($mysqli, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["name"] ?></td>
           
            <td><?php echo $row["email"] ?></td>
           
            
            <td>
              <a href="adm-edit.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
              <a href="adm-delete.php?id=<?php echo $row["id"] ?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a>
            </td>
          </tr>
        <?php
        }
        ?>
     
        
        



      </tbody>
    </table>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
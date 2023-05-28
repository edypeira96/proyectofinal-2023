<?php

$is_invalid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = sprintf("SELECT * FROM user
                    WHERE email = '%s'",
                   $mysqli->real_escape_string($_POST["email"]));
    
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
    
    if ($user) {
        
        if (password_verify($_POST["password"], $user["password_hash"])) {
            
            session_start();
            
            session_regenerate_id();
            
            $_SESSION["user_id"] = $user["id"];
            
            header("Location: index.php");
            exit;
        }
    }
    
    $is_invalid = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesión</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">   
</head>
<body>
<div align="center"><img src="imagencare.jpg" class="img-rounded" alt="logo" width="304" height="236">  
    <h1>inicio de sesión</h1><div>
    
    <?php if ($is_invalid): ?>
        <em>sesion invalida</em>
    <?php endif; ?>
    
    <form method="post">
        <b><label for="email">correo electronico:</label></b>
        <input type="email" name="email" id="email"
               value="<?= htmlspecialchars($_POST["email"] ?? "") ?>">
        
        <b><br><label for="password">contraseña:</label></br></b>
        <input type="password" name="password" id="password">
        
        <div align="center"> <b><button>iniciar sesion</button></b></div>
    </form>
    
</body>
</html>









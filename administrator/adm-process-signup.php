
<?php

if (empty($_POST["name"])) {
    die("es requerido un nombre");
}

if ( ! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
    die("Debe ser un correo valido");
}

if (strlen($_POST["password"]) < 2) {
    die("tiene que tener minimo 2 caracteres"); 
}





if ($_POST["password"] !== $_POST["password_confirmation"]) {
    die("Las contraseñas deben coincidir ");
}



$mysqli = require __DIR__ . "/db_conn.php";

$sql = "INSERT INTO adm (name, email, password_hash)
        VALUES (?, ?, ?)";
        
$stmt = $mysqli->stmt_init();

if ( ! $stmt->prepare($sql)) {
    die("SQL error: " . $mysqli->error);
}

$stmt->bind_param("sss",
                  $_POST["name"],
                  $_POST["email"],
                  $_POST["password"],
                  );
                  
if ($stmt->execute()) {

    header("Location: in.php");
    exit;
    
} else {
    
    if ($mysqli->errno === 1062) {
        die("El correo ya existe en la base de datos");
    } else {
        die($mysqli->error . " " . $mysqli->errno);
    }
}









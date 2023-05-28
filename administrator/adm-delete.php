<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `user` WHERE id = $id";
$result = mysqli_query($mysqli, $sql);

if ($result) {
  header("Location: adm-in.php?msg=SE elimino el usuario");
} else {
  echo "Failed: " . mysqli_error($mysqli);
}

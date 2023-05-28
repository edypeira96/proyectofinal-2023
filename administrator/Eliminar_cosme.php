<?php
include "db_conn.php";
$id = $_GET["id"];
$sql = "DELETE FROM `cosmetologo` WHERE id = $id";
$result = mysqli_query($mysqli, $sql);

if ($result) {
  header("Location: tabla_cosme.php?msg=Se elimino el cosmetolgo");
} else {
  echo "Failed: " . mysqli_error($mysqli);
}

<!DOCTYPE html>
<html lang="en">
<head>
<title>Tipo de Parpado</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <fieldset>
        <legend> Test de Tipo de Parpado</legend>
        <form action="parpado.php" method="post">
            <p><b>1.-¿Tus ojos tienen pliegue?</b></p>
            <p><input type="radio" name="r1" value="a"> Si </p>
            <p><input type="radio" name="r1" value="b"> No </p>

            <p><b>2.-Imagina una linea recta a traves de tu ojo¿La esquina izquierda esta hacia abajo?</b></p>
            <p><input type="radio" name="r2" value="c"> Si </p>
            <p><input type="radio" name="r2" value="d"> No </p>

            <p><b>3.-¿El pliegue de tu ojo se oculta cuando cierras el ojo?</b></p>
            <p><input type="radio" name="r3" value="e"> Si </p>
            <p><input type="radio" name="r3" value="f"> No </p>

            <p><b>4.-Cuando abres el ojo ¿La parte blanca se ve abajo o arriba del iris?</b></p>
            <p><input type="radio" name="r4" value="g"> Si </p>
            <p><input type="radio" name="r4" value="h"> No </p>

            <p><input type="submit"  value="Enviar"></p>

        </form>
        <?php
        if(isset($_REQUEST['r1'])  && isset($_REQUEST['r2'])  && isset($_REQUEST['r3'] )&& isset($_REQUEST['r4'] )) {
            if ($_REQUEST['r1'] == "" || $_REQUEST['r2'] == "" || $_REQUEST['r3'] == "" || $_REQUEST['r4'] == "") {    
                echo "selecciona una respuesta para cada pregunta";
            }
        if ($_REQUEST['r1'] == "b" ) {
            echo "<center> Tienes Monoparpado<br>
            <img src='mono.jpg' width='400' height='200'></center>";
                }
                else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "c") {
                    echo "<center> Tienes Parpados Caidos<br>
                    <img src='caido.jpg' width='400' height='300'></center>";
                        }
                        else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "d" && $_REQUEST['r3'] == "e") {
                            echo "<center> Tienes Parpados Caidos<br>
                            <img src='caido.jpg' width='400' height='300'></center>";
                                }
                                else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "d" && $_REQUEST['r3'] == "e" && $_REQUEST['r4'] == "g") {
                                    echo "<center>Tienes Parpados Redondos<br>
                                    <img src='redondo.jpg' width='400' height='300'></center>";
                                                }else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "d" && $_REQUEST['r3'] == "f" && $_REQUEST['r4'] == "g") {
                                                    echo "<center>Tienes Parpados Redondos<br>
                                                    <img src='redondo.jpg' width='400' height='300'></center>";
                                                }else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "d" && $_REQUEST['r3'] == "e" && $_REQUEST['r4'] == "h") {
                                            echo "<center>Tienes Parpados Almendrados<br>
                                            <img src='almond.jpg' width='400' height='300'></center>";
                                        }else if($_REQUEST['r1'] == "a" && $_REQUEST['r2'] == "d" && $_REQUEST['r3'] == "f" && $_REQUEST['r4'] == "h") {
                                            echo "<center>Tienes Parpados Almendrados<br>
                                            <img src='almond.jpg' width='400' height='300'></center>";
                                        }
                                    }
        ?>
    </fieldset>
</body>
</html>
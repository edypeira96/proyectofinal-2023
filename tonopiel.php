<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tipo de tono de Piel</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <fieldset>
        <legend> Test de Tipo de tono de piel</legend>
        <form action="tonopiel.php" method="post">
            <p><b>1.-¿De que color son las venas de tu muñeca?</b></p>
            <p><input type="radio" name="r1" value="Azul" checked> Azules</p>
            <p><input type="radio" name="r1" value="Verde"> Verdosas</p>
            <p><input type="radio" name="r1" value="Ambos"> Ambas</p>

            <p><b>2.-Coloca una hoja blanca a lado de tu rostro limpio y con luz natural, ¿como notas tu rostro?</b></p>
            <p> <input type="radio" name="r2" value="Anaranjado"> Anaranjado/Amarillo</p>
            <p><input type="radio" name="r2" value="Rosado"> Rosado</p>
            <p><input type="radio" name="r2" value="Ambos"> Ambos </p>

            <p><b>3.-Busca un par de joyas en color plateado y dorado y ponlas a lado de tu rostro una por una ¿cual se te ve mejor?</b></p>
            <p><input type="radio" name="r3" value="Plateado"> Plateada</p>
            <p><input type="radio" name="r3" value="Dorado"> Dorada </p>
            <p><input type="radio" name="r3" value="Ambos"> Ambas</p>

            <p><input type="submit"  value="Enviar"></p>
            
           

        </form>
        <?php
        if(isset($_REQUEST['r1'])  && isset($_REQUEST['r2'])  && isset($_REQUEST['r3'] )) {
            if ($_REQUEST['r1'] == "" && $_REQUEST['r2'] == "" && $_REQUEST['r3'] == "" ) {    
                echo "selecciona una respuesta para cada pregunta";
            }

         if ($_REQUEST['r1'] == "Azul" && $_REQUEST['r2'] == "Rosado" && $_REQUEST['r3'] == "Plateado" ) {

    echo "<center><h1>Eres tono Frio</h1><br>
    <img src='frio.jpg' width='400' height='300'><img src='frioplt.png' width='200' height='300'><br>
                    <h3>Si quieres saber qué colores usar para las pieles frias puedes probar con: <br>
                    Azul, Verde, Rosa, Violeta, Verde, <br>
                    Gris, Rojo y Colores claros que iluminan como<br>
                     blanco óptico, blanco ceniza, hueso, hielo, tiza, todos los blancos fríos.<h3>
    </center>";
        }
         else if ($_REQUEST['r1'] == "Verde" && $_REQUEST['r2'] == "Anaranjado" && $_REQUEST['r3'] == "Dorado" ) {

    echo "<center><h1>Eres tono Calido</h1><br>
    <img src='calido.png' width='500' height='600'><img src='calidoplt.png' width='400' height='600'><br>
                                   <h3>Si quieres saber qué colores usar para las pieles cálidas, toma nota:<br>
                                        rosado, naranja, salmón, melocotón, 
                                                  <br>albaricoque, marrón, verde limón, 
                                    azul vibrante, turquesa y hasta los tonos pastel.</h3>
    </center>";
        }
       else {
            echo "<center><h1>Eres tono neutral</h1><img src='neutro.jpg' width='500' height='400'><br>
            <h3> Las personas de tono de piel neutral pueden utilizar cualquier tono de color y se le vera bien</h3>
    </center>";
        }
    
}
        ?>
    </fieldset>
</body>
</html>
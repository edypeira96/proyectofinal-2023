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
        <form action="pielt.php" method="post">
            <p><b>1.-¿Tu piel en primer contacto se siente?</b></p>
            <p><input type="radio" name="r1" value="Untuosa"checked> Untuosa</p>
            <p><input type="radio" name="r1" value="Brillante"> Brillante en zonas como la barbilla o la nariz </p>
            <p><input type="radio" name="r1" value="Fina"> Fina y Suave </p>

            <p><b>2.-Un par de horas después de lavar e hidratar tu cara, ¿cómo te la notas?</b></p>
            <p><input type="radio" name="r2" value="Seca"> Seca y áspera, como si no hubiera aplicado la crema</p>
            <p><input type="radio" name="r2" value="Brillante"> Muy brillante </p>
            <p><input type="radio" name="r2" value="Normal"> Normal, quizás hay zonas más hidratadas que otras </p>

            <p><b>3.-Los poros de tu piel son...</b></p>
            <p><input type="radio" name="r3" value="Invisible"> Totalmente invisibles </p>
            <p><input type="radio" name="r3" value="Visibles"> En unas zonas más visibles que en otras </p>
            <p><input type="radio" name="r3" value="Abiertos"> Abiertos y visibles </p>

            <p><b>4.-Debido a los cambios de temperatura o a otros agentes externos, ¿tu piel se irrita o enrojece con facilidad?</b></p>
            <p><input type="radio" name="r4" value="Mejillas"> Puntualmente, sobre todo en la zona de las mejillas </p>
            <p><input type="radio" name="r4" value="Nunca"> Nunca </p>
            <p><input type="radio" name="r4" value="Si"> Sí, más a menudo de lo que me gustaría </p>
           
            <p><b>5.-¿Son habituales las imperfecciones o los brotes de acné en tu rostro?</b></p>
            <p><input type="radio" name="r5" value="si">Sí, la verdad que no consigo evitarlo </p>
            <p><input type="radio" name="r5" value="no"> No, tengo suerte con ello </p>
            <p><input type="radio" name="r5" value="dvc"> De vez en cuando, sobre todo en épocas de mayor ajetreo o estrés </p> 

            <p><b>6.-¿Notas (de forma constante) sequedad o tirantez en tu rostro?</b></p>
            <p><input type="radio" name="r6" value="si"> Sí, habitualmente mi piel tiene un aspecto descamado </p>
            <p><input type="radio" name="r6" value="todo"> De forma puntual y sobre todo en épocas de frío y en la zona de las mejillas </p>
            <p><input type="radio" name="r6" value="no"> No, la verdad que mi piel siempre está brillante y tensa </p>

            <p><b>7.-¿Tienes arrugas en tu rostro?</b></p>
            <p><input type="radio" name="r7" value="ninguna"> Ninguna, la verdad que no se aprecian en mi piel </p>
            <p><input type="radio" name="r7" value="si"> Lamentablemente sí, sobre todo en la zona de los ojos </p>
            <p><input type="radio" name="r7" value="poco"> Sí, pero son muy poco visibles </p>

            <p><b>8.-A la hora de tomar el sol...</b></p>
            <p><input type="radio" name="r8" value="bronceada"> Mi piel suele enrojecerse pero finalmente se ve bronceada </p>
            <p><input type="radio" name="r8" value="especial"> Debo tener especial cuidado para que no se irrite demasiado </p>
            <p><input type="radio" name="r8" value="color"> Agarro rápidamente color </p>

            <p><b>9.-¿Cuántas veces al día lavas tu cara?</b></p>
            <p><input type="radio" name="r9" value="poco"> Muy poco, realmente no creo que lo necesite </p>
            <p><input type="radio" name="r9" value="menos"> 2 o 3 veces, depende del día quizás menos </p>
            <p><input type="radio" name="r9" value="continuo"> Continuamente, mi piel lo necesita </p>

            <p><b>10.-Si pudieras pedir un deseo sobre tu piel seria...</b></p>
            <p><input type="radio" name="r10" value="aspera"> Acabar con la sensación áspera de mi piel </p>
            <p><input type="radio" name="r10" value="clave"> Buscaría la clave para unificar las zonas de mi rostro </p>
            <p><input type="radio" name="r10" value="eliminar"> Optaría por eliminar los brillos constantes </p>



            <p><input type="submit"  value="Enviar"></p>

        </form>
        <?php
         if(isset($_REQUEST['r1'])  && isset($_REQUEST['r2'])  && isset($_REQUEST['r3'] )&& isset($_REQUEST['r4'] ) 
         && isset($_REQUEST['r5'])  && isset($_REQUEST['r6'])  && isset($_REQUEST['r7'] )
         && isset($_REQUEST['r8'] ) && isset($_REQUEST['r9'] )&& isset($_REQUEST['r10'] )) {

            if ($_REQUEST['r1'] == "" || $_REQUEST['r2'] == "" || $_REQUEST['r3'] == "" || $_REQUEST['r4'] == ""|| $_REQUEST['r5'] == ""
            || $_REQUEST['r6'] == ""|| $_REQUEST['r7'] == ""|| $_REQUEST['r8'] == ""|| $_REQUEST['r9'] == ""|| $_REQUEST['r10'] == "") {    
                echo "selecciona una respuesta para cada pregunta";
            }


        if ($_REQUEST['r1'] == "Fina" && $_REQUEST['r2'] == "Brillante" && $_REQUEST['r3'] == "Abiertos" && $_REQUEST['r4'] == "Si" &&
        $_REQUEST['r5'] == "si" && $_REQUEST['r6'] == "no" && $_REQUEST['r7'] == "ninguna" && $_REQUEST['r8'] == "especial" && $_REQUEST['r9'] == "continuo" &&
        $_REQUEST['r10'] == "eliminar" ) {

            echo "<center><h1>Eres Piel Grasa</h1><br>
            <img src='grasa.jpg' width='500' height='400'><br>
            <h3>La piel grasa o seborrea es un exceso de sebo que suele mostrarse en forma de zonas
             brillantes sobre las áreas centrales del rostro, especialmente en la frente</h3></center>";
                }
                
                else if ($_REQUEST['r1'] == "Untuosa" && $_REQUEST['r2'] == "Seca" && $_REQUEST['r3'] == "Invisibles" && $_REQUEST['r4'] == "Nunca" &&
                $_REQUEST['r5'] == "no" && $_REQUEST['r6'] == "si" && $_REQUEST['r7'] == "si" && $_REQUEST['r8'] == "color" && $_REQUEST['r9'] == "poco" &&
                $_REQUEST['r10'] == "aspera" ) {
        
                    echo "<center><h1>Eres Piel Seca </h1><br>
                    <img src='grasa.jpg' width='500' height='400'><br>
                    <h3>La piel seca hace que la piel se vea y se sienta áspera, escamosa y con picazón. 
                    La ubicación de estos parches de sequedad varía de 
                    una persona a otra. Es una afección común que afecta a personas de todas las edades.</h3></center>";
                        }
                        else {
                    echo "<center><h1>Eres piel Mixta </h1><br>
                    <img src='mixta.jpg' width='500' height='400'><br>
                    <h3>es una combinación de dos tipos de piel: normal-seca y grasa o con impurezas. 
                    La piel mixta presenta un aspecto brillante y tiende a desarrollar pequeñas impurezas, 
                    sobre todo en la llamada zona T (frente, nariz y barbilla).</h3>
                    </center>";
                }
            }       
        ?>
    </fieldset>
</body>
</html>
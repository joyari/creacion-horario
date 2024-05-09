<!DOCTYPE html>
<html lang="en">
<head>
<title>inicio final de una estacion</title>
<link rel="stylesheet" href="estilo.css">
</head>
<body>
<header>
        <div class="header_superior">
            <div class="logo">
                <img src="raza superior.png" alt="Logo de la Raza Superior">
            </div>
        </div>
        <div class="contenedor_menu">
            <div class="menu">
                <nav>
                    <ul>
                    <li><a href="index.html" id="selected"></a></li>
                    <li><a href="#">JAVA SCRIPT</a><ul>
                    
                        <li><a href="1num_multiplos.html">1.Verificacion de multiplos</a></li>
                        <li><a href="2num_mayo.html">2.Determinar el mayor de dos numeros</a></li>
                        <li><a href="3num_negativo_o_positivos.html">3.Determinar si el numero es positivo, negativo o ceros</a></li>
                        <li><a href="4calificaciones.html">4.Determinar Calificaciones</a></li>
                        <li><a href="5tiempo.html">5.Calcular el tiempo</a></li>
                        <li><a href="6dolares.html">6.Calcular el promedio de dinero</a></li>
                        <li><a href="7verdadero_o_falso.html">7.Verificar si una palabra tiene mas de 5 caracteres</a></li>
                        <li><a href="8promedio.html">8.Sacar el promedio de un alumno  </a></li>
                        <li><a href="9cadena_de_texto.html">9.Cadena de texto</a></li>
                        <li><a href="10num_aleatorio.html">10.Numero aleatorio</a></li>
                    </ul></li>
                    <li><a href="#">PHP</a><ul><li>
                        <li><a href="1encontrar_dos_numeros.php">1.Encontrar el numero mayor de dos numeros</a></li>
                        <li><a href="2compra_de_computadoras.php">2.Compra de computadoras</a></li>
                        <li><a href="3par_o_impar.php">3.Saber si un numero es par o impar</a></li>
                        <li><a href="4salario_neto_en_meses.php">4.Calcular salario neto</a></li>
                        <li><a href="5calcular_salario.php">5.Calcular salario</a></li>
                        <li><a href="6inicio_final_de_una_estacion.php">6.Inicio y final de una estacion</a></li>
                        <li><a href="7Multiplicar_un_número_por_sí_mismo_n_veces.php">7.Multiplicar numero por si mismo</a></li>     
                        <li><a href="8pies_a_pulgadas.php">8.Convertir pies a pulgadas</a></li>       
                        <li><a href="9Mostrar_y_enlazar_a_sitios_web.php">9.Enlaces a sitios web</a></li>          
                        <li><a href="10centimetros_a_pies.php">10.Centimetros a pies</a></li>
                    </ul></li>
                </nav>
            </div>
        </div>    
    </header>
    <main><article>  <h2>Fecha de inicio y término de la estación</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="estacion">Selecciona la estación:</label>
        <select name="estacion" id="estacion">
            <option value="Primavera">Primavera</option>
            <option value="Verano">Verano</option>
            <option value="Otoño">Otoño</option>
            <option value="Invierno">Invierno</option>
        </select><br><br>
        <input type="submit" name="submit" value="Mostrar fechas">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['estacion'])) {
            $nombre_estacion = $_POST['estacion'];
            
            switch ($nombre_estacion) {
                case 'Primavera':
                    $fecha_inicio = '21 de marzo';
                    $fecha_termino = '20 de junio';
                    break;
                case 'Verano':
                    $fecha_inicio = '21 de junio';
                    $fecha_termino = '22 de septiembre';
                    break;
                case 'Otoño':
                    $fecha_inicio = '23 de septiembre';
                    $fecha_termino = '20 de diciembre';
                    break;
                case 'Invierno':
                    $fecha_inicio = '21 de diciembre';
                    $fecha_termino = '20 de marzo';
                    break;
                default:
                    echo "No se encontraron fechas para la estación seleccionada.";
            }
            
            if(isset($fecha_inicio) && isset($fecha_termino)) {
                echo "<h3>Fecha de inicio y término de la estación $nombre_estacion:</h3>";
                echo "Inicio: $fecha_inicio<br>";
                echo "Término: $fecha_termino";
            }
        } else {
            echo "Por favor, selecciona una estación.";
        }
    }
    ?></article></main>
    
</body>
</html>
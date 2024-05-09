<!DOCTYPE html>
<html>
<head>
    <title>Compra de computadoras</title>
    <link rel="stylesheet" href="estilo.css">
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>
</head>
<body>
<header>
        <div class="header_superior">
            <div class="logo">
                <img src="/para las tareas que no se/4 esto se pone serio/raza superior.png" alt="Logo de la Raza Superior">
            </div>
        </div>
        <div class="contenedor_menu">
            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label id="#label__check" for="check__menu">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                    <li><a href="#" id="selected"></a></li>
                    <li><a href="#">JAVA SCRIPT</a><ul>
                    
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/1num_multiplos.html">1.Verificacion de multiplos</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/2num_mayo.html">2.Determinar el mayor de dos numeros</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/3num_negativo_o_positivos.html">3.Determinar si el numero es positivo, negativo o ceros</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/4calificaciones.html">4.Determinar Calificaciones</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/5tiempo.html">5.Calcular el tiempo</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/6dolares.html">6.Calcular el promedio de dinero</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/7verdadero_o_falso.html">7.Verificar si una palabra tiene mas de 5 caracteres</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/8promedio.html">8.Sacar el promedio de un alumno  </a></li>  
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/9cadena_de_texto.html">9.Cadena de texto</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/java/10num_aleatorio.html">10.Numero aleatorio</a></li>
                    </ul></li>
                    <li><a href="#">PHP</a><ul><li>
                    <li><a href="/para las tareas que no se/4 esto se pone serio/php/1encontrar_dos_numeros.php">1.Encontrar el numero mayor de dos numeros</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/2compra_de_computadoras.php">2.Compra de computadoras</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/3par_o_impar.php">3.Saber si un numero es par o impar</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/4salario_neto_en_meses.php">4.Calcular salario neto</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/5calcular_salario.php">5.Calcular salario</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/6inicio_final_de_una_estacion.php">6.Inicio y final de una estacion</a></li>
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/7Multiplicar_un_número_por_sí_mismo_n_veces.php">7.Multiplicar numero por si mismo</a></li>     
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/8pies_a_pulgadas.php">8.Convertir pies a pulgadas</a></li>       
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/9Mostrar_y_enlazar_a_sitios_web.php">9.Enlaces a sitios web</a></li>          
                        <li><a href="/para las tareas que no se/4 esto se pone serio/php/10centimetros_a_pies.php">10.Centimetros a pies</a></li>
                    </ul></li>
                </nav>
            </div>
        </div>    
    </header>
    <main><article>  <h2>Convertir pies a pulgadas</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Ingrese la cantidad de pies: <input type="number" name="pies"><br><br>
        <input type="submit" name="submit" value="Convertir">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST['pies'])) {
            $pies = $_POST['pies'];
            $pulgadas = $pies * 12;
            
            echo "<h3>Resultado de la conversión:</h3>";
            echo "$pies pies equivalen a $pulgadas pulgadas.";
        } else {
            echo "Por favor, ingrese la cantidad de pies.";
        }
    }
    ?></article></main>
    
</body>
</html>
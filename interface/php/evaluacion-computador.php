<?php
session_start();

if (!isset($_SESSION['user'])) {
    header("location: /kat");
    session_destroy();
    die();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>1er Lapso - Evaluación del Computador y sus Partes </title>
    <link rel="stylesheet" href="interface/css/style.css">
    <link rel="stylesheet" href="interface/css/evaluacion.css">
    <link rel="stylesheet" href="resource/fonts/Montserrat/Montserrat.css" />
</head>

<body>
    <!-- <header class="header">
        <button id="btn-volver-header" type="button">Volver al inicio</button>
    </header> -->
    <?php
    include_once './includ/header.php'
    ?>
    <div class="max-width body ">

        <main>
            <div class=" card">

                <h2>1er Lapso - Evaluación del Computador y sus Partes
                </h2>
                <form id="form-evaluation-computer" action="" class="containerForm card_shadow_float">
                    <h3>Evaluación</h3>
                    <div class="inputField">
                        <input name="name" type="text" required>
                        <label for="">Nombre</label>
                    </div>
                    <fieldset class="fieldsetForm active">
                        <legend class="">Pregunta 1: Verdadero o Falso</legend>
                        <p> ¿La CPU es el componente principal de una computadora responsable de ejecutar instrucciones
                            y procesar datos.?</p>
                        <label><input type="radio" name="pregunta1" value="verdadero"> Verdadero</label>
                        <label><input type="radio" name="pregunta1" value="falso"> Falso</label>
                    </fieldset>
                    <fieldset class="fieldsetForm active">
                        <legend class="">Pregunta 2: Selección Múltiple</legend>
                        <p>¿Cuál de los siguientes dispositivos se utiliza para almacenar temporalmente datos y
                            programas en una computadora?</p>
                        <label><input type="radio" name="pregunta2" value="a"> A) Disco Duro</label><br>
                        <label><input type="radio" name="pregunta2" value="b"> B) Memoria RAM</label><br>
                        <label><input type="radio" name="pregunta2" value="c"> C) CPU</label><br>
                        <label><input type="radio" name="pregunta2" value="d"> D) Tarjeta Gráfica</label><br>
                    </fieldset>
                    <div class="button-container">
                        <button type="submit">Continuar</button>
                    </div>
                </form>
            </div>
        </main>
    </div>
</body>
<script type="module" src="interface/js/computer.js"></script>

</html>
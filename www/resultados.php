<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container mt-5">
        <?php
        $opciones = ["piedra", "papel", "tijera"];
        $opcion_elegida = $_GET["opcion"];
        $opcion_cpu = $opciones[rand(0, 2)];

        echo "<h1 class='mb-4'>Tu elección: $opcion_elegida</h1>";
        echo "<h1 class='mb-4'>Elección de la CPU: $opcion_cpu</h1>";

        if ($opcion_elegida === $opcion_cpu) {
            echo "<p class='text-info'>¡Es un empate!</p>";
        } elseif (
            ($opcion_elegida === "piedra" && $opcion_cpu === "tijera") ||
            ($opcion_elegida === "papel" && $opcion_cpu === "piedra") ||
            ($opcion_elegida === "tijera" && $opcion_cpu === "papel")
        ) {
            echo "<p class='text-success'>¡Ganaste!</p>";
        } else {
            echo "<p class='text-danger'>¡Perdiste!</p>";
        }
        ?>
    </div>
</body>
</html>
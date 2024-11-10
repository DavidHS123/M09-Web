<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 7</title>
</head>
<body>
    <h1>Pràctica: Taules de Multipicar</h1>

    <?php
    echo "<h2>Taula del 0</h2>";
    for ($i = 0; $i <= 10; $i++) {
        echo "0 x " . $i . " = " . $i * 0 . "<br>";
    }
    echo "<h2>Taula del 1</h2>";
    for ($i = 0; $i <= 10; $i++) {
        echo "1 x " . $i . " = " . $i * 1 . "<br>";
    }
    ?>
</body>
</html>
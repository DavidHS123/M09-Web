<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 4</title>
</head>
<body>
    <form action="" method="POST">
        <label for="a">Pes Màxim:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Pes vehicle:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $pesMax = $_POST['a'];
            $pesVehicle = $_POST['b'];

            if ($pesVehicle <= $pesMax) {
                echo "<p>El pes del vehicle està dins del límit permès. Pes del vehicle: " . $pesVehicle . " kg.</p>";
            } else {
                echo "<p>El pes del vehicle excedeix el límit! El pes màxim permès és: " . $pesMax . " kg.</p>";
            }
        }
    ?>
</body>
</html>
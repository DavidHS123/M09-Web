<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 3</title>
</head>
<body>
    <form action="" method="POST">
        <label for="a">Primer nombre:</label>
        <input type="number" id="a" name="a" required>
        <br><br>
        <label for="b">Segon nombre:</label>
        <input type="number" id="b" name="b" required>
        <br><br>
        <input type="submit" value="Comparar">
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $a = $_POST['a'];
            $b = $_POST['b'];

            if ($a > $b) {
                echo "<p>El nombre més gran és " . $a . ".</p>";
            } elseif ($b > $a) {
                echo "<p>El nombre més gran és " . $b . ".</p>";
            } else {
                echo "<p>Els dos nombres són iguals.</p>";
            }
        }
    ?>
</body>
</html>
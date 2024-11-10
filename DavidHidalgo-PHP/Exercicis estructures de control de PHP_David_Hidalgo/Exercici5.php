<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 5</title>
</head>
<body>
    <form action="" method="POST">
        <label for="a">Quantitat:</label>
        <input type="number" id="a" name="a" required>
        <input type="submit" value="Entrar">
    </form>

    <?php
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quantitat = $_POST['a'];
            echo "<ul>";
            for ($i = 1; $i <= $quantitat; $i++) {
                echo "<li>" . $i . "</li>";
            }
            echo "</ul>";
        }
    ?>
</body>
</html>
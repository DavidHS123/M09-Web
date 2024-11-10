<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercici 6</title>
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
            $i = 1;
            while ($i <= $quantitat) {
                echo "<li>" . $i . "</li>";
                $i++;
            }
            echo "</ul>";
        }
    ?>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if (isset($_POST['nom']) && isset($_POST['producte']) && isset($_POST['quantitat']) && isset($_POST['comentaris'])) {
            $nom = $_POST['nom'];
            $producte = $_POST['producte'];
            $quantitat = $_POST['quantitat'];
            $comentaris = $_POST['comentaris'];

            echo "<h1>Llista de la compra</h1>";
            echo "<table border='1'>";
            echo "<tr><th>Nom</th><th>Producte</th><th>Quantitat</th><th>Comentaris</th></tr>";
            echo "<tr><td>$nom</td><td>$producte</td><td>$quantitat</td><td>$comentaris</td></tr>";
            echo "</table>";
        } else {
            echo "<p>Error: No s'han rebut dades del formulari.</p>";
        }
    ?>
    <button><a href="exercici1.html">Tornar</a></button>
</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultat de l'acceptació</title>
</head>
<body>
    <h1>Resultat de l'acceptació</h1>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['acceptCookies']) && isset($_POST['acceptTerms'])) {
                echo "<p>Has acceptat les cookies i els termes i condicions.</p>";
            } else {
                echo "<p>No has acceptat totes les condicions requerides.</p>";
            }
        } else {
            echo "<p>Error: No s'han rebut dades del formulari.</p>";
        }
    ?>
</body>
</html>

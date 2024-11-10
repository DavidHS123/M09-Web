<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gracies per acceptar els nostres avisos</title>
</head>
<body>
    <h1>Resultat de l'acceptació</h1>
    <?php
    if (isset($_POST['cookies']) && isset($_POST['terms'])) {
        echo <p>"Gracies per acceptar els nostres avisos"</p>;
    } else {
        echo <p>"No has acceptat els nostres avisos"</p>;
    }
    ?>
</body>
</html>
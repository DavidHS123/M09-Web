<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Bústia d'avisos</title>
</head>
<body>
    <div class=center>
        <h1>Bústia d'avisos</h1>
        <p>Condicions del Servei</p>
        <p>Si us plau accepteu els nostres avisos</p>
        <form action="main.php" method="POST">
            <input type="checkbox" name="cookie" id="cookie"> Accepto l'ús de cookies <br>
            <input type="checkbox" name="terms" id="terms"> Accepto la politica de privadesa i termes del servei <br>
            <input type="submit" value="Acceptar">
            <input type="submit" value="Rechazar"> <br>
        </form>
    </div>
</body>
</html>
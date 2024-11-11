<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulari</title>
</head>
<body>
    <div>
        <h1>Formulari Cookies</h1>
    </div>
    <form action="main.php" method="POST">
        <label>
            <input type="checkbox" name="acceptCookies" value="1"> Accepto les cookies
        </label>
        <br><br>
        <label>
            <input type="checkbox" name="acceptTerms" value="1"> Accepto els termes i condicions
        </label>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
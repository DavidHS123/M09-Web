<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recopilacio de les dades</title>
</head>
<body>
    <h1>Recopilacio de les dades</h1>
    <p>El nom és: <?php echo $_POST['nom']; ?></p>
    <p>Els cognoms son: <?php echo $_POST['cognoms']; ?></p>
    <p>El email és: <?php echo $_POST['email']; ?></p>
    <p>El telefón és: <?php echo $_POST['telefon']; ?></p>
    <p>GPS: <?php if (isset($_POST['gps'])) echo 'Si'; else echo 'No'; ?></p>
    <p>Mapa: <?php if (isset($_POST['mapa'])) echo 'Si'; else echo 'No'; ?> </p>
    <p>Seguiment: <?php echo $_POST['seguiment']; ?> </p>
    <p>Adreça: <?php echo $_POST['adreça']; ?></p>
    <p>Descripcio: <?php echo $_POST['descripcio']; ?></p>
</body>
</html>

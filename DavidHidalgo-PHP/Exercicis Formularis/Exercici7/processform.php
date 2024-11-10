<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recopilació de les dades</title>
</head>
<body>
    <?php
    $errors = [];
    if (strlen($_POST['nom']) < 2) {
        $errors[] = 'El camp Nom ha de tenir almenys 2 caràcters.';
    }
    if (strlen($_POST['cognoms']) < 2) {
        $errors[] = 'El camp Cognoms ha de tenir almenys 2 caràcters.';
    }
    if ctype_digit($_POST['telefon'])) {
        $errors[] = 'El camp Telèfon ha de contenir només dígits numèrics.';
    }
    if (strpos($_POST['email'], '@') === false) {
        $errors[] = 'El camp Correu electrònic ha de contenir un @.';
    }
    if ($_POST['email'] !== $_POST['email2']) {
        $errors[] = 'Els camps Correu electrònic i Confirmar correu electrònic han de ser iguals.';
    }
    if (count($errors) > 0) {
        echo '<h2>Errors:</h2>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    } else {
        echo "<h1>Recopilació de les dades</h1>
        <p>El nom és: <?php echo $_POST['nom']; ?></p>
        <p>Els cognoms son: <?php echo $_POST['cognoms']; ?></p>
        <p>El email és: <?php echo $_POST['email']; ?></p>
        <p>El telefón és: <?php echo $_POST['telefon']; ?></p>
        <p>GPS: <?php if (isset($_POST['gps'])) echo 'Sí'; else echo 'No'; ?></p>
        <p>Mapa: <?php if (isset($_POST['mapa'])) echo 'Sí'; else echo 'No'; ?> </p>
        <p>Seguiment: <?php echo $_POST['seguiment']; ?> </p>
        <p>Adreça: <?php echo $_POST['adreça']; ?></p>
        <p>Descripció: <?php echo $_POST['descripcio']; ?></p>";
    }
    ?>
</body>
</html>

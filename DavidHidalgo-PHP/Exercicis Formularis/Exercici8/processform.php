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
    if (!ctype_digit($_POST['telefon'])) {
        $errors[] = "El camp Telèfon ha de contenir només dígits numèrics.";
    }
    if (strpos($_POST['email'], '@') === false) {
        $errors[] = 'El camp Correu electrònic ha de contenir un @.';
    }
    if ($_POST['email'] !== $_POST['email2']) {
        $errors[] = 'Els camps Correu electrònic i Confirmar correu electrònic han de ser iguals.';
    }
    if (empty($_POST['seguiment'])) {
        $errors[] = 'El camp Seguiment ha de contenir una opció.';
    }
    if (empty($_POST['adreça'])) {
        $errors[] = 'El camp Adreça ha de contenir una adreça.';
    }
    if (empty($_POST['nom'])) {
        $errors[] = 'El camp Nom ha de contenir un nom.';
    }
    if (empty($_POST['cognoms'])) {
        $errors[] = 'El camp Cognoms ha de contenir un cognom.';
    }
    if (empty($_POST['telefon'])) {
        $errors[] = 'El camp Telefón ha de contenir un telefón.';
    }
    if (empty($_POST['email'])) {
        $errors[] = 'El camp Correu electrònic ha de contenir un email.';
    }
    if (empty($_POST['email2'])) {
        $errors[] = 'El camp Confirmar correu electrònic ha de contenir un email.';
    }
    if (count($errors) > 0) {
        echo '<h2>Errors:</h2>';
        echo '<ul>';
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo '</ul>';
    } else {
        echo "<h1>Recopilació de les dades</h1>";
        echo "<p>El nom és: ".$_POST['nom']."</p>";
        echo "<p>Els cognoms son: ".$_POST['cognoms']."</p>";
        echo "<p>El email és: ".$_POST['email']."</p>";
        echo "<p>El telefón és: ".$_POST['telefon']."</p>";
        echo "<p>GPS: ".(isset($_POST['gps'])?'Sí':'No')."</p>";
        echo "<p>Mapa: ".(isset($_POST['mapa'])?'Sí':'No')." </p>";
        echo "<p>Seguiment: ".$_POST['seguiment']." </p>";
        echo "<p>Adreça: ".$_POST['adreça']."</p>";
        echo "<p>Descripció: ".$_POST['descripcio']."</p>";
    }
    ?>
</body>
</html>

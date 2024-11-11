<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades Formulari</title>
</head>
<body>
    <h1>Dades de l'avís</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label for="gps">Recollir la localitzacio GPS </label>
            <input type="checkbox" name="gps" id="gps" > <br>
        <label for="mapa">Marcar un punt en el mapa </label>
            <input type="checkbox" name="mapa" id="mapa" > <br>
        <label for="seguiment"> Voleu rebre un seguiment? </label>
            <select id="seguiment" name="seguiment" >
                <option value="" disabled selected>Selecciona una opció</option>
                <option value="Sí">Sí</option>
                <option value="No">No</option>
            </select><br>
        <label for="adreça">Adreça de l'avís</label>
            <input type="text" name="adreça" id="adreça" ><br>
        <label for="descripcio">Descripció de l'avís:</label>
            <input type="text" name="descripcio" id="descripcio"><br>
        <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom"><br>
        <label for="cognoms">Cognoms</label>
            <input type="text" name="cognoms" id="cognoms"><br>
        <label for="telefon">Telefón</label>
            <input type="tel" name="telefon" id="telefon"><br>
        <label for="email">Correu electrònic</label>
            <input type="email" name="email" id="email"><br>
        <label for="email2">Confirmar correu electrònic</label>
            <input type="email" name="email2" id="email2"><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $gps = (isset($_POST['gps'])?'Sí':'No');
        $mapa = (isset($_POST['mapa'])?'Sí':'No');
        $seguiment = (isset($_POST['seguiment'])?'Sí':'No');
        $adreca = $_POST["adreça"];
        $descripcio = $_POST["descripcio"];
        $nom = $_POST["nom"];
        $cognoms = $_POST["cognoms"];
        $telefon = $_POST["telefon"];
        $email = $_POST["email"];
        $email2 = $_POST["email2"];
        
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
    }
    ?>
</body>
</html>

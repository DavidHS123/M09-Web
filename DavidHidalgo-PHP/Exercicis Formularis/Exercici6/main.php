<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dades Formulari</title>
</head>
<body>
    <h1>Dades de l'avís</h1>
    <form action="processform.php" method="POST">
        <label for="gps">Recollir la localitzacio GPS </label>
            <input type="checkbox" name="gps" id="gps"> <br>
        <label for="mapa">Marcar un punt en el mapa </label>
            <input type="checkbox" name="mapa" id="mapa"> <br>
        <label for="seguiment"> Voleu rebre un seguiment? </label>
            <select id="seguiment" name="seguiment" required>
                <option value="" disabled selected>Selecciona una opció</option>
                <option value="si">Sí</option>
                <option value="no">No</option>
            </select><br>
        <label for="adreça">Adreça de l'avís</label>
            <input type="text" name="adreça" id="adreça" required><br>
        <label for="descripcio">Descripcio de l'avís:</label>
            <input type="text" name="descripcio" id="descripcio" required><br>
        <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" required><br>
        <label for="cognoms">Cognoms</label>
            <input type="text" name="cognoms" id="cognoms" required><br>
        <label for="telefon">Telefon</label>
            <input type="tel" name="telefon" id="telefon"><br>
        <label for="email">Correu electrònic</label>
            <input type="email" name="email" id="email"><br>
        <label for="email2">Confirmar correu electrònic</label>
            <input type="email" name="email2" id="email2"><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
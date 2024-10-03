<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercici 41 pagina 2</title>
</head>
<body>
    <p>Nombre enregistrat:</p>
    
    <?php
        session_start();
        $_SESSION["ocult"] = $_POST["ocult"];
    ?>
    <a href="ex41pagina3.php">Endevinar</a>
</body>
</html>
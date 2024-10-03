<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercici 41 pagina 3</title>
</head>
<body>
<?php
    session_start();

    if (isset($_POST['endevina'])) {
        $ocult = $_SESSION['ocult'];
        $endevina = $_POST['endevina'];

    if ($endevina < $ocult) {
        $mensaje = "El nombre es menor que el oculto";
    } elseif ($endevina > $ocult) {
        $mensaje = "El nombre es mayor que el oculto";
    } else {
        $mensaje = "Has endevinat el nombre";
        $enlace = '<p><a href="ex41pagina1.php">Tornar a començar</a></p>';
    }
    } else {
        $mensaje = "";
        $enlace = "";
    }
?>

    <h1>Endevina el nombre</h1>

    <?php if ($mensaje == "") { ?>
    <form action="" method="post">
      <label for="endevina">Introdueix un nombre sencer:</label>
      <input type="number" id="endevina" name="endevina">
      <input type="submit" value="Enviar">
    </form>
  <?php } else { ?>
    <p><?php echo $mensaje; ?></p>
    <?php echo $enlace; ?>
    <?php if ($mensaje != "Has endevinat el nombre") { ?>
      <form action="" method="post">
        <label for="endevina">Introdueix un nombre sencer:</label>
        <input type="number" id="endevina" name="endevina">
        <input type="submit" value="Enviar">
      </form>
    <?php } ?>
  <?php } ?>
</body>
</html>
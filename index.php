<?php
if (!empty($_POST)) {
    $numClicks = $_POST['numclicks'];
    $numClicks++;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
            <h1>El número de clicks hasta ahora es: <?= $numClicks ?? 0 ?></h1>
            <input type="hidden" id="id" name="numclicks" value="<?= $numClicks ?? 0 ?>"> <!-- Valor oculto incrustado en el formulario -->
            <input type="submit" value="Click" name="click">  
        </form>
    </body>
</html>

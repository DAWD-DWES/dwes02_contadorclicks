<?php
if (filter_has_var(INPUT_POST, 'numclicks')) {
    $numClicks = filter_input(INPUT_POST, 'numclicks');
    $numClicks++;
}
else {
    $numClicks = 0;
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
            <h1>El número de clicks hasta ahora es: <?= $numClicks ?></h1>
            <input type="hidden" id="id" name="numclicks" value="<?= $numClicks ?>"> <!-- Valor oculto incrustado en el formulario -->
            <input type="submit" value="Click" name="click">  
        </form>
    </body>
</html>

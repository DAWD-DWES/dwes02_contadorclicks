<?php
session_start();
if (empty($_POST)) {
    $numClicks = $_SESSION['numClicks'] = 0;
}
else {
$numClicks = ++$_SESSION['numClicks'];
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
            <input type="submit" value="Click" name="click">  
        </form>
    </body>
</html>

<?php
namespace Franciscopavon\RouterMvc\routes;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Positivos</title>
</head>
<body>
    <ul>
    <?php

    $num = 2;
    $i = 0;
    $max = 10;
    if (isset($routerParams[0])) {
        $max = $routerParams[0];
    }
    while ($i < $max) {
        echo '<li>' . $num . '</li>';
        $num += 2;
        $i++;
    }
    ?>
    </ul>
</body>
</html>
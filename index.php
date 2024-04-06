<?php
    $name = "Ruth";
    $isDev = true;
    $age = 21;

    $output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;

    $bestLanguajes = ["PHP", "JavaScript", "Python", "Java", "C#", 1, 2];
    $bestLanguajes[] = "C++";
    $bestLanguajes[4] = "Ruby";

?>

<h3>El mejor lenguaje es <?= $bestLanguajes[4] ?></h3>

<h1>
<?= $output ?>
</h1>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
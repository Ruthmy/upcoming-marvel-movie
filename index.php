<?php
$name = "Ruth";
$isDev = true;
$age = 21;

$output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;



$bestLanguajes = ["PHP", "JavaScript", "Python", "Java", "C#"];
$bestLanguajes[] = "C++";
$bestLanguajes[4] = "Ruby";

?>

<ul>
    <?php foreach ($bestLanguajes as $key => $languaje) : ?>
        <li><?= $key . " - " . $languaje ?></li>
    <?php endforeach; ?>
</ul>

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
<?php
$name = "Ruth";
$isDev = true;
$age = 21;

$output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;

// arrays
$bestLanguajes = ["PHP", "JavaScript", "Python", "Java", "C#"];
$bestLanguajes[] = "C++";
$bestLanguajes[4] = "Ruby";

// asociative arrays
$person = [
    "llave" => "valor",
    "name" => "Ruth",
    "age" => 21,
    "isDev" => true
];

?>

<ul>
    <?php foreach ($bestLanguajes as $key => $languaje) : ?>
        <li><?= $key . " - " . $languaje ?></li>
    <?php endforeach; ?>
        <hr>
    <?php foreach ($person as $key => $value) : ?>
        <li><?= $key . " - " . $value ?></li>
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
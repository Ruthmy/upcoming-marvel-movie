<?php
    $name = "Ruth";
    $isDev = true;
    $age = 21;

    $isOld = $age > 30;

    var_dump($name);
    $output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;

    $outputAge = $isOld
    ? "Eres viejo. Lo siento"
    : "Eres joven. ¡Felicidades!";

?>

<h1>
<?= $output .= "<br>" . $outputAge; ?>
</h1>

<?php if ($isOld) : ?>
    <h2>Old</h2>
<?php elseif ($isDev) : ?>
    <h2>Developer</h2>
<?php else : ?>
    <h2>Young</h2>
<?php endif; ?>





<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }
</style>
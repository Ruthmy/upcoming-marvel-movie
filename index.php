<?php
    $name = "Ruth";
    $isDev = true;
    $age = (bool) 21;

    var_dump($name);
    $output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;
?>


<h1>
<?= $output; ?>
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
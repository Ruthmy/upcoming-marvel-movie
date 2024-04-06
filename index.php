<?php
    $name = "Ruth";
    $isDev = true;
    $age = 21;

    var_dump($name);
    $output = "Erika ♥ " . "<br />" . "17/10/13" . "<br />" . $age . "<br />" . $isDev;

    $result = match (true) {
        $age >= 65 => 'senior',
        $age >= 25 => 'adult',
        $age >= 18 => 'young adult',
        default => 'kid',
    };
    
    var_dump($result);

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
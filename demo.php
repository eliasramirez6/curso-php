<?php
//Variables
$name = "Elias";
$isDev = true;
$age = 0;
// var_dump($name);
// var_dump($isDev);
// var_dump($age);

$isOld = $age > 40;

// if ($isOld) {
//     echo "<h2>Eres viejo, lo siento</h2>";
// } else if ($isDev) {
//     echo "<h2>No eres viejo, pero eres dev. Estas jodido.</h2>";
// } else {
//     echo "<h2>Eres joven, felicidades</h2>";
// }

define('logo_url', 'data:image/jpeg;base64,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');

$output = "Hola  $name  <br> con una edad de " . $age;

const NOMBRE = 'ELIAS';

$outputAge = $isOld
    ? 'Eres viejo, lo siento'
    : 'Eres joven, felicidades';

// $outputAge = match ($age) {
//     0, 1, 2 => "Eres un bebé, $name un bebé",
//     3, 4, 5, 6, 7, 8, 9, 10 => "Eres un niño, $name un niño",
//     11, 12, 13, 14, 15, 16, 17, 18 => "Eres un adolecente, $name Adolecente",
//     default => "Eres un adulto, $name"
// }

$outputAge = match (true) {
    $age < 2 => "Eres un bebé, $name :baby",
    $age < 10 => "Eres un niño, $name :child",
    $age < 18 => "Eres un adolecente, $name :young",
    $age === 18 => "Eres mayor de edad, $name :beer",
    $age < 40 => "Eres unadulto joven, $name :beer",
    $age >= 40 => "Eres mayor de edad, $name :beer",
    $age === 18 => "Eres mayor de edad, $name :beer",

    default => "Hueles mas a madera que a fruta, $name"
};

$bestLanguages = ["PHP", "JavaScript", "Python"];
$bestLanguages[] = "Java";
$bestLanguages[] = "TypeScript";

$person = [
    "name" => "Elias",
    "age" => 27,
    "isDev" => true,
    "languages" => ["PHP", "JavaScript", "Python"]
];

$person["name"] = "pheralb";
$person["languages"][] = "Java"; 

?>

<h3>
    El mejor lenguaje es <?= $bestLanguages[4] ?>
</h3>

<ul>
    <?php foreach ($bestLanguages as $key => $language) : ?>
        <li> <?= $key . " " . $language ?> </li>
    <?php endforeach; ?>
</ul>

<h2><?= $outputAge ?></h2>

<img src=" <?= logo_url ?> " alt="PHP logo" width="200">

<h1>
    <!-- <?= $output ?> -->
    <?= NOMBRE ?>
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

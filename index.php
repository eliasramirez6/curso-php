<?php

const API_URL = "https://whenisthenextmcufilm.com/api";
# Inicializar una nueva sesión con cURL; ch = cURL handle
$ch = curl_init(API_URL);

//Indicar que queremos recibir el resultado de la peticion y no mostrarlo en pantalla..
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/*Ejecutar la peticion y
 guardarmos el resultado
*/
// $result = curl_exec($ch);
// $data = json_decode($result, true);
// var_dump($ch);
// curl_close($ch);
// var_dump($ch);
$result = file_get_contents(API_URL); //si solo queremos hacer un GET de una api
$data = json_decode($result, true);

//var_dump($data);

?>

<head>
    <meta charset="UTF-8"/>
    <title>La proxima pelicula de marvel</title>
    <meta name="viewport" content="with=device-with initial-scale=1.0">
    
    <!-- Centered viewport --> 
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    />
</head>

<main>
    <pre style="font-size: 15px; overflow: scroll; height: 250px;">
        <?php var_dump($data); ?>
    </pre>
    <section>
        <img src="<?= $data["poster_url"]; ?> with="300" alt="Porter de" <?= $data["title"]; ?> >
    </section>
    
    <hgroup>
        <h3> <?= $data["title"]?> se estrena en <?= $data["days_until"] ?> dias </h3>
        <p>Fecha de estreno es: <?= $data["release_date"] ?> </p>
        <p>La siguente es: <?= $data["following_production"]["title"] ?> </p>
    </hgroup>
</main>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: grid;
        place-content: center;
    }

    section {
        display: flex;
        justify-content: center;
        text-align: center;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        margin: 0 auto;
    }
</style>
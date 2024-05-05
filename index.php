<?php

const API_URL = "https://whenisthenextmcufilm.com/api";

# Initialize a new cURL session
// $ch = curl_init();

# Indicate we don't want to show the cURL result in screen
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $result = curl_exec($ch);
// $data = json_decode($result, true);

// curl_close($ch);

// Quick and handy alternative
$data = json_decode(file_get_contents(API_URL), true);
?>

<head>
    <meta charset="UTF-8">
    <title>Next Marvel movie</title>
    <meta name="description" content="Next Marvel movie">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css" />
</head>

<main>
    <img src="<?= $data["poster_url"] ?>" alt="<?= $data["title"] ?> poster" width="300">

    <hgroup>
        <h1><?= $data["title"] ?></h1>
        <p><?= $data["overview"] ?></p>
        <p>Release date: <?= $data["release_date"] ?></p>
        <p>Following production: "<?= $data["following_production"]["title"] ?>"</p>
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

    main {
        display: flex;
        justify-content: center;
        text-align: center;
        gap: 2em;
    }

    hgroup {
        display: flex;
        flex-direction: column;
        justify-content: center;
        text-align: center;
    }

    img {
        border-radius: 5%;
    }
</style>
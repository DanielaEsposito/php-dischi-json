<?php
//salvo dentro delle variabili i dati del form
$titolo = $_POST['titolo'];
$artista = $_POST['artista'];
$url_cover = $_POST['url_cover'];
$anno_pubblicazione = $_POST['anno_pubblicazione'];
$genere = $_POST['genere'];

// creo un array associativo con i dati recuperati 
$disco = [
    "titolo" => $titolo,
    "artista" => $artista,
    "url_cover" => $url_cover,
    "anno_pubblicazione" => $anno_pubblicazione,
    "genere" => $genere
];

//richiamo il file json
$json_text = file_get_contents('dischi.json');
//decodifico iil file json 
$dischi = json_decode($json_text, true);
//aggiungo il nuovo array associativo ai dati del file decodificato 
$dischi[] = $disco;
//trasformo nuovamente il file in formato json
$json_text = json_encode($dischi, JSON_PRETTY_PRINT);
//aggiungo i nuovi dati al file 
file_put_contents('dischi.json', $json_text);
header('Location: ./index.php');

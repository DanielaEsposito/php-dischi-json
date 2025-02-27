<?php
$file = file_get_contents('dischi.json');
$dischi = json_decode($file,  true);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dischi</title>
</head>

<body>
    <header>

    </header>
    <main>
        <div class="container">
            <div class="row g-3">
                <?php
                foreach ($dischi as $disco) {
                    echo '<div class="col-3">';
                    echo  '<div class="card" style="width: 18rem;">';
                    echo "<img src={$disco['url_cover']} class='card-img-top' alt='...'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>{$disco['titolo']}</h5>";
                    echo "<h5 class='card-title'>{$disco['artista']}</h5>";
                    echo "<h5 class='card-title'>{$disco['anno_pubblicazione']}</h5>";
                    echo "<h5 class='card-title'>{$disco['genere']}</h5>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <h3 class="my-3">Inserisci un nuovo Disco </h3>
            <form class="row row-cols-3">
                <div class="mb-3 col">
                    <label for="url_cover" class="form-label">Url immagine</label>
                    <input class="form-control" type="text" aria-label="default input example" id="url_cover" name="url_cover">
                </div>
                <div class="mb-3 col">
                    <label for="titolo" class="form-label">Titolo</label>
                    <input class="form-control" type="text" aria-label="default input example" id="titolo" name="titolo">
                </div>
                <div class="mb-3 col">
                    <label for="artista" class="form-label">Artista</label>
                    <input class="form-control" type="text" aria-label="default input example" id="artista" name="artista">
                </div>
                <div class="mb-3 col">
                    <label for="anno_pubblicazione" class="form-label">Anno di pubblicazione</label>
                    <input class="form-control" type="text" aria-label="default input example" id="anno_pubblicazione" name="anno_pubblicazione">
                </div>
                <div class="mb-3 col">
                    <label for="genere" class="form-label">Genere</label>
                    <input class="form-control" type="text" aria-label="default input example" id="genere" name="genere">
                </div>
                <div class="mb-3 col-12">

                    <button type="submit" class="btn btn-primary">Aggiungi </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
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
    <!--CSS-->
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>Dischi</title>
</head>

<body>
    <header>
        <nav data-bs-theme="dark class=" navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <h1 class="navbar-brand text-light">Navbar</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">

                </div>
            </div>
        </nav>
    </header>
    <main class="pt-5">
        <div class="container mt-5">
            <h2 class="text-costum my-3">La tua musica</h2>
            <div class="row g-3">
                <?php
                foreach ($dischi as $disco) {
                    echo '<div class="col-md-3 col-sm-1 ">';
                    echo  '<div class="card  h-100" data-bs-theme="dark" style="width: 18rem;">';
                    echo "<img src={$disco['url_cover']} class='card-img-top' alt='...'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>{$disco['titolo']}</h5>";
                    echo "<p class='card-title'>{$disco['artista']}</p>";
                    echo "<p class='card-title'>{$disco['anno_pubblicazione']}</p>";
                    echo "<p class='card-title'>{$disco['genere']}</p>";
                    echo '</div>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
            <h3 class="my-3 text-costum">Inserisci un nuovo Disco </h3>
            <form class="row row-cols-3" method="Post" action="server.php">
                <div class="mb-3 col">
                    <label for="url_cover" class="form-label text-light">Url immagine</label>
                    <input class="form-control" type="text" aria-label="default input example" id="url_cover" name="url_cover">
                </div>
                <div class="mb-3 col">
                    <label for="titolo" class="form-label text-light">Titolo</label>
                    <input class="form-control" type="text" aria-label="default input example" id="titolo" name="titolo">
                </div>
                <div class="mb-3 col">
                    <label for="artista" class="form-label text-light">Artista</label>
                    <input class="form-control" type="text" aria-label="default input example" id="artista" name="artista">
                </div>
                <div class="mb-3 col">
                    <label for="anno_pubblicazione" class="form-label text-light">Anno di pubblicazione</label>
                    <input class="form-control" type="text" aria-label="default input example" id="anno_pubblicazione" name="anno_pubblicazione">
                </div>
                <div class="mb-3 col">
                    <label for="genere" class="form-label text-light">Genere</label>
                    <input class="form-control" type="text" aria-label="default input example" id="genere" name="genere">
                </div>
                <div class="mb-3 col-12">

                    <button class="btn btn-primary">Aggiungi </button>
                </div>
            </form>
        </div>
    </main>
</body>

</html>
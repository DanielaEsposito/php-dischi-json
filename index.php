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
        </div>
    </main>
</body>

</html>
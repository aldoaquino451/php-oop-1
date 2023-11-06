<?php

require_once __DIR__ . "./Model/Movie.php";
require_once __DIR__ . "./db/db.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- bootstrap  -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.2/css/bootstrap.css'
    integrity='sha512-r0fo0kMK8myZfuKWk9b6yY8azUnHCPhgNz/uWDl2rtMdWJlk7gmd9socvGZdZzICwAkMgfTkVrplDahQ07Gi0A=='
    crossorigin='anonymous' />

  <!-- titolo  -->
  <title>OOP</title>

</head>

<body>

  <section class="container" id="movies">
    <h1 class="my-3">Movies</h1>

    <div class="row">

      <? foreach ($movies as $movie): ?>
        <div class="col mb-4">
          <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">
                <?= $movie->title ?>
              </h5>
              <p class="card-text">
                <?= $movie->vote ?> / 10
              </p>
              <p class="card-text">
                <?= $movie->description ?>
              </p>
            </div>
          </div>
        </div>
      <? endforeach; ?>

    </div>

  </section>

</body>

</html>
<?php

require_once __DIR__ . "./Model/Production.php";
require_once __DIR__ . "./Model/Movie.php";
require_once __DIR__ . "./Model/TvSerie.php";
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
  <title>PHP Object-oriented programming 1</title>

</head>

<body class=" bg-danger   ">

  <h1 class="p-3 bg-dark text-light ">PHP Object-oriented programming 1</h1>

  <section class="container" id="movies">
    <h2 class="my-3 py-2 px-5 rounded  bg-opacity-50  bg-warning d-inline-block">Movies</h2>

    <div class="row">

      <? foreach ($list as $show): ?>
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">

              <h5 class="card-title">
                <?= $show->title ?>
              </h5>

              <p>
                <?= $show->getVote() ?> / 10
              </p>

              <div>
                <h4>Cast :</h4>
                <ul>

                  <? foreach ($show->casts as $cast): ?>
                    <li>
                      <?= $cast ?>
                    </li>
                  <? endforeach; ?>

                </ul>
              </div>

              <p>
                <?php echo $show->aired_from_year ?>
                <?php echo $show->$_running_time ?>
              </p>

            </div>
          </div>
        </div>

      <? endforeach; ?>
    </div>
  </section>

</body>

</html>
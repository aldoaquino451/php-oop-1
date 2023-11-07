<?php

require_once __DIR__ . "/Model/Production.php";
require_once __DIR__ . "/Model/Movie.php";
require_once __DIR__ . "/Model/TvSerie.php";
require_once __DIR__ . "/db/db.php";


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

      <?php foreach ($list as $show): ?>
        <div class="col-6 mb-4">
          <div class="card">
            <div class="card-body">

              <h3 class="card-title">
                <?php echo $show->title ?>
              </h3>

              <p>
                Voto:
                <?php echo $show->getVote() ?> / 10
              </p>

              <div class="<?= $show->aired_from_year ?? 'd-none' ?>">
                <p>
                  &lbrack;
                  <?= $show->aired_from_year ?? '' ?> -
                  <?= $show->aired_to_year ?? '' ?>
                  &rbrack;
                </p>
                <p>
                  &lbrack;
                  <strong>
                    <?php echo $show->number_of_seasons ?? '' ?>
                  </strong>
                  Stagioni e
                  <strong>
                    <?php echo $show->number_of_episodes ?? '' ?>
                  </strong>
                  Episodi
                  &rbrack;
                </p>
              </div>

              <div class="<?= $show->published_year ?? 'd-none' ?>">
                <p>
                  &lbrack;
                  <?php echo $show->published_year ?? '' ?>
                  &rbrack;
                </p>
                <p>
                  &lbrack;
                  <?php echo $show->running_time ?? '' ?>
                  minuti
                  &rbrack;
                </p>
              </div>

              <div>
                <h5>Cast :</h5>
                <ul class=" list-group pb-3 ">

                  <?php foreach ($show->casts as $cast): ?>
                    <li class=" list-unstyled ">
                      <?php echo $cast ?>
                    </li>
                  <?php endforeach; ?>

                </ul>
              </div>

            </div>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
  </section>

</body>

</html>
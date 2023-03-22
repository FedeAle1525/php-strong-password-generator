<?php

// $passLength = intval($_GET['passLength']) ?? false;
$passLength = isset($_GET['passLength']) ? intval($_GET['passLength']) : null;
// var_dump($_GET);
// echo gettype($passLength);

require_once __DIR__ . "/./functions.php";

// Meglio fare controlli prima di richiamare funzione in HTML
// if ($passLength !== null && is_numeric($passLength)){
//   $password = generatePassword($passLength, $letters, $symbols);
// }

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Strong Password Generator</title>
</head>

<body style="background-color: rgb(0, 22, 50);">

  <div class="container text-center pt-5">
    <h1 style="color: rgb(128, 139, 153)">Strong Password Generator</h1>

    <h2 style="color: white">Genera una password sicura</h2>
  </div>

  <div class="container w-50 p-3 rounded mb-3" style="background-color: rgb(207, 244, 252); color: rgb(82, 141, 169);">
    <p class="m-0">
      <?php

      if (isset($_GET['passLength'])) {
        echo generatePasswordSimple($passLength);
      } else {
      ?>
        Nessuna password generata
      <?php
      }

      ?>
    </p>
  </div>

  <div class="container w-50 p-3 rounded" style="background-color: white">
    <form action="" method="get">
      <div class="row">

        <div class="col-7">
          <span>Lunghezza password: </span>
        </div>

        <div class="col-5">
          <input class="w-50" type="number" name="passLength">
        </div>
      </div>

      <button type="submit" class="btn btn-primary mt-3">Invia</button>

    </form>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
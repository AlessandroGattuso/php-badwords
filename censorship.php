<?php 
  $paragraph = $_GET["paragraph"];
  $word = $_GET["choosenWord"];
  $paragraph_censored = str_replace($word, '***', $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Censorship</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
  <div class="container mt-5">
    <div class="card">
      <h5 class="card-header">Paragrafo originale</h5>
      <div class="card-body">
        <p><strong>Testo</strong>: <?php echo $paragraph; ?> </p>
        <p><strong>Lunghezza</strong>: <?php echo strlen($paragraph);?> </p>
      </div>
    </div>
    <div class="card mt-5">
      <h5 class="card-header">Paragrafo censurato</h5>
      <div class="card-body">
        <p><strong>Testo</strong>: <?php echo $paragraph_censored; ?> </p>
        <p><strong>Lunghezza</strong>: <?php echo strlen($paragraph_censored); ?> </p>
      </div>
    </div>
  </div>
</body>
</html>
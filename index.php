<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>php-backwords</title>
</head>
<body>
  <div class="container mt-5">
    <form action="./censorship.php" method="POST">
      <div class="mb-3">
        <label for="paragraph">Paragrafo</label>
        <textarea name="paragraph" class="form-control" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="paragraph">Parola da censurare</label>
        <input name="choosenWord" type="text" class="form-control" required>
      </div>
      <div>
        <button class="btn btn-dark" type="submit">Invia</button>
      </div>
    </form>
  </div>
</body>
</html>
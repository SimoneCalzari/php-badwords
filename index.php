<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form BadWords</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
  <form action="response.php" method="GET">
    <label for="text">Inserisci un testo:</label>
    <textarea name="text" id="text" cols="30" rows="10"></textarea>
    <label for="word">Inserisci la parola da censurare:</label>
    <input type="text" name="word" id="word">
    <button type="submit">Invia</button>
  </form>
</body>

</html>
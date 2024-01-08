<?php 

$text_received = $_GET['text'];
$word_received = trim($_GET['word']);
$text_modified = str_replace($word_received, '***', $text_received);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Response BadWords</title>
    <link href="style.css" rel="stylesheet">
  </head>
  <body>

    <h1>Risposta</h1>
    <p>Il testo inviato è: <?php echo $text_received; ?></p>
    <p>Il testo inviato è lungo <?php echo strlen($text_received); ?> caratteri</p>
    <p>Il testo censurato è: <?php echo $text_modified; ?></p>
    <p>Il testo censurato è lungo <?php echo strlen($text_modified); ?> caratteri</p>

  </body>
</html>
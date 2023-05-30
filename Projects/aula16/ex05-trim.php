<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
      <?php
        $nome = "   Gustavo Pimenta Ribeiro   ";
        echo strlen($nome);
        $novo = trim($nome);
        echo $novo;
        echo strlen($novo);
      ?>
    </div>
  </body>
</html>
 
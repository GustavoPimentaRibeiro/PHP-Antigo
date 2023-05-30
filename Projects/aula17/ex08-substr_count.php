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
        $nome = "gustavo pimenta";
        print("Existem ". substr_count($nome, "pi"). " ocorrências de string");
      ?>
    </div>
  </body>
</html>
 
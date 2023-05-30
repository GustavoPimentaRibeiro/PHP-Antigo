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
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável X é $x";
        echo "<br/>O conteúdo da variável de variável de X é $abc";
      ?>
    </div>
  </body>
</html>
 
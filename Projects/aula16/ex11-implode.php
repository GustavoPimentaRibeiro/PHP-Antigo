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
        $vetor[0] = "Gustavo";
        $vetor[1] = "Pimenta";
        $vetor[2] = "Ribeiro";
        $texto = implode(" ", $vetor);
        echo "<p>$texto</p>";
      ?>
    </div>
  </body>
</html>
 
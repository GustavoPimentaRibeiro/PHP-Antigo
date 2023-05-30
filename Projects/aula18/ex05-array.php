<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
      <pre>
        <?php
            $cad = array("nome" => "Ana",
                         "idade" => 23,
                         "peso" => 78.5);
            $cad["fuma"] = true;
            print_r($cad);
        ?>
      </pre>
    </div>
  </body>
</html>
 
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
        $preco = $_GET["p"];
        echo "O produto custa R$". number_format($preco, 2, ",", ".");
        echo "<br/>O preço do produto com 10% de desconto é R$". number_format($preco*0.9, 2, ",", ".");
      ?>
    </div>
  </body>
</html>
 
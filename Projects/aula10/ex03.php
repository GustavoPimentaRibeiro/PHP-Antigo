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
        $est = isset($_GET["est"]) ? $_GET["est"] : 0;
        switch ($est) {
            case 1:
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "Você mora na <span class='foco'>Região Norte</span>";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 20:
            case 26:
                echo "Você mora na <span class='foco'>Região Nordeste</span>";
                break;
            case 7:
            case 9:
            case 11:
            case 12:
                echo "Você mora na <span class='foco'>Região Centro-Oeste</span>";
                break;
            case 8:
            case 13:
            case 19:
            case 25:
                echo "Você mora na <span class='foco'>Região Sudeste</span>";
                break;
            case 16:
            case 24:
            case 21:
                echo "Você mora na <span class='foco'>Região Sul</span>";
                break;
            default:
                echo "Tem coisa errada aí fi!";
                break;
        }
      ?>
      <br/>
      <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
  </body>
</html>
 
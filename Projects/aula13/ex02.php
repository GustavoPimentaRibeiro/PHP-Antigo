<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="_css/estilo.css"/>
        <meta charset="UTF-8"/>
        <title>Curso de PHP - CursoemVideo.com</title>
    </head>
    <body>
        <div>
            <form method="get" action="ex02-tabuada.php">
                Número: <select name="num">
                    <?php
                        for ($i = 1; $i <= 10; $i ++) {
                            echo "<option value='$i'>$i</option>";
                        }
                    ?>
                </select>
                <input type="submit" class="botao" value="Tabuada" />
            </form>
        </div>
    </body>
</html>
 
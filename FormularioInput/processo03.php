<html>
    <head>
        <?php
            $texto = (isset($_GET['text']) ? $_GET['text'] : "Texto Genérico");
            $tamanho = (isset($_GET['tamanho']) ? $_GET['tamanho'] : "14pt");
            $cor = (isset($_GET['cor']) ? $_GET['cor'] : "#000000");
        ?>
        <style>
            span.texto{
                font-size: <?php echo $tamanho; ?>; /* um ponto e vírgula do PHP e outro do CSS */
                color: <?php echo $cor; ?>;
            }
        </style>

        <title>Terceiro processamento - (Personalização de formulario com Input)</title>
    </head>
    <body>
        <div>
            <?php
                // Não necessita que este código esteja no body.

                echo "<span class='texto'>$texto</span>";
            ?>
            <br>
            <a href="index.html">Voltar a página principal</a>
        </div>
    </body>
</html>
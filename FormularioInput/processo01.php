<html>
    <head>
        <title>Primeiro Processamento (Raiz Qudrada)</title>
    </head>
    <body>
        <?php
            $valorNumerico = $_GET["valorNumerico"];
            echo "A raiz quadrada do número $valorNumerico é ".sqrt($valorNumerico);
        ?>
        <br>
        <a href="index.html">Voltar para a página principal</a>
    </body>
</html>
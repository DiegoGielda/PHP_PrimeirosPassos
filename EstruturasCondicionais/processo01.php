<html>
    <head>
        <title>Verificação de idade</title>
    </head>
    <body>
        <?php

            $nome = $_GET['nome'];
            $dataNacimento = $_GET['dataNascimento'];

            $idade = new DateTime($dataNacimento);
            
            $idade = $idade->diff(new DateTime(date('d-m-Y'))); // Verifica a diferença entre as datas

            if (($idade->y >= 18) && ($idade->y < 65)){

                echo "Cidadão deve realizar o voto!";

            } else if (($idade->y < 18) || ($idade->y >= 65)){

                echo "Cidadão não é obrigatorio de realizar o voto!";

            }
        ?>
        <br>
        <a href="index.html">Voltar a página principal</a>
    </body>
</html>
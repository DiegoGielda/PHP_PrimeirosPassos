<html>
    <head>
        <title>Segundo Processo (Cadastro de Pessoa)</title>
    </head>
    <body>
        
        <?php

            $nomePessoa = (isset($_GET['nome']) ? $_GET['nome'] : "Não definido");
            $anoNascimentoPessoa = (isset($_GET['anoNascimento']) ? $_GET['anoNascimento'] : date('Y'));
            $sexoPessoa = $_GET['sexo'];
            echo "Cadastrar pessoa de nome: $nomePessoa do sexo: $sexoPessoa que nasceu no ano: $anoNascimentoPessoa";
        ?>
        <br>
        <a href="index.html">Voltar para a pagina principal</a>
    </body>
</html>
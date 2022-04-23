<html>

<head>
    <title>Exemplo while - quantidade de vezes</title>
    <?php
    $quantidadeDeVezes = $_GET['quantidadeDeVezes'];
    echo "<h3>Criar dinamicamente $quantidadeDeVezes inputs</h3>"
    ?>
</head>

<body>
    <form>
        <?php
        $lContador = 1;
        while ($lContador <= $quantidadeDeVezes) {
            echo "<p>Input $lContador: <input type='text' name='input$lContador'.></p>";
            $lContador++;
        }
        ?>
        <br>
        <a href="javascript:history.go(-1)">Voltar a página principal</a>
    </form>
</body>

</html>
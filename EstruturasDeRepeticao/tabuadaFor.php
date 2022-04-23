<html>

<head>
    <title>Tabuada no For</title>
</head>

<body>
    <?php
    $valorTabuada = $_GET['edtNumeroTabuada'];
    echo "<h3>Tabuada do número $valorTabuada</h3>";
    for ($lContador = 1; $lContador <= 10; $lContador++) {
        echo "$valorTabuada X $lContador = ".($valorTabuada * $lContador)."<br>";
    }
    ?>
    <br>
    <a href="javascript:history.go(-1)">Voltar para a página principal</a>
</body>

</html>
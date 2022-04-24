<html>

<head>
    <title>Trabalhando com Array Associativos: Exemplos</title>
</head>

<body>

    <?php

    $funcionario01 = [
        "Nome" => "Diego Gielda",
        "Idade" => 21,
        "Status" => "Ativo"
    ];

    $funcionario02 = [
        "Idade" => 24,
        "Nome" => "Paloma",
        "Status" => "Ativo"
    ];

    $funcionario03 = [
        "Status" => "Inativo",
        "Idade" => 21,
        "Nome" => "Laisa"
    ];

    $listaDeFuncionarios = [$funcionario01, $funcionario02, $funcionario03];

    echo "<pre>";
    print_r($listaDeFuncionarios);
    echo "</pre>";

    for ($lContador = 0; $lContador < count($listaDeFuncionarios); $lContador++) {

        echo $listaDeFuncionarios[$lContador]['Nome'] . "<br>";
    }

    

    ?>

    <br><br>
    <a href="javascript:history.go(-1)">Voltar para a página anterior</a>

</body>

</html>
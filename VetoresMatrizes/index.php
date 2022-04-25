<html>

<head>
    <title>Trabalhando com vetores e matrizes</title>
</head>

<body>
    <h1>Exemplos de Vetores</h1>

    <?php

    $vetorDeNumeros = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

    print_r($vetorDeNumeros);
    echo "<br><br>";
    foreach ($vetorDeNumeros as $variavelQueRecebeOValorDeIndiceAIndice) {

        echo "$variavelQueRecebeOValorDeIndiceAIndice ";
    }
    unset($variavelQueRecebeOValorDeIndiceAIndice);
    echo "<br><br>";

    $numeros = array(
        "um" => 1,
        "dois" => 2,
        "treis" => 3,
        "dezessete" => 17
    );
    /*
        DECLARAÇÃO IDÊNTICA A CIMA.
        $numeros = array("um" => 1, "dois" => 2, "treis" => 3, "dezessete" => 17);   
    */

    foreach ($numeros as $numeroIndice => $numeroSeuValor) {

        echo "Chave:[$numeroIndice] => Contem o valor: $numeroSeuValor. <br>";
    }
    echo "<br><br>";

    $alunosDaClasse = ["Diego", "Tiago", "João", "Jhonatan"];

    echo "Lista de alunos tem " . (count($alunosDaClasse)) . "<br>";

    for ($lContador = 0; $lContador < count($alunosDaClasse); $lContador++) {

        echo ($lContador + 1) . ". " . $alunosDaClasse[$lContador] . "<br>";
    }

    ?>
    <br><br>
    <form method="get" action="arrayAssociativos.php">
        <label for="btnAssociativo" name="lblAssociativo">Trabalhando com Array Associativos</label>
        <input type="submit" name="btnAssociativo" value="Continuar">
    </form>
    
    <br><br>
    <form method="get" action="trabalhandoComArray.php">
        <label for="btnTrabalhandoComArray" name="lblTrabalhandoComArray">Trabalhando com Array no PHP</label>
        <input type="submit" name="btnTrabalhandoComArray" value="Trabalhando com Array">
    </form>

</body>

</html>
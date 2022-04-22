<html lang="pt-br">
    <head>
        <style>
            h3{
                color: blue;
            }
            .Resposta{
                text-indent: 30px;
            }
        </style>

        <title>Atividades livro "PHP: programe de forma rápida e prática"</title>
    </head>
    <body>
        <h1>Data Atual</h1>

        Hoje é
        <?php
          date_default_timezone_set(
          'America/Sao_Paulo');
          echo date('d/m/Y');
        ?>.

        <h1 style="text-align: center;">Atividades livro "PHP: programe de forma rápida e prática"</h1>
        <h3>Exercícios</h3>

        <p>1. Alterar o exemplo para que mostre a data e a hora atuais dentro da página web, por 
            exemplo: “Hoje é dia 15/8/2016 e agora são 17:25 horas.”</p>
        <div class="Resposta">Resposta:
            <?php
                echo "Hoje é dia ".date('d/n/Y')." e agora são ".date('h:i')." horas<br>";
            ?>
        </div>
        <p>2. Alterar o exercício 1 para mostrar a data por extenso, 
            por exemplo: “Hoje é dia 15 de agosto de 2016 e agora são 17 horas e 25 minutos.”</p>
        <div class="Resposta">Resposta:
            <?php
                date_default_timezone_set('America/Sao_Paulo');
                echo "Hoje é dia ".date('d')." de ".date('F')." de ".date('Y')." e agora são ".date('h')." horas e ".date('i')." minutos";
            ?>
        </div>
        <br>
    </body>
</html>
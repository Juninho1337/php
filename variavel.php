<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        body{
            background: rgb(139,168,255);
            background: radial-gradient(circle, rgba(139,168,255,1) 0%, rgba(0,87,215,1) 100%);
            text-align: center;
            font-size: xx-large;
            padding-top: 2%;
        }
        
        .phpe {
            color: rgb(231, 231, 231);
            font-family: sans-serif;
            animation: blink 1s linear infinite;
        }
        @keyframes blink {
            15% {
            opacity: .2;
            }
            50% {
            opacity: .5;
            }
            100% {
            opacity: 1;
            }
        }
        
    </style>
</head>
<body>

    <div class="phpe">

        <?php
            $nome = "Ciclano";
            $sobrenome = "Fulano";
            $mensagem = "Olá, meu nome é " . $nome . " " . $sobrenome . "!". "<br>";
            echo $mensagem;

            $idade = "35 anos";
            $altura = "1,73 metros";
            $cidade = "CP";
        
            $questao  = "Tenho " . $idade . ", minha altura é " . $altura . " e moro em " . $cidade . ".". "<br>";
            echo $questao;
        ?>

    </div>

    <br>

    <img width="30%" height="30%" src="https://i.redd.it/my-dog-is-literally-the-goofiest-dog-ever-v0-8gmla7cejn6e1.jpg?width=3024&format=pjpg&auto=webp&s=202e7aab3b83aed519d1d3038a3f5f6fce6a27dd" alt="cachorro">

</body>
</html>
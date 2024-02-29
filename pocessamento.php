<?php

$nome = $_POST["nome"];
$peso = $_POST["peso"];
$altura = $_POST["altura"];


$imc = $peso/ ($altura*$altura);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo-proc.css" media="screen"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Saira+Extra+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <title>IMC - Calculo</title>
</head>
<body>
    <div id="conteiner">
        <h2>Nome: <?php echo $nome ?></h2>
        <h2>IMC: <?php echo $imc ?></h2>

        <h2>Peso:
            <?php 
                if($imc > 40){
                    echo "obesidade extrema";
                }
                else if($imc > 35){
                    echo "obesidade grau 2";
                }
                else if($imc > 30){
                    echo "obesidade grau 1";
                }
                else if($imc > 25){
                    echo "sobrepeso";
                }
                else if($imc > 18.5){
                    echo "ideial";
                }
                else if($imc < 18.5){
                    echo "baixo";
                }
            ?>
        </h2>

        <a href="index.html"><button>Voltar</button></a>

    </div>
    
</body>
</html>
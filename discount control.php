<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicional para desconto</title>
</head>
<body>
    <?php 
    $cartao = true ; 
    $valor_c = 1000 ; 
    echo "valor sem desconto : $valor_c <br>";
    if ($cartao == true && $valor_c >= 150){
        $valor_c = $valor_c - (($valor_c * 10)/100);
        echo" valor com desconto $valor_c";
    }else{
        echo "você não possui cartão <br> 
        por isso o valor pago será $valor_c";
    }
    ?>
</body>
</html>

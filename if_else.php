<html>
    <head>
        <meta charset="UTF-8">
        <title>variaveis</title>
    </head>
    <body>
        <?php
       $usuario_possui_cartao_loja = true;
       $valor_da_compra = 100;
       $frete = 50;
       $desconto_frete = false;

    if ($usuario_possui_cartao_loja == true && $valor_da_compra >=400) {
        $frete = 0;
        $desconto_frete = true;
        echo "Valor do frete: $frete";
    } else if ($usuario_possui_cartao_loja == true && $valor_da_compra >= 300) {
        $frete = 20;
        $desconto_frete = true;
        echo "Valor do frete: $frete";
    } else if ($usuario_possui_cartao_loja && $valor_da_compra >= 100) {
        $frete = 30;
        $desconto_frete = true;
        echo "Valor do frete: $frete";
    }       
       ?>
       <h1> Detalhes da compra </h1>
       <p> Possui o card da loja?
       <?php $usuario_possui_cartao_loja ? "Sim" : "Não";  
       ?>
       </p>
       <p> Valor da compra acima até 400?
        <?php if ($valor_da_compra >= 400) {
            echo "Sim";
        } else {
            echo "Não";
        }
       ?>
       </p>
       <p> Valor do frete:
       <?php if ($desconto_frete == true) {
        echo "Grátis";
       } else {
        echo "$frete";
       }
       ?>
       </p>
    </body>
</html>
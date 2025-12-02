<html>
    <head>
        <meta charset="UTF-8">
        <title>variaveis</title>
    </head>
    <body>
        <?php
        $nome = 'Lucas';
        $idade = 25;
        $peso = 80.5;
        $fumante = false;
        ?>
        <h1> Ficha cadastral</h1>
        <br/>
        <P>Nome: <?php echo $nome; ?></P>
        <P>Idade: <?php echo $idade; ?></P>
        <P>Peso: <?php echo $peso; ?></P>
        <P>Fumante: <?php echo $fumante ? 'Sim' : 'Não'; ?></P>

    </body>
</html>
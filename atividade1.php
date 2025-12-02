<html>
	<head>
		<meta charset="UTF-8">
		<title>Atividade 1</title>	
	</head>
	<body>
        <?php 
        $peso = 75.5;
        $idade = 28;
         if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
            echo " A pessoa pode doar sangue.";
         } else { 
            echo " A pessoa não pode doar sangue.";
         };
        ?> 
	
	</body>
</html>

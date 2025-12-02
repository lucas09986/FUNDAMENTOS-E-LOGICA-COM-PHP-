<html>
	<head>
		<meta charset="UTF-8">
		<title>My PHP Page</title>	
	</head>
	<body>
		<?php
        $lista_de_coisas ['Frutas'] = array( 1 => "banana", 2 => "maçã", 3 => "laranja");
        $lista_de_coisas ['Pessoas'] = array( 1=> "Ana", 2 => "Bruno", 3 => "Carlos");
		echo '<pre>';
        print_r($lista_de_coisas);
        echo '</pre>';
        ?> 
	
	</body>
</html>

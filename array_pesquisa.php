html>
	<head>
		<meta charset="UTF-8">
		<title>My PHP Page</title>	
	</head>
	<body>
		<?php

        //* in_array para pesquisar valores em arrays multidimensionais *//
        //* array_search para retornar o indice do valor pesquisado *//
        $lista_de_frutas = array( 1 => "banana", 2 => "maçã", 3 => "laranja");
		
        echo '<pre>';
        print_r($lista_de_frutas);
        echo '</pre>';

        echo array_search("banana",$lista_de_frutas) ;

        ?> 
	
	</body>
</html>

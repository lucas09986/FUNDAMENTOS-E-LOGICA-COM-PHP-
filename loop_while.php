<html>
	<head>
		<meta charset="UTF-8">
		<title>My PHP Page</title>	
	</head>
	<body>
		<?php
        $contador = 1;
        echo "Iniciando o loop while:<br/>";
        while ($contador <= 10) {
            echo "Contador: " . $contador . "<br/>";
            $contador++;
            echo "final do loop<br/>";
        }
        ?>
	</body>
</html>

<html>
	<head>
		<meta charset="UTF-8">
		<title>My PHP Page</title>	
	</head>
	<body>
		<?php
        for( $x = 5; true; $x++) {
            if( $x <= 20 ) {
                break;
            }
            echo "O número é: $x <br/>";
        }
		 ?>
	</body>
</html>

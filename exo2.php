<Doctype html>
<html>
<head>
<title> Exeercice php
</title>
</head>
<body>
	<?php
		$age = 17;
		$majeur = ($age >14);
		$mineur = ($age <= 14);
		if($mineur){
		echo "Vous etes un enfant !!!";
		}else if($majeur){
				echo "Vous etes Majeur";
		}
		?>
	</body>
	</html>
	
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta charset="utf-8">
	<title>Home</title>
	<link rel="stylesheet" href="/stylesheets/restaurantes.css">
</head>
<body>

	<div class="col-lg-offset-3 col-lg-6">
		<?php

		$file = fopen('restaurantes.csv', 'r');
		$linhas = [];
		while(($line = fgetcsv($file, $enclosure = ';')) !== FALSE){
			?>
			<div class="card-restaurante">

				<p>
					Nome:
					<?php
					print_r($line[0]);
					?>
				</p>
				<p>
					Endereço:
					<?php
					print_r($line[1]);
					?>
				</p>
				<p>
					Descrição:
					<?php
					print_r($line[2]);
					?>
				</p>
			</div>
			<br>

			<?php
		}
		fclose($file);

		?>

	</div>

	<a href="/novo_restaurante.php" style="float: right;">Inserir novo restaurante</a>
</body>
</html>

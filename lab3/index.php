<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кириллов Д.П. | 201-322 | №3</title>

	<link rel="stylesheet" href="styles.css">
</head>
<body class="body">
	<header class="header">
		<div class="container header__inner">
			<img 
				src="images/logo.png"
				alt="Polytech"
				class="header__logo"
			>

			<div class="header__info">Кириллов Д.П. | 201-322 | №3</div>
		</div>
	</header>

	<main class="main container">
		<div class="controller">
			<?php
				if (!isset($_GET['store']))
					$_GET['store'] = '';
				else
					if (isset($_GET['key']))
						$_GET['store'] .= $_GET['key'];
			?>

			<div class="storage"><?php echo $_GET['store'] ?></div>

			<?php
				for ($i = 0; $i < 10; $i++) { 
					echo '<a href="/?key=' . $i . '&store=' . $_GET['store'] . '" class="b' . $i . ' b">' . $i . '</a>';
				}
			?>

			<a href="/" class="reset">СБРОС</a>
		</div>
	</main>

	<footer class="footer">
		<div class="footer__info"><?php echo 'Количество нажатий: ' . strlen($_GET['store']) ?></div>
	</footer>
</body>
</html>
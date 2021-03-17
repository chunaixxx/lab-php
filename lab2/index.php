<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Кириллов Д.П. | 201-322 | №2</title>

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

			<div class="header__info">Кириллов Д.П. | 201-322 | №2</div>
		</div>
	</header>

	<main class="main container">
		<?php
			$start_value = -10;
			$encounting = 25;
			$step = 1;
			$type = $_GET["type"];

			$sum = 0;
			$average = 0;

			$min = func($start_value);
			$max = func($start_value);

			function func($x) {
				if ($x <= 10)
					return 3 * $x ** 3 + 2;

				if ($x > 10 and x < 20) 
					return 5 * $x + 7;

				if ($x >= 20) 
					return $x / (22 - $x) - $x;
			}

			if ($type !== 'A' 
				and $type !== 'B'
				and $type !== 'C' 
				and $type !== 'D' 
				and $type !== 'E') {
				echo '<div style="margin-bottom: 10px; font-weight: bold;">Укажите правильный тип верстки</div>';
			}

			if ($type === 'B') echo '<ul>';
			if ($type === 'C') echo '<ol>';
			if ($type === 'D') 
				echo '<table border="1">
						<tr>
							<th>№</th>
							<th>x</th>
							<th>y</th>
						</tr>
					 ';

			for ($x = $start_value, $i = 1; $x < $encounting; $x += $step, $i++) {
				$y = round(func($x), 3);

				if ($y < $min) $min = $y;
				if ($y > $max) $max = $y;

				if ($x !== 22)
					$sum += $y;
				else
					$y = 'error';

				if ($type === 'A')
					echo "f($x) = $y <br>";

				if ($type === 'B' or $type === 'C')
					echo "<li>f($x) = $y</li>";

				if ($type === 'D')
					echo "<tr>
							<td>$i</td>
							<td>$x</td>
							<td>$y</td>
						  </tr>";
				
				if ($type === 'E')
					echo "<div class=\"typeE\">f($x) = $y</div>";
			}

			if ($type === 'B') echo '</ul>';
			if ($type === 'C') echo '</ol>';
			if ($type === 'D') echo '</table>';

			echo '<br>';

			echo "Максимальное значение: $max<br>";
			echo "Минимальное значение: $min<br>";

			$average = $sum / floor($encounting / $step);
			echo "Среднее  арифметическое  всех  значений: $average<br>";

			echo "Сумма всех значений функции: $sum<br>";
		?>
	</main>

	<footer class="footer">
		<div class="footer__info"><?php echo "Тип верстки: $type" ?></div>
	</footer>
</body>
</html>
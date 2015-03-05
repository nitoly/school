<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
		<a href="/../add.php">Добавить новость</a>

<?php foreach ($items as $item): ?>
		<h1><?php echo $item->title;?></h1>
		<p><?php echo $item->new; ?></p>
		<?php echo '<br>'; ?>
	    <?php endforeach; ?>

	</body>
</html>
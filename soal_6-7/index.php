<?php include 'fungsi/config.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
	
	<div class="container">
		<h3 class="text-center">Daftar Artikel</h3>
		<hr>
		<?php $data = tampilArtikel(); foreach($data as $row): ?>
			<dir class="well">
				<a href="detail.php?id=<?= $row['id'] ?>">
					<?= $row['title']; ?>
				</a>

				<div class="pull-right">
					<?= jumlahKomentar($row['id']) ?> komentar
				</div>
			</dir>
		<?php endforeach ?>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

</body>
</html>
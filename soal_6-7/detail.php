<?php 
include 'fungsi/config.php';
$rowUsername = username($_GET['id']); 
$rowArtikel = detailArtikel($_GET['id']);
$rowKoment = getComment($_GET['id']);

?>

<!DOCTYPE html>
<html>
<head>
	<title>komentar</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">


</head>
<body>
	
	<div class="container">
		<h3><?= $rowArtikel['title'] ?></h3>
		<h4>Dibuat Oleh : <?= $rowUsername['username'] ?></h4>
		<p><?= $rowArtikel['content'] ?></p>
		<hr>
		<form method="post">
			<div class="form-group">
				<label>Komentar</label>
				<input type="text" name="koment" class="form-control">
			</div>
			<button class="btn btn-primary" type="submit" name="btnkomen">
				Masukan Komentar
			</button>
		</form>

		<?php 
			if(isset($_POST['btnkomen'])) {
				postComment($_POST, $_GET['id']);
				echo "<meta http-equiv='refresh' content='1.5;url=detail.php?id=".$rowArtikel['id']."'>";
			}
		?>


		<hr>

		<h3 class="text-center">Komentar</h3>
		<?php foreach($rowKoment as $row ): ?>
			<div class="well">
				<p><?= $row['comment'] ?></p>
			</div>
		<?php endforeach ?>


		
		<hr>

		<a href="index.php" class="btn btn-default">Kembali</a>

	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>

</body>
</html>
<?php 

function jumlahKomentar($idArtikel) {
	global $conn;

	$query = "SELECT * FROM comments WHERE postID = '$idArtikel' ";

	$res = mysqli_query($conn, $query);
	$row = mysqli_num_rows($res);
	return $row;
}

function getComment($idArtikel) {
	global $conn;

	$query = "SELECT * FROM comments WHERE postID = '$idArtikel' ";
	$res = mysqli_query($conn, $query);
	$row = [];
	// $rows = mysqli_fetch_assoc($res);
	while($rows = mysqli_fetch_assoc($res)) {
		$row[] = $rows;
	}
	return $row;
}

function postComment($data, $idArtikel) {
	global $conn;

	$komentar = $data['koment'];
	$query = "INSERT INTO comments VALUES ('', '$komentar', '$idArtikel')";
	$res = mysqli_query($conn, $query);
	
}

?>
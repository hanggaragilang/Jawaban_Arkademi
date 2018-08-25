<?php 


function tampilArtikel() {
	global $conn;

	$query = "SELECT * FROM posts";
	$res = mysqli_query($conn, $query);

	$row = [];

	while ( $rows = mysqli_fetch_assoc($res) ) {
		$row[] = $rows;
	}

	return $row;
}


function detailArtikel($idArtikel) {
	global $conn;

	$query = "SELECT * FROM posts WHERE id = '$idArtikel' ";
	$res = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($res);

	return $row;

}

function username($idUsername) {
	global $conn;

	$query = "SELECT * FROM users WHERE id = '$idUsername'";
	$res = mysqli_query($conn, $query);

	$row = mysqli_fetch_assoc($res);
	return $row;
}

?>
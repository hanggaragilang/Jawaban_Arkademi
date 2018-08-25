
<?php


function fibo($baris, $kolom) {
// siapkan 2 angka awal
$angka_sebelumnya = 0;
$angka_sekarang = 1;
$output = 0;
  

for ($i=1; $i<= $baris; $i++) {
	for ($a = 1 ; $a <= $kolom; $a++){
	  // hitung angka yang akan ditampilkan
	  $output += $angka_sebelumnya;
	  echo " $output ";

	  //siapkan angka untuk perhitungan berikutnya
	  $angka_sebelumnya = $angka_sekarang;
	  $angka_sekarang = $output;
	}
	echo "<br>";
  }
}

fibo(4,3);

?>
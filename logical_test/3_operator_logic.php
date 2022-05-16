<?php
function bagi($pembilang, $penyebut){
	$hasil = 0;
	for ($p = $pembilang; $p >= $penyebut; $p -= $penyebut){
		$hasil++;
	}
	return $hasil;
}

// contoh output, boleh diubah
echo "7/2 = ", bagi(7, 2), "\n";
echo "8/4 = ", bagi(8, 4), "\n";
echo "10/6 = ", bagi(10, 6), "\n";
echo "1/3 = ", bagi(1, 3), "\n";
?>
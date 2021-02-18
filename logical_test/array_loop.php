<?php 
$aplikasi[1] = 'gtAkademik';
$aplikasi[2] = 'gtFinansi';
$aplikasi[3] = 'gtPerizinan';
$aplikasi[4] = 'eCampuz';
$aplikasi[5] = 'eOviz';
echo "Array Loop : <br>";
$no = 1;
while ($no <= count($aplikasi)) {
	echo $aplikasi[$no].'<br>';
	$no++;
}
 ?>
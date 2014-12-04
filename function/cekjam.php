<?php
date_default_timezone_set('Asia/Jakarta');
function getmasuk(){
global $jammasuk;
$jamnow=date('H1');

	if ($jamnow > 7 AND $jamnow < 9 )
	{
		echo "sekarang jam".$jamnow.;
	}
	else
	{
		include "absenpulang.php";
	}
}

?>
<?php
function gethari(){
date_default_timezone_set('Asia/Jakarta');
global $day, $nama_hari, $kd_hari;
$day=date('l');


if ($day == "Sunday")
	{
	$nama_hari="Minggu";
	$kd_hari="7";
	}
else if ($day == "Monday")
	{
	$nama_hari="Senin";
	$kd_hari="1";
	}
elseif ($day == "Tuesday")
	{
	$nama_hari="Selasa";
	$kd_hari="2";
	}
elseif ($day == "Wednesday")
	{
	$nama_hari="Rabu";
	$kd_hari="3";
	}
elseif ($day == "Thursday")
	{
	$nama_hari="Kamis";
	$kd_hari="4";
	}
elseif ($day == "Friday")
	{
	$nama_hari="Jum'at";
	$kd_hari="5";
	}
elseif ($day == "Saturday")
	{
	$nama_hari="Sabtu";
	$kd_hari="6";
	}
}
?>
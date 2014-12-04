<?php
//login database
	$server="localhost";
	$user="root";
	$password="";
	$database="time_tabling";
global $server, $user, $password, $database, $koneksi_mysql;
function koneksi_mysql(){
	global $server, $user, $password, $database, $koneksi_mysql;
	$koneksi_mysql=mysql_connect($server, $user, $password);
	if(!$koneksi_mysql){
	die('Koneksi ke Server MYSQL gagal dikarenakan'. mysql_error());
	}
	$pilih_database=mysql_select_db($database, $koneksi_mysql);
	if(!$pilih_database){
	die('Pemilihan database gagal dilakukan karena: '. mysql_error());
	}
}
?>
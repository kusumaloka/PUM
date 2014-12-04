<?php
include_once "./function/koneksi.php";
	koneksi_mysql();
	$kd_jadwal=$_POST['kd_jadwal'];
	$kd_matakuliah=$_POST['kd_matakuliah'];
	$kd_semester=$_POST['kd_semester'];
	$kd_dosen=$_POST['kd_dosen'];
	$kd_tahunajar=$_POST['kd_tahunajar'];
	$kd_dosen_anggota=$_POST['kd_dosen_anggota'];
	$jam_mulai=$_POST['jam_mulai'];
	$menit_mulai=$_POST['menit_mulai'];
	$jam_mulai=$_POST['jam_mulai'];
	$jam_selesai=$_POST['jam_selesai'];
	$menit_selesai=$_POST['menit_selesai'];
	$kd_ruang=$_POST['kd_ruang'];
	$kd_hari=$_POST['kd_hari'];
	
	$sql="
	UPDATE `time_tabling`.`t_jadwal` SET 
	`kd_jadwal` = '$kd_jadwal', 
	`kd_semester` = '$kd_semester', 
	`kd_tahunajar` = '$kd_tahunajar', 
	`kd_matakuliah` = '$kd_matakuliah', 
	`kd_dosen1` = '$kd_dosen', 
	`kd_dosenanggota` = '$kd_dosen_anggota', 
	`jam_mulai` = '$jam_mulai$menit_mulai', 
	`jam_selesai` = '$jam_selesai$menit_selesai', 
	`kd_ruang` = '$kd_ruang', 
	`kd_hari` = '$kd_hari' 
		WHERE 
			`t_jadwal`.`kd_jadwal` = '$kd_jadwal'";
	
	$eksekusi_query=mysql_query($sql);
	if(!$eksekusi_query){
	die ("Query salah karena ".mysql_error());
	}
	echo "<html>";
	echo "	<head>";
	echo "";
	echo " 		<meta charset='utf-8'>";
	echo "";
	echo "		<meta name='product' content='Jadwal Kuliah'>";
	echo " 		<meta name='author' content='Bagus Kusuma Loka'>";
	echo "		<meta name='description' content='Aplikasi untuk menampilkan jadwal kuliah'>";
	echo "		<meta name='keywords' content='Jadwal Kuliah, Polinela, Ekbis, MI'>";
	echo "";
	echo "		<link rel='stylesheet' href='css/metro-bootstrap.css'>";
	echo "		<link rel='stylesheet' href='css/docs.css'>";
	echo "		<link href='js/prettify/prettify.css' rel='stylesheet'>";
	echo "";
	echo "		<script src='js/jquery/jquery.min.js'></script>";
	echo "		<script src='js/jquery/jquery.widget.min.js'></script>";
	echo "		<script src='js/prettify/prettify.js'></script>";
	echo "";
	echo "		<script src='js/metro/metro-loader.js'></script>";
	echo "		<script src='js/docs.js'></script>";
	echo "		<script src='js/github.info.js'></script>";
	echo "";	
	echo "";
	echo "		<title>Selamat Anda berhasil menghapus jadwal Semester $kd_semester</title>";
	echo "	</head>";
	echo "";
	echo "	<body class='metro'>";
	echo "		<header class='bg-dark' data-load='header.html'></header>";
	echo "		<div class='grid container'>";
	echo "			<div class='row'>";
	echo "				<div class='span8 bg-white'>";
	echo "					<h1>";
	echo "					Selamat Anda telah berhasil menghapus jadwal kuliah Semester $kd_semester";
	echo "					</h1>";
	echo "					<br>";
	echo "					<h2>";
	echo "						<a href='jadwal.php?kd_semester=$kd_semester'><i class='icon-arrow-left'></i>&nbspKembali ke Jadwal Semester $kd_semester</a>";
	echo "					</h2>";
	echo "				</div>";
	echo "			</div>";
	echo "		</div>";	
	echo "	</body>	";
	echo "";
	echo "</html>";
?>
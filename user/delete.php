<?php
include_once "./function/koneksi.php";
	koneksi_mysql();
	$kd_jadwal=$_GET['kd_jadwal'];
	
	$sql="
	DELETE FROM `time_tabling`.`t_jadwal` WHERE `t_jadwal`.`kd_jadwal` = '$kd_jadwal' ";
	
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
	echo "		<title>Selamat Anda berhasil menghapus jadwal</title>";
	echo "	</head>";
	echo "";
	echo "	<body class='metro'>";
	echo "		<header class='bg-dark' data-load='header.html'></header>";
	echo "		<div class='grid container'>";
	echo "			<div class='row'>";
	echo "				<div class='span8 bg-white'>";
	echo "					<h1>";
	echo "					Selamat Anda telah berhasil menghapus jadwal kuliah";
	echo "					</h1>";
	echo "					<br>";
	echo "					<h2>";
	echo "						<a href='jadwalsemua.php'><i class='icon-arrow-left'></i>&nbspKembali ke Jadwal</a>";
	echo "					</h2>";
	echo "				</div>";
	echo "			</div>";
	echo "		</div>";	
	echo "	</body>	";
	echo "";
	echo "</html>";
?>
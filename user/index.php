<html>

	<head>
	
		<meta charset="utf-8">

		<meta name="product" content="Jadwal Kuliah">
		<meta name="author" content="Bagus Kusuma Loka">
		<meta name="description" content="Aplikasi untuk menampilkan jadwal kuliah">
		<meta name="keywords" content="Jadwal Kuliah, Polinela, Ekbis, MI">

		<link rel="stylesheet" href="css/metro-bootstrap.css">
		<link rel="stylesheet" href="css/docs.css">
		<link href="js/prettify/prettify.css" rel="stylesheet">

		<script src="js/jquery/jquery.min.js"></script>
		<script src="js/jquery/jquery.widget.min.js"></script>
		<script src="js/prettify/prettify.js"></script>

		<script src="js/metro/metro-loader.js"></script>
		<script src="js/docs.js"></script>
		<script src="js/github.info.js"></script>
		
		<meta http-equiv="refresh" content="30" />
		<title>Home</title>
	</head>
	

	<body class="metro">
		<header class="bg-dark" data-load="header.html"></header>
		<div class="grid container">
			<div class="row">
				<div class="span8 bg-white">
					<div class="padding20 introduce bg-yellow">
						<h1 class="ntm fg-white">Selamat Datang</h1>
						<p class="fg-white">Website ini menampilkan jadwal kuliah dari Program Studi Manajemen Informatika beserta Staf Dosen yang ada.</p>
						<p class="fg-white item-title">Copyright: Jurusan Ekonomi dan Bisnis 2013</p>
					</div>
				</div>
				<div class="span4">
					<div class="row no-margin">
						<div class="span4 topspan20 bg-lightBlue " style="bold">
							<div class="times" data-role="times" data-style-background="bg-lightBlue" data-style-divider="fg-white" style="font-size: 35px"></div>
						</div>
					</div>
					<div class="row">
						<div class="span4 pos-rel">
							<div class="item-title  bg-lightBlue fg-white" style="font-size: 23px; padding: 30px">
							<?php
								include "function/gethari.php";
								gethari();
								echo $nama_hari;
							?>
							,
							<?php
								include "function/gettanggal.php";
								gettanggal();
								echo $tanggal;
							?>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="span12 bg-pink">
				<h1 class="fg-white"><center>Jadwal Kuliah</center></h1>
				</div>
			</div>
			
			<div class="row">
				<div class="span4 padding20 bg-lightBlue">
					<?php
					include "function/showjadwal4.php";
					showjadwal4();
					?>
				</div>
				<div class="span4 padding20 bg-lightRed">
					<?php
					include "function/showjadwal2.php";
					showjadwal2();
					?>
				</div>
				<div class="span4 padding20 bg-lightGreen">
					<?php
					include "function/showjadwal3.php";
					showjadwal3();
					?>
				</div>
			</div>
		</div>
		
		<div class="bg-steel">
			<div class="container padding 20 fg-white">
				<div class="carousel bg-transparent no-overflow" id="carousel2">
					<div class="slide" style="display: block; left: 0;">
						<div class="place-right">
							<img src="#"
							alt="" class="span3"/>
						</div>
						<h2 class="fg-white ntm">Jurusan Ekonomi dan Bisnis</h2>
						<p class="fg-white">Jurusan Ekonomi dan Bisnis adalah jurusan di Polinela yang memiliki 3 program studi</p>
						<p class="fg-white">Terdiri dari Agribisnis, Akuntansi, dan juga Manajemen Informatika</p>
					</div>
					
					<div class="slide" style="display: block; left: 0;">
						<div class="place-right">
							<img src="./logo/polinela.png"
							alt="" class="span3"/>
						</div>
						<h2 class="fg-white ntm">Politeknik Negeri Lampung</h2>
						<p class="fg-white">Politeknik Negeri Lampung adalah perguruan tinggi berbasis vokasi <br>terletak di jalan Soekarno Hatta</p>
						<p class="fg-white">Proses pembelajaran yang ditekankan adalah untuk menyongsong dunia kerja</p>
					</div>
				</div>
				<script>
					$(function(){
						$("#carousel2").carousel({
							height: 210,
							period: 5000,
							duration: 1000,
							effect: 'fade',
							markers: {
								show: false
							}
						});
					})
				</script>
			</div>
		</div>
	</body>
	
</html>